<?php

namespace App\Controller\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {

        return $this->render('pages/home.html.twig', [

        ]);
    }
}