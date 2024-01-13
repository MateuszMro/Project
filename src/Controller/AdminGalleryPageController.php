<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminGalleryPageController extends AbstractController
{
    #[Route('/admin/gallery_page', name: 'admin_gallery_page')]
    public function index(): Response
    {
        return $this->render('admin_pages/admin_gallery.html.twig', [

        ]);
    }
}