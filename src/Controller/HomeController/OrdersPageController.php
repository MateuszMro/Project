<?php

namespace App\Controller\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersPageController extends AbstractController
{
    #[Route('/orders', name: 'app_orders')]
    public function index(): Response
    {
        return $this->render('pages/orders.html.twig', [

        ]);
    }
}