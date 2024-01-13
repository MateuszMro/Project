<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/register', name: 'register')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        //  php bin/console dbal:run-sql "SELECT * FROM Users"
        //  php bin/console dbal:run-sql "DELETE FROM Users WHERE password='mati1'"
        //  php bin/console dbal:run-sql "INSERT INTO Users VALUES (1,'Mateusz','Mati@wp.pl','123','login')"
        //  php bin/console dbal:run-sql "UPDATE Users SET role='user' WHERE login='login'"

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login=trim($_POST['login']);
            $email=trim($_POST['email']);
            $password =trim($_POST['password']);
            $password_rep =trim($_POST['password_rep']);
            $users = new Users();
            if($password == $password_rep){
                $users->setEmail($email);
                $users->setLogin($login);
                $users->setPassword($password);
                $users->setRole('guest');
                $entityManager->persist($users);
                $entityManager->flush();
            }
        }

        //$email = 'mat';
        //$password = 'mati1';
        //$login = new Users();
        //$login->setLogin('login');
        //$login->setEmail($email);
        //$login->setRole('admin');
        //$login->setPassword($password);
        //$entityManager->persist($login);
        //$entityManager->flush();;


        //return new Response('Saved' .$login->getId());

        return $this->render('login/register.html.twig', [
            'controller_name' => 'UsersController',

        ]);

    }
}
