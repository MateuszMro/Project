<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

session_start();
class LoginController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager=$entityManager;
    }
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {

        $errors=$authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $warning=false;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login = $_POST['_username'];
            $password =$_POST['password'];
            $users = new Users();


            // Sprawdza czy użytkownik istnieje w bazie danych
            $userRepository = $this->entityManager->getRepository(Users::class);
            $user = $userRepository->findOneBy(['Login'=>$login]);


            if($user && password_verify($password,$user->getPassword())){
                //Poprawne logowanie
                $roles = $user->getRole();
                $email = $user->getEmail();
                $_SESSION['user']=$login;
                $_SESSION['email']=$email;
                $_SESSION['role']=$roles;

                if($roles === 'ROLE_ADMIN'){
                    $_SESSION['Login_ROLE_ADMIN']=true;

                    return new RedirectResponse($this->generateUrl('admin_homepage'));
                }
                elseif ($roles==='ROLE_USER'){
                    $_SESSION['Login_ROLE_USER']=true;


                    return $this->redirectToRoute('user_homepage');
                }
            }
            else{
                //Kod gdy dane logowania są błędne
                $warning=(!$user || !password_verify($password,$user->getPassword()));

            }

        }

        return $this->render('login/login.html.twig', [
            'last_username' => $lastUsername,
            'errors'         => $errors,
            'warning'=> $warning,
        ]);
    }
}