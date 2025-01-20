<?php

namespace App\Controller\Return;

use App\Entity\ReturnProduct;
use App\Entity\OrderProduct;
use App\Form\ReturnProductForm;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use function Symfony\Component\String\u;

class ReturnProductController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/return-product', name: 'app_return_product')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $returnProduct = new ReturnProduct();

        $form = $this->createForm(ReturnProductForm::class, $returnProduct);
        $form->handleRequest($request);

        $user = $this->getUser();
        $userEmail = $user->getEmail();

        if(!$user){
            return $this->redirectToRoute('app_login');
        }

        if ($form->isSubmitted() && $form->isValid()) {

            $orderNumber = $form->get('orderNumber')->getData();
            $numberPhone = $form->get('numberPhone')->getData();
            $name = $form->get('name')->getData();
            $surname = $form->get('surname')->getData();
            $reasonReturn = $form->get('reasonReturn')->getData();
            $numberBankAccount = $form->get('numberBankAccount')->getData();
            $numberBankAccount = str_replace(' ','', $numberBankAccount);

            $existingOrderNumber = $entityManager->getRepository(OrderProduct::class)->findOneBy([
                'orderNumber' => $orderNumber,
            ]);

            $existingReturn = $entityManager->getRepository(ReturnProduct::class)->findOneBy([
                'orderNumber' => $orderNumber,
            ]);

            if(!$existingOrderNumber){
                $this->addFlash('error', 'Zamówienie o podanym numerze nie istnieje.');

            }
            elseif ($existingReturn){
                $this->addFlash('error', 'Zwrot o podanym numerze zamówienia został już zrobiony.');
                return $this->redirectToRoute('app_return_product');
            }
            elseif ($existingOrderNumber->getEmail() !== $userEmail){
                $this->addFlash('error','Zamówienie o podanym numerze nie istnieje.');
                return $this->redirectToRoute('app_return_product');

            }
            elseif (strlen($numberBankAccount) !== 26){
                $this->addFlash('error', 'Numer rachunku bankowego musi składać się z 26 cyfr.');
                return $this->redirectToRoute('app_return_product');

            }
            else{

                do{
                    $numberReturn = mt_rand(100000000000,999999999999);

                    $existingNumberReturn = $entityManager->getRepository(ReturnProduct::class)->findOneBy(['numberReturn' => $numberReturn]);
                }while($existingNumberReturn);

                $returnProduct->setEmail($userEmail);
                $returnProduct->setOrderNumber($orderNumber);
                $returnProduct->setNumberPhone($numberPhone);
                $returnProduct->setName($name);
                $returnProduct->setSurname($surname);
                $returnProduct->setReasonReturn($reasonReturn);
                $returnProduct->setNumberBankAccount($numberBankAccount);
                $returnProduct->setNumberReturn($numberReturn);
                $returnProduct->setReturnStatus('PRZYJĘTO DO WERYFIKACJI');

                $currentDateTime = new \DateTime();
                $currentFormatDateTime = $currentDateTime->format('d-m-Y H:i:s');
                $returnProduct->setCreateReturn($currentFormatDateTime);

                $entityManager->persist($returnProduct);
                $entityManager->flush();

                //Wysłanie maila z potwierdzeniem do użytkownika
                $mail = new PHPMailer();
                //Konfiguracja serwera SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;
                $mail->CharSet = 'UTF-8';
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPAuth = true;
                $mail->Username = 'melbe.na.zamowienie@gmail.com';
                $mail->Password = 'wrowloijuocfypel';

                //Ustawienia wiadomości
                $mail->setFrom('melbe.na.zamowienie@gmail.com', 'Kuchnie');
                $mail->addReplyTo('melbe.na.zamowienie@gmail.com', 'Support');
                $mail->addAddress($userEmail);



                //Treść wiadomości
                $mail->isHTML(true);
                $mail->Subject = 'Zwrot #'.$numberReturn;
                $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Twój zwrot został przyjęty. Po otrzymaniu przez nas produktu i zaakceptowaniu zwrotu,                                          
                                             środki pieniężne zostaną zwrócone na podany w formularzu numer rachunku bankowego. O wszelkich działaniach
                                             będziemy informowali mailowo oraz informacje będą zamieszczone w panelu klienta.</h2>
                                             <h2>Numer zwrotu: $numberReturn</h2>
                                             <h2>Po więcej informacji zapraszamy na naszą stronę http://52.58.230.169/</h2>
                                         </body>
                                         </html>
                                           ";

                //Wysłanie e-maila
                $mail->send();


                // Wysłanie drugiego maila

                //Wysłanie maila informującego dział techniczny o nowym zamówieniu
                $mail = new PHPMailer();
                //Konfiguracja serwera SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;
                $mail->CharSet = 'UTF-8';
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPAuth = true;
                $mail->Username = 'melbe.na.zamowienie@gmail.com';
                $mail->Password = 'wrowloijuocfypel';

                //Ustawienia wiadomości
                $mail->setFrom('melbe.na.zamowienie@gmail.com', 'Kuchnie');
                $mail->addReplyTo('melbe.na.zamowienie@gmail.com', 'Support');
                $mail->addAddress('matemrocz@gmail.com');

                //Treść wiadomości
                $mail->isHTML(true);
                $mail->Subject = 'Przyjęto nowy zwrot #'.$numberReturn;
                $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Przyjęto nowy zwrot od klienta.</h2>
                                             <h2>Numer zwrotu: $numberReturn</h2>   
                                             <h2>Więcej informacji uzyskasz w panelu administratora w zakładce zwroty.</h2>                
                                         </body>
                                         </html>
                                           ";

                //Wysłanie e-maila
                $mail->send();

                return $this->render('info-pages/return-product-success.html.twig');
            }
        }

        return $this->render('pages/return-product.html.twig', [
            'returnProductForm' => $form->createView(),
        ]);

    }
}