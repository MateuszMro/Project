<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AdminPanel extends AbstractController
{
    #[Route('/panel_admin', name: 'app_panel_admin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {


        return $this->render('admin-panel/panel-admin.html.twig', [

        ]);
    }
}