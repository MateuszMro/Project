<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserPricingPageController extends AbstractController
{
    #[Route('/user/pricing_page', name: 'user_pricing_page')]
    public function index(): Response
    {
        if(!isset($_SESSION['Login_ROLE_USER'])){
            return new RedirectResponse($this->generateUrl('login'));
        }
        return $this->render('user_pages/user_pricing.html.twig', [

        ]);
    }
}