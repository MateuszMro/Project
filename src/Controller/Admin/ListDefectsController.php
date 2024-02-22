<?php

namespace App\Controller\Admin;

use App\Entity\Defects;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListDefectsController extends AbstractController
{
    #[Route('/list_defects', name: 'app_list_defects')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
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

    #[Route('/list_all_defects', name: 'app_list_all_defects')]
    #[IsGranted('ROLE_ADMIN')]
    public function index1(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }

        //Pobranie wszystkich i wyświetlenie
        $defects = $entityManager->getRepository(Defects::class)->findAll();


        //Pobranie wybranego zgłoszenia po numerze zgłoszenia i wyświetlenie
        $numberStringDefects = $request->query->get('number-defects');
        $numberIntDefects = intval($numberStringDefects);
        $defect = $entityManager->getRepository(Defects::class)->findOneBy(['defectNumber'=>$numberIntDefects]);

        return $this->render('pages/list_all_defects.html.twig', [
            'defects' => $defects,
            'defect' => $defect,
        ]);
    }


    #[Route('/list_all_defects/{id}/close', name: 'app_list_all_defects_close')]
    #[IsGranted('ROLE_ADMIN')]
    public function closeDefects(EntityManagerInterface $entityManager, Defects $defects): Response
    {
        $defects->setStatus('CLOSED');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_defects');
    }
    #[Route('/list_all_defects/{id}/open', name: 'app_list_all_defects_open')]
    #[IsGranted('ROLE_ADMIN')]
    public function openDefects(EntityManagerInterface $entityManager, Defects $defects): Response
    {
        $defects->setStatus('OPEN');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_defects');
    }
}