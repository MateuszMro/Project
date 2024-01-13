<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminOrdersPageController extends AbstractController
{
    #[Route('/admin/orders_page', name: 'admin_orders_page')]
    public function index(): Response
    {
        return $this->render('admin_pages/admin_orders.html.twig', [

        ]);
    }
}