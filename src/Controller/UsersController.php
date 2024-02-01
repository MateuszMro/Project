<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManagers){
        $this->entityManager=$entityManagers;
    }

    #[Route('/register', name: 'register')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        //  php bin/console dbal:run-sql "SELECT * FROM Users"
        //  php bin/console dbal:run-sql "DELETE FROM Users WHERE password='mati1'"
        //  php bin/console dbal:run-sql "INSERT INTO Users VALUES (1,'Mateusz','Mati@wp.pl','123','login')"
        //  php bin/console dbal:run-sql "UPDATE Users SET role='user' WHERE login='login'"
        $errorLogin=false;
        $errorPassword=false;

        if(isset($_SESSION['Login_ROLE_ADMIN'])){
            return new RedirectResponse($this->generateUrl('admin_homepage'));
        }
        elseif (isset($_SESSION['Login_ROLE_USER'])){
            return new RedirectResponse($this->generateUrl('user_homepage'));

        }
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = trim($_POST['login']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $password_rep = trim($_POST['password_rep']);
            $users = new Users();
            // Sprawdza czy użytkownik istnieje w bazie danych
            $userRepository = $this->entityManager->getRepository(Users::class);
            $user = $userRepository->findOneBy(['Login' => $login]);
            if (!$user) {
                if ($password === $password_rep) {
                    $users->setLogin($login);
                    $users->setPassword($password);
                    $users->setEmail($email);
                    $users->setRole('ROLE_USER');
                    $users->setConfirmAccount('Nieaktywne');
                    $users->setConfirmCode(bin2hex(random_bytes(16)));
                    $this->entityManager->persist($users);
                    $this->entityManager->flush();


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
                        $mail->addAddress($email);

                        //Treść wiadomości
                        $confirmLink = $this->generateUrl('confirm_register', [
                            'code' => $users->getConfirmCode()
                        ], true);
                        $mail->isHTML(true);
                        $mail->Subject = 'Dokończ rejestrację konta';
                        $mail->Body = "<html>
                                        <head>
                                        </head>
                                        <body>
                                            <h2 class='font-bold text-5xl'>Kliknij w poniższy link aby aktywować konto</h2>
                                            <h3 class='font-bold text-3xl'><a href='http://localhost:8000{$confirmLink}'>Potwierdź konto</a></h3>
                                        </body>
                                        </html>
                                          ";

                        //Wysłanie e-maila
                        $mail->send();

                        return $this->render('login/confirm_sent.html.twig', [
                            'email' => $email,
                        ]);

                    } catch (Exception $exception) {
                        return $this->render('login/confirm_error.html.twig', [
                            'error' => $exception->getMessage(),
                        ]);
                    }
                }

                else{
                        $errorPassword = true;
                    }
                } else {
                    $errorLogin = true;
                }
            }

        return $this->render('login/register.html.twig', [
            'errorLogin' => $errorLogin,
            'errorPassword'=>$errorPassword,

        ]);

    }
}
