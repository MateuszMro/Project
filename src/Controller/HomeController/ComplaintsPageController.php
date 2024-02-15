<?php

namespace App\Controller\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComplaintsPageController extends AbstractController
{
    #[Route('/complaints', name: 'app_complaints')]
    public function index(): Response
    {
        return $this->render('pages/complaints.html.twig', [

        ]);
    }
}