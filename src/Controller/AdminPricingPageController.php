<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPricingPageController extends AbstractController
{
    #[Route('/admin/pricing_page', name: 'admin_pricing_page')]
    public function index(): Response
    {
        if(!isset($_SESSION['Login_ROLE_ADMIN'])){
            return new RedirectResponse($this->generateUrl('login'));
        }
        return $this->render('admin_pages/admin_pricing.html.twig', [

        ]);
    }
}