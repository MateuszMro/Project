<?php

namespace App\Controller\Register;

use App\Entity\Clients;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {

        $user = new Clients();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $login = $form->get('login')->getData();
            $email = $form->get('email')->getData();
            $password = $form->get('plainPassword')->getData();
            $passwordRepeat = $form->get('confirmPassword')->getData();
            // Sprawdzenie, czy użytkownik o podanym loginie lub emailu już istnieje
            $existingUserLogin = $entityManager->getRepository(Clients::class)->findOneBy([
                'login' => $login,
            ]);

            $existingUserEmail = $entityManager->getRepository(Clients::class)->findOneBy([
                'email' => $email,
            ]);

            // Sprawdzenie, czy hasło i powtórzone hasło są takie same i czy użytkownik istnieje
            if ($existingUserLogin || $existingUserEmail) {
                // Hasło i powtórzone hasło nie pasują, dodaj komunikat do flash messages
                $this->addFlash('error', 'Konto o podanym e-mailu lub loginie już istnieje.');
                return $this->redirectToRoute('app_register');
            }
            elseif ($password !== $passwordRepeat){
                $this->addFlash('error', 'Hasła muszą być takie same.');
                return $this->redirectToRoute('app_register');
            }
            else {
                $registerIP = $request->getClientIp();
                $user->setEmail($email);
                $user->setLogin($login);
                $user->setConfirmCode(bin2hex(random_bytes(16)));
                $user->setConfirmAccount('Nieaktywne');
                $user->setIP($registerIP);
                // Encode the plain password
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $password
                    )
                );

                //Pobranie aktualnej daty
                $currentDateTime = new \DateTime();

                //Formatowanie daty i godziny na stringa
                $currentFormatDateTime = $currentDateTime->format('d-m-Y H:i:s');

                $user->setCreatedDate($currentFormatDateTime);

                $entityManager->persist($user);
                $entityManager->flush();

                try {
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
                    $mail->addReplyTo('melbe.na.zamowienie@gmail.com', 'Rejestracja');
                    $mail->addAddress($user->getEmail());

                    //Treść wiadomości
                    $confirmLink = $this->generateUrl('confirm_register', [
                        'code' => $user->getConfirmCode()
                    ], true);
                    $mail->isHTML(true);
                    $mail->Subject = 'Dokończ rejestrację konta';
                    $mail->Body = "<html>
                                         <head>
                                         </head>
                                         <body>
                                             <h2 class='font-bold text-5xl'>Kliknij w poniższy link aby aktywować konto</h2>
                                             <h3 class='font-bold text-3xl'><a href='http://52.58.230.169{$confirmLink}'>Potwierdź konto</a></h3>
                                         </body>
                                         </html>
                                           ";

                    //Wysłanie e-maila
                    $mail->send();

                    return $this->render('info-pages/confirm_sent.html.twig', [
                        'email' => $user->getEmail(),
                    ]);

                } catch (Exception $exception) {
                    return $this->render('info-pages/confirm_error.html.twig', [
                        'error' => $exception->getMessage(),
                    ]);
                }


            }
//                Dodaj komunikat sukcesu
//                $this->addFlash('success', 'Registration successful! You can now log in.');

        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
