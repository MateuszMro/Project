<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class GalleryPageController extends AbstractController
{
    #[Route('/gallery_page', name: 'gallery_page')]
    public function index(): Response
    {
        
        return $this->render('pages/gallery.html.twig', [
            
        ]);
    }
}