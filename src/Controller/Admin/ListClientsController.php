<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use App\Entity\Defects;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListClientsController extends AbstractController
{

    #[Route('/list_all_clients', name: 'app_list_all_clients')]
    #[IsGranted('ROLE_ADMIN')]
    public function index1(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }

        $clients = $entityManager->getRepository(Clients::class)->findAll();

        return $this->render('pages/list_all_clients.html.twig', [
            'clients' => $clients,
        ]);
    }

    #[Route('/list_all_clients/{id}/ban', name: 'app_list_all_clients_ban')]
    #[IsGranted('ROLE_ADMIN')]
    public function banAccount(EntityManagerInterface $entityManager, Clients $clients): Response
    {
        $clients->setConfirmAccount('Zablokowane');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_clients');
    }
    #[Route('/list_all_defects/{id}/active', name: 'app_list_all_clients_active')]
    #[IsGranted('ROLE_ADMIN')]
    public function activeAccount(EntityManagerInterface $entityManager, Clients $clients): Response
    {
        $clients->setConfirmAccount('Aktywne');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_clients');
    }
}