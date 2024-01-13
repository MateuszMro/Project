<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserHomeController extends AbstractController
{
    #[Route('/user/', name: 'user_homepage')]
    public function index(): Response
    {
        return $this->render('user_pages/user_home.html.twig', [

        ]);
    }
}