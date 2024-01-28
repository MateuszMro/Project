<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserHomeController extends AbstractController
{
    #[Route('/user/', name: 'user_homepage')]
    public function index(): Response
    {

        if(!isset($_SESSION['Login_ROLE_USER'])){
            return new RedirectResponse($this->generateUrl('login'));
        }

        $username = $_SESSION['user'];

        return $this->render('user_pages/user_home.html.twig', [
            'username'=>$username,
        ]);
    }
}