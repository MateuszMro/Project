<?php

namespace App\Controller\Login;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginSecurityController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManagers){
        $this->entityManager=$entityManagers;
    }
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $user = $this->getUser();

        if ($user){
            return $this->redirectToRoute('homepage');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('login-security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        //return new RedirectResponse($this->urlGenerator->generate('homepage'));
    }
}

//  php bin/console dbal:run-sql "SELECT * FROM Users"
//  php bin/console dbal:run-sql "DELETE FROM Users WHERE password='mati1'"
//  php bin/console dbal:run-sql "INSERT INTO Users VALUES (1,'Mateusz','Mati@wp.pl','123','login')"
//  php bin/console dbal:run-sql "UPDATE Users SET role='user' WHERE login='login'"