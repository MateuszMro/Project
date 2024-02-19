<?php

namespace App\Controller\HomeController;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class ProfileInfoController extends AbstractController
{

    #[Route('/profile', name: 'app_profile_info')]
    public function index(Request $request, TokenInterface $token, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }


        return $this->render('pages/profile_info.html.twig', [

        ]);
    }
}