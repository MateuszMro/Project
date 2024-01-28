<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryPageController extends AbstractController
{
    #[Route('/gallery_page', name: 'gallery_page')]
    public function index(): Response
    {
        session_unset();
        return $this->render('pages/gallery.html.twig', [
            'controller_name' => 'Strona Główna',
        ]);
    }
}