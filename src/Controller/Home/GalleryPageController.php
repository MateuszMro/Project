<?php

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryPageController extends AbstractController
{
    #[Route('/gallery', name: 'app_gallery')]
    public function index(): Response
    {
        
        return $this->render('pages/gallery.html.twig', [
            
        ]);
    }
}