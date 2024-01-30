<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserContactPageController extends AbstractController
{
    #[Route('/user/contact_page', name: 'user_contact_page')]
    public function index(): Response
    {
        if(!isset($_SESSION['Login_ROLE_USER'])){
            return new RedirectResponse($this->generateUrl('login'));
        }
        $username = $_SESSION['user'];
        $email = $_SESSION['email'];
        $role = $_SESSION['role'];
        return $this->render('user_pages/user_contact.html.twig', [
            'username'=>$username,
            'email'=>$email,
            'role'=>$role,

        ]);
    }
}