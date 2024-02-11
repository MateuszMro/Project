<?php

namespace App\Controller\PasswordController;

use App\Entity\Clients;
use App\Form\ResetPasswordForm;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{

    #[Route('/reset_password', name: 'app_reset_password')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {

        $users = $this->getUser();

        if ($users){
            return $this->redirectToRoute('homepage');
        }


        $form = $this->createForm(ResetPasswordForm::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $email = $form->get('email')->getData();
            $login = $form->get('login')->getData();

            // Sprawdzenie, czy użytkownik o podanym loginie i emailu  istnieje
            $existingUser = $entityManager->getRepository(Clients::class)->findOneBy([
                'login' => $login
            ]);

            if ($existingUser && $existingUser->getEmail()===$email) {

                $randomNewPassword = bin2hex(random_bytes(4));

                //Ustawienie hasła użytkownika w bazie danych
                $existingUser->setPassword(
                  $userPasswordHasher->hashPassword(
                      $existingUser,
                      $randomNewPassword
                  )
                );

                $entityManager->flush();

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
                $mail->addAddress($email);

                //Treść wiadomości

                $mail->isHTML(true);
                $mail->Subject = 'Nowe hasło';
                $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Poniżej znajduje się Twoje nowe hasło, możesz je zmienić na stronie po zalogowaniu.</h2>
                                             <h3 class='font-bold text-3xl'>{$randomNewPassword}</h3>
                                         </body>
                                         </html>
                                           ";

                //Wysłanie e-maila
                $mail->send();

                return $this->render('info-pages/reset_password_sent.html.twig', [
                    'email' => $email,
                ]);

            }
            else {
                $this->addFlash('error', 'Podałeś zły email lub login.');
                return $this->redirectToRoute('app_reset_password');

            }

        }

        return $this->render('reset-password/reset_password.html.twig', [
            'resetPasswordForm' => $form->createView(),
        ]);
    }
}
