<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'app_users')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        //  php bin/console dbal:run-sql "SELECT * FROM Users"
        //  php bin/console dbal:run-sql "DELETE FROM Users WHERE password='mati1'"
        //  php bin/console dbal:run-sql "INSERT INTO Users VALUES (1,'Mateusz','Mati@wp.pl','123','users')"
        //  php bin/console dbal:run-sql "UPDATE Users SET role='user' WHERE login='login'"

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login=$_POST['login'];
            $email=$_POST['email'];
            $password =$_POST['password'];
            $users = new Users();
            $users->setPassword($password);
            $users->setEmail($email);
            $users->setRole('guest');
            $users->setLogin($login);
            $entityManager->persist($users);
            $entityManager->flush();

        }

        //$email = 'mat';
        //$password = 'mati1';
        //$users = new Users();
        //$users->setLogin('login');
        //$users->setEmail($email);
        //$users->setRole('admin');
        //$users->setPassword($password);
        //$entityManager->persist($users);
        //$entityManager->flush();;


        //return new Response('Saved' .$users->getId());

        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);

    }
}
