<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserHomePageController extends AbstractController
{
    #[Route('/user-home', name: 'user-home')]
    public function index(): Response
    {
        return $this->render('login-pages/user-home.html.twig', [
            'controller_name' => 'Strona Główna',
        ]);
    }
}
