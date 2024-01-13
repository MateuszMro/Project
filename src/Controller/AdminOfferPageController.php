<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminOfferPageController extends AbstractController
{
    #[Route('/admin/offer_page', name: 'admin_offer_page')]
    public function index(): Response
    {
        return $this->render('admin_pages/admin_offer.html.twig', [
            'controller_name' => 'Oferty',
        ]);
    }
}