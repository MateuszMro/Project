<?php

namespace App\Controller\Register;

use App\Entity\Clients;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ConfirmController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManagers){
        $this->entityManager=$entityManagers;
    }
    #[Route('/confirm/{code}', name: 'confirm_register')]
    public function index($code): Response
    {
        $userRepository = $this->entityManager->getRepository(Clients::class);
        $user = $userRepository->findOneBy(['confirmCode'=>$code]);

        if($user){
            $user->setConfirmAccount('Aktywne');
            $user->setConfirmCode(null);

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $this->render('info-pages/confirm_success.html.twig',[

            ]);
        }


        return $this->render('info-pages/confirm_error.html.twig', [

        ]);
    }
}
