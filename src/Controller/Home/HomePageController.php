<?php

namespace App\Controller\Home;

use App\Form\QuestionForm;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {


        return $this->render('pages/home.html.twig', [

        ]);
    }
}
