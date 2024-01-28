<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferPageController extends AbstractController
{
    #[Route('/offer_page', name: 'offer_page')]
    public function index(): Response
    {
        session_unset();
        return $this->render('pages/offer.html.twig', [
            'controller_name' => 'Oferty',
        ]);
    }
}