<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomePageController extends AbstractController
{
    #[Route('/admin', name: 'admin-home')]
    public function index(): Response
    {
        return $this->render('login-pages/admin-home.html.twig', [
            'controller_name' => 'Strona Główna',
        ]);
    }
}
