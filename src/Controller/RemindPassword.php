<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RemindPassword extends AbstractController
{
    #[Route('/remind_password', name: 'remind_password')]
    public function index(): Response
    {
        return $this->render('login/remind_password.html.twig', [

        ]);
    }
}