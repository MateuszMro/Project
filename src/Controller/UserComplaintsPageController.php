<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserComplaintsPageController extends AbstractController
{
    #[Route('/user/complaints_page', name: 'user_complaints_page')]
    public function index(): Response
    {
        return $this->render('user_pages/user_complaints.html.twig', [

        ]);
    }
}