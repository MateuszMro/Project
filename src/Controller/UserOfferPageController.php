<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserOfferPageController extends AbstractController
{
    #[Route('/user/offer_page', name: 'user_offer_page')]
    public function index(): Response
    {
        return $this->render('user_pages/user_offer.html.twig', [
            'controller_name' => 'Oferty',
        ]);
    }
}