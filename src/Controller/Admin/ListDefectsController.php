<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use App\Entity\Defects;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListDefectsController extends AbstractController
{
    #[Route('/list-defects', name: 'app_list_defects')]
    #[IsGranted('ROLE_USER')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('app_login');
        }

        $userEmail = $user->getEmail();

        $defects = $entityManager->getRepository(Defects::class)->findBy(['email'=>$userEmail]);

        return $this->render('pages/list-defects.html.twig', [
            'defects' => $defects,
        ]);
    }
    #[Route('/list-defects/{id}', name: 'app_list_defects_show')]
    #[IsGranted('ROLE_USER')]
    public function listDefectsShow(int $id, EntityManagerInterface $entityManager, Defects $defect): Response
    {

        $defect = $entityManager->getRepository(Defects::class)->find($id);
        $currentUser = $this->getUser();
        $currentUserEmail = $currentUser->getEmail();

        if ($defect->getEmail() !== $currentUserEmail){
            return $this->redirectToRoute('app_list_defects');

        }

        return $this->render('pages/list-defects-show.html.twig', [
            'defect' => $defect,
        ]);
    }
    #[Route('/list-defect/{id}/cancel', name: 'app_list_defects_cancel')]
    #[IsGranted('ROLE_USER')]
    public function cancelMyOrder(int $id, EntityManagerInterface $entityManager, Defects $defects): Response
    {

        $defects = $entityManager->getRepository(Defects::class)->find($id);

        $defects->setStatus('ANULOWANO PRZEZ KLIENTA');

        $entityManager->flush();


        return $this->redirectToRoute('app_list_defects_show',[
            'id'=>$defects->getId(),
        ]);
    }
    #[Route('/list-defect{id}/add-comment', name: 'app_list_defect_comment', methods: 'POST')]
    #[IsGranted('ROLE_USER')]
    public function addUserComment(int $id, EntityManagerInterface $entityManager, Defects $defects, Request $request): Response
    {

        $defects = $entityManager->getRepository(Defects::class)->find($id);
        $addComment = $request->request->get('adnotation');

        $defects->setUserComment($addComment);

        $entityManager->flush();

        return $this->redirectToRoute('app_list_defects_show',[
            'id'=>$defects->getId(),
        ]);
    }

    #[Route('/admin/list-all-defects', name: 'app_list_all_defects')]
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

        return $this->render('admin-panel/list-all-defects.html.twig', [
            'defects' => $defects,
            'defect' => $defect,
        ]);
    }


    #[Route('/admin/list-all-defects/{id}/close', name: 'app_list_all_defects_close')]
    #[IsGranted('ROLE_ADMIN')]
    public function closeDefects(EntityManagerInterface $entityManager, Defects $defects): Response
    {
        $defects->setStatus('ZAMKNIĘTE');

        $entityManager->flush();

        return $this->redirectToRoute('app_defects_show',[
            'id' => $defects->getId(),
        ]);
    }
    #[Route('/admin/list-all-defects/{id}/open', name: 'app_list_all_defects_open')]
    #[IsGranted('ROLE_ADMIN')]
    public function openDefects(EntityManagerInterface $entityManager, Defects $defects): Response
    {
        $defects->setStatus('OTWARTE');

        $entityManager->flush();

        return $this->redirectToRoute('app_defects_show',[
            'id' => $defects->getId(),
        ]);
    }
    #[Route('/admin/list-all-defects/{id}/in-progress', name: 'app_list_all_defects_in_process')]
    #[IsGranted('ROLE_ADMIN')]
    public function inProgressDefects(EntityManagerInterface $entityManager, Defects $defects): Response
    {
        $defects->setStatus('W TRAKCIE');

        $entityManager->flush();

        return $this->redirectToRoute('app_defects_show',[
            'id' => $defects->getId(),
        ]);
    }
    #[Route('/admin/list-all-defects/{id}/delete', name: 'app_list_all_defects_delete', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function deleteDefects(int $id, EntityManagerInterface $entityManager, Defects $defect): Response
    {

        $defect = $entityManager->getRepository(Defects::class)->find($id);
        $entityManager->remove($defect);
        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_defects');
    }

    #[Route('/admin/defects/{id}', name: 'app_defects_show')]
    #[IsGranted('ROLE_ADMIN')]
    public function defectsShow(int $id, EntityManagerInterface $entityManager, Defects $defect): Response
    {

        $defect = $entityManager->getRepository(Defects::class)->find($id);

        return $this->render('admin-panel/defects-show.html.twig', [
            'defect' => $defect,
        ]);
    }
    #[Route('/admin/defects/{id}/add-comment', name: 'app_list_all_defects_comment', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function addComment(int $id, EntityManagerInterface $entityManager, Defects $defects, Request $request): Response
    {

        $defects = $entityManager->getRepository(Defects::class)->find($id);
        $addComment = $request->request->get('adnotation');

        $defects->setAdminComment($addComment);

        $entityManager->flush();

        return $this->redirectToRoute('app_defects_show',[
            'id'=>$defects->getId(),
        ]);
    }

}