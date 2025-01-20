<?php

namespace App\Controller\Order;

use App\Entity\OrderSpecialist;
use App\Form\OrderSpecialistForm;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderSpecialistController extends AbstractController
{

    #[Route('/order-specialist', name: 'app_order_specialist')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $order = new OrderSpecialist();

        $productId = $request->query->get('productId');
        $newUserEmail = $request->query->get('email');

        $order->setProductId($productId);
        $user = $this->getUser();
        if ($user){
            $userEmail = $user->getEmail();
            $order->setEmail($userEmail);
        }

        $form = $this->createForm(OrderSpecialistForm::class, $order);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            do{
                $visitNumber = mt_rand(100000000000,999999999999);
                $existingVisitNumber = $entityManager->getRepository(OrderSpecialist::class)->findOneBy(['visitNumber' => $visitNumber]);
            }while($existingVisitNumber);

            $order->setVisitNumber($visitNumber);
            $order->setPrice('0');
            $order->setStatus('USTALANIE TERMINU');
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
            $mail->Subject = 'Zamówienie wizyty #'.$visitNumber;
            $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Twoje zamówienie zostało przyjęte. Oczekuj na kontakt naszego pracownika 
                                             celem ustalenia dogodnego terminu wizyty. Szczegóły oraz termin wizyty będzie dostępny
                                             również po zalogowaniu w panelu klienta</h2>
                                             <h2>Numer wizyty: $visitNumber</h2>                                          
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
            $mail->Subject = 'Przyjęto nowe zamówienie wizyty #'.$visitNumber;
            $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Przyjęto nowe zamówienie wizyty specjalisty.</h2>
                                             <h2>Numer wizyty: $visitNumber</h2>   
                                             <h2>Więcej informacji uzyskasz w panelu administratora w zakładce wizyty specjalisty.</h2>                
                                         </body>
                                         </html>
                                           ";

            //Wysłanie e-maila
            $mail->send();


            return $this->render('info-pages/order-specialist-success.html.twig');
        }

        return $this->render('pages/order-specialist.html.twig', [
            'orderSpecialistForm' => $form->createView(),
        ]);
    }
}