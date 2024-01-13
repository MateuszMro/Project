<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserContactPageController extends AbstractController
{
    #[Route('/user/contact_page', name: 'user_contact_page')]
    public function index(): Response
    {
        return $this->render('user_pages/user_contact.html.twig', [

        ]);
    }
}