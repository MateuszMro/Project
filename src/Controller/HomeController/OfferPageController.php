<?php

namespace App\Controller\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferPageController extends AbstractController
{
    #[Route('/offer', name: 'app_offer')]
    public function index(): Response
    {
        return $this->render('pages/offer.html.twig', [
            'controller_name' => 'Oferty',
        ]);
    }
}