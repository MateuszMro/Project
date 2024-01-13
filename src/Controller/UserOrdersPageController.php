<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserOrdersPageController extends AbstractController
{
    #[Route('/user/orders_page', name: 'user_orders_page')]
    public function index(): Response
    {
        return $this->render('user_pages/user_orders.html.twig', [

        ]);
    }
}