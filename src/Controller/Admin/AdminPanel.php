<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AdminPanel extends AbstractController
{
    #[Route('/admin-panel', name: 'app_admin_panel')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {


        return $this->render('admin-panel/admin-panel.html.twig', [

        ]);
    }
}