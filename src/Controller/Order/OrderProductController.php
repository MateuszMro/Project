<?php

namespace App\Controller\Order;

use App\Entity\OrderProduct;
use App\Form\OrderProductForm;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderProductController extends AbstractController
{

    #[Route('/order', name: 'app_order')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $order = new OrderProduct();
        $productId = $request->query->get('productId');
        $newUserEmail = $request->query->get('email');
        $order->setProductID($productId);
        $user= $this->getUser();
        if($user){
            $userEmail= $user->getEmail();
            $order->setEmail($userEmail);
        }

        $form = $this->createForm(OrderProductForm::class, $order);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $userPhone = $form->get('numberPhone')->getData();
            do{
                //Numer zgłoszenia
                $orderNumber = mt_rand(100000000000,999999999999);

                //Czy już takiego nie ma
                $existingOrderNumber = $entityManager->getRepository(OrderProduct::class)->findOneBy(['orderNumber' => $orderNumber]);
            }while($existingOrderNumber);
            $order->setOrderNumber($orderNumber);
            $order->setPaymentStatus('DO ZAPŁATY');
            $order->setStatus('OCZEKUJE NA REALIZACJĘ');
            $order->setPrice('0');
            $currentDateTime = new \DateTime();
            $currentFormatDateTime = $currentDateTime->format('d-m-Y H:i:s');
            $order->setOrderDate($currentFormatDateTime);

            $entityManager->persist($order);
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
            if ($user){
                $mail->addAddress($userEmail);
            }
            else{
                $mail->addAddress($newUserEmail);
            }

            //Treść wiadomości
            $mail->isHTML(true);
            $mail->Subject = 'Zamówienie #'.$orderNumber;
            $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Twoje zamówienie zostało przyjęte. Oczekuj na kontakt naszego pracownika 
                                             celem poinformowania o cenie zamówienia. Cena dostępna będzie również
                                             w historii zamówień, która znajduje się w panelu klienta. Zamówienie jest realizowane po opłaceniu zamówienia.</h2>
                                             <h2>Numer zamówienia: $orderNumber</h2>
                                             <h2>Dziękujemy za złożenie zamówienia.</h2>
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
            $mail->Subject = 'Przyjęto nowe zamówienie #'.$orderNumber;
            $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Przyjęto nowe zamówienie od klienta.</h2>
                                             <h2>Numer zamówienia: $orderNumber</h2>   
                                             <h2>Więcej informacji uzyskasz w panelu administratora w zakładce zamówienia.</h2>                
                                         </body>
                                         </html>
                                           ";

            //Wysłanie e-maila
            $mail->send();

            return $this->render('info-pages/order-success.html.twig');
        }

        return $this->render('pages/order.html.twig', [
            'orderProductForm' => $form->createView(),
        ]);
    }
}