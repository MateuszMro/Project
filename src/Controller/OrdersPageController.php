<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersPageController extends AbstractController
{
    #[Route('/orders_page', name: 'orders_page')]
    public function index(): Response
    {
        return $this->render('pages/orders.html.twig', [

        ]);
    }
}