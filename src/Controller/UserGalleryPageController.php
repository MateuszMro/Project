<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserGalleryPageController extends AbstractController
{
    #[Route('/user/gallery_page', name: 'user_gallery_page')]
    public function index(): Response
    {
        if(!isset($_SESSION['Login_ROLE_USER'])){
            return new RedirectResponse($this->generateUrl('login'));
        }
        $username = $_SESSION['user'];
        $email = $_SESSION['email'];
        $role = $_SESSION['role'];
        return $this->render('user_pages/user_gallery.html.twig', [
            'username'=>$username,
            'email'=>$email,
            'role'=>$role,
        ]);
    }
}