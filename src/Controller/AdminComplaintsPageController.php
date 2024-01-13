<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminComplaintsPageController extends AbstractController
{
    #[Route('/admin/complaints_page', name: 'admin_complaints_page')]
    public function index(): Response
    {
        return $this->render('admin_pages/admin_complaints.html.twig', [

        ]);
    }
}