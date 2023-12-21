<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComplaintsPageController extends AbstractController
{
    #[Route('/complaints_page', name: 'complaints_page')]
    public function index(): Response
    {
        return $this->render('pages/complaints.html.twig', [

        ]);
    }
}