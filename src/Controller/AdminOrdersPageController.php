<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminOrdersPageController extends AbstractController
{
    #[Route('/admin/orders_page', name: 'admin_orders_page')]
    public function index(): Response
    {
        if(!isset($_SESSION['Login_ROLE_ADMIN'])){
            return new RedirectResponse($this->generateUrl('login'));
        }
        $username = $_SESSION['user'];
        $email = $_SESSION['email'];
        $role = $_SESSION['role'];
        return $this->render('admin_pages/admin_orders.html.twig', [
            'username'=>$username,
            'email'=>$email,
            'role'=>$role,
        ]);
    }
}