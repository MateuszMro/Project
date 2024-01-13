<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminContactPageController extends AbstractController
{
    #[Route('/admin/contact_page', name: 'admin_contact_page')]
    public function index(): Response
    {
        return $this->render('admin_pages/admin_contact.html.twig', [

        ]);
    }
}