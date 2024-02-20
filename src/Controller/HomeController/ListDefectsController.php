<?php

namespace App\Controller\HomeController;

use App\Entity\Defects;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListDefectsController extends AbstractController
{
    #[Route('/list_defects', name: 'app_list_defects')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }


        $userEmail = $user->getEmail();

        $defects = $entityManager->getRepository(Defects::class)->findBy(['email'=>$userEmail]);



        return $this->render('pages/list_defects.html.twig', [
            'defects' => $defects,
        ]);
    }
}