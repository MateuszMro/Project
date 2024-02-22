<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use App\Entity\Defects;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListClientsController extends AbstractController
{

    #[Route('/list_all_clients', name: 'app_list_all_clients')]
    #[IsGranted('ROLE_ADMIN')]
    public function index1(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }

        //Pobranie i wyświetlenie wszystkich klientów
        $clients = $entityManager->getRepository(Clients::class)->findAll();


        //Pobranie wybranego klienta po adresie e-mail i wyświetlenie
        $emailClient = $request->query->get('email-client');
        $client = $entityManager->getRepository(Clients::class)->findOneBy(['email'=>$emailClient]);

        return $this->render('pages/list_all_clients.html.twig', [
            'clients' => $clients,
            'client' => $client,
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