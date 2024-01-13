<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserGalleryPageController extends AbstractController
{
    #[Route('/user/gallery_page', name: 'user_gallery_page')]
    public function index(): Response
    {
        return $this->render('user_pages/user_gallery.html.twig', [

        ]);
    }
}