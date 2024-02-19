<?php

namespace App\Controller\HomeController;

use App\Entity\Defects;
use App\Form\DefectForm;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefectsController extends AbstractController
{
    #[Route('/defects', name: 'app_defects')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $defect = new Defects();
        $form = $this->createForm(DefectForm::class, $defect);
        $form->handleRequest($request);

        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }
        else{
            if ($form->isSubmitted() && $form->isValid()){
                $userEmail = $user->getEmail();
                $userPhone = $form->get('numberPhone')->getData();
                $userDescription = $form->get('description')->getData();
                $statusDefect = 'OPEN';

                $currentDateTime = new \DateTime();
                $currentFormatDateTime = $currentDateTime->format('d-m-Y H:i:s');

                    do{
                        //Numer zgłoszenia
                        $userDefectNumber = mt_rand(100000000000,999999999999);

                        //Czy już takiego nie ma
                        $existingUserDefectNumber = $entityManager->getRepository(Defects::class)->findOneBy(['defectNumber' => $userDefectNumber]);
                    }while($existingUserDefectNumber);

                $defect->setDefectNumber($userDefectNumber);
                $defect->setEmail($userEmail);
                $defect->setNumberPhone($userPhone);
                $defect->setDescription($userDescription);
                $defect->setStatus($statusDefect);
                $defect->setCreatedDate($currentFormatDateTime);

                $entityManager->persist($defect);
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
                $mail->Subject = 'Zgłoszenie #'.$userDefectNumber;
                $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Twoje zgłoszenie zostało przyjęte. Oczekuj na kontakt telefoniczny naszego pracownika
                                             lub odpowiedź na podany adres e-mail.</h2>
                                             <h2>Numer zgłoszenia: $userDefectNumber</h2>
                                         </body>
                                         </html>
                                           ";

                //Wysłanie e-maila
                $mail->send();


                // Wysłanie drugiego maila

                //Wysłanie maila informującego dział techniczny o nowym zgłoszeniu
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
                $mail->Subject = 'Przyjęto nowe zgłoszenie #'.$userDefectNumber;
                $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Przyjęto nowe zgłoszenie od użytkownika o adresie e-mail: <strong>$userEmail</strong>
                                              i numerze telefonu: <strong>$userPhone</strong></h2>
                                             <h2>Numer zgłoszenia: $userDefectNumber</h2>
                                             <h2>Treść zgłoszenia: <br> $userDescription</h2>
                                         </body>
                                         </html>
                                           ";

                //Wysłanie e-maila
                $mail->send();

                return $this->render('info-pages/defect_sent.html.twig', [
                    'email' => $userEmail,
                ]);


            }
        }
        return $this->render('pages/defects.html.twig', [
            'defectsForm' => $form->createView(),
        ]);
    }
}