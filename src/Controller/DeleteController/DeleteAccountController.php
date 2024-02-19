<?php

namespace App\Controller\DeleteController;

use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DeleteAccountController extends AbstractController
{
    private $entityManager;
    private $tokenStorage;

    public function __construct(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage)
    {
        $this->entityManager = $entityManager;
        $this->tokenStorage = $tokenStorage;
    }
    #[Route(name: 'app_delete_account', methods: 'POST')]
    public function index(): Response
    {
        // Pobierz aktualnego użytkownika
        $user = $this->getUser();

        if ($user) {
            // Pobierz identyfikator użytkownika
            $userId = $user->getId();

            // Usuń użytkownika z bazy danych
            $this->entityManager->remove($user);
            $this->entityManager->flush();

            // Wyloguj aktualnego użytkownika
            $token = $this->tokenStorage->getToken();
            if ($token !== null) {
                $this->tokenStorage->setToken(null);
            }
        }

        return $this->redirectToRoute('homepage');
    }
}