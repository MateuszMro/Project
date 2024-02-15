<?php

namespace App\Controller\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingPageController extends AbstractController
{
    #[Route('/pricing', name: 'app_pricing')]
    public function index(): Response
    {
        return $this->render('pages/pricing.html.twig', [

        ]);
    }
}