<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{
    #[Route('/admin/', name: 'admin_homepage')]
    public function index(): Response
    {

        if(!isset($_SESSION['Login_ROLE_ADMIN'])){
            return new RedirectResponse($this->generateUrl('login'));
        }
        $username = $_SESSION['user'];

        return $this->render('admin_pages/admin_home.html.twig', [
            'username'=>$username,
        ]);
    }
}