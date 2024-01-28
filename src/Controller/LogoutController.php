<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

session_unset();
class LogoutController extends AbstractController
{
    #[Route('/logout', name: 'logout_page')]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'Oferty',
        ]);
    }
}