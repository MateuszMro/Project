<?php

namespace App\Controller\Admin;

use App\Entity\ReturnProduct;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListReturnController extends AbstractController
{

    #[Route('/return-product/my-return', name: 'app_list_my_return_product')]
    #[IsGranted('ROLE_USER')]
    public function index1(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $userEmail = $user->getEmail();

        $return = $entityManager->getRepository(ReturnProduct::class)->findBy(['email' => $userEmail]);

        return $this->render('pages/list-my-return-product.html.twig', [
            'return' => $return,
        ]);
    }
    #[Route('/return-product/my-return/{id}', name: 'app_list_my_return_product_show')]
    #[IsGranted('ROLE_USER')]
    public function listReturnShow(int $id, EntityManagerInterface $entityManager, ReturnProduct $returnProduct): Response
    {

        $returnProduct = $entityManager->getRepository(ReturnProduct::class)->find($id);
        $currentUser = $this->getUser();
        $currentUserEmail = $currentUser->getEmail();

        if ($returnProduct->getEmail() !== $currentUserEmail){
            return $this->redirectToRoute('homepage');

        }

        return $this->render('pages/my-return-product-show.html.twig', [
            'returnProduct' => $returnProduct,
        ]);
    }
    #[Route('/admin/list-all-return-product', name: 'app_list_all_return_product')]
    #[IsGranted('ROLE_ADMIN')]
    public function listAllReturn(EntityManagerInterface $entityManager, Request $request): Response
    {

        $returnProducts = $entityManager->getRepository(ReturnProduct::class)->findAll();

        //Wyszukanie jednego zamówienia po numerze

        $numberStringReturn = $request->query->get('return-number');
        $numberIntReturn = intval($numberStringReturn);
        $returnProduct = $entityManager->getRepository(ReturnProduct::class)->findOneBy(['numberReturn'=>$numberIntReturn]);

        return $this->render('admin-panel/list-all-return-product.html.twig', [
            'returnProducts' => $returnProducts,
            'returnProduct' => $returnProduct,
        ]);
    }
    #[Route('/admin/return-product/{id}', name: 'app_return_product_show')]
    #[IsGranted('ROLE_ADMIN')]
    public function returnShow(int $id, EntityManagerInterface $entityManager, ReturnProduct $returnProduct): Response
    {

        $returnProduct = $entityManager->getRepository(ReturnProduct::class)->find($id);

        return $this->render('admin-panel/return-product-show.html.twig', [
            'returnProduct' => $returnProduct,
        ]);
    }
    #[Route('/admin/return-product/{id}/yes', name: 'app_list_all_return_product_yes')]
    #[IsGranted('ROLE_ADMIN')]
    public function returnYes(EntityManagerInterface $entityManager, ReturnProduct $returnProduct): Response
    {
        $returnProduct->setReturnStatus('ZWROT ZAAKCEPTOWANY, WYPŁACONO ŚRODKI PIENIĘŻNE');

        $entityManager->flush();

        return $this->redirectToRoute('app_return_product_show',[
            'id'=>$returnProduct->getId(),
        ]);
    }
    #[Route('/admin/return-product/{id}/no', name: 'app_list_all_return_product_no')]
    #[IsGranted('ROLE_ADMIN')]
    public function returnNo(EntityManagerInterface $entityManager, ReturnProduct $returnProduct): Response
    {
        $returnProduct->setReturnStatus('NIE ZAAKCEPTOWANO ZWROTU');

        $entityManager->flush();

        return $this->redirectToRoute('app_return_product_show',[
            'id'=>$returnProduct->getId(),
        ]);
    }
    #[Route('/admin/return-product/{id}/verify', name: 'app_list_all_return_product_verify')]
    #[IsGranted('ROLE_ADMIN')]
    public function returnVerify(EntityManagerInterface $entityManager, ReturnProduct $returnProduct): Response
    {
        $returnProduct->setReturnStatus('PRZYJĘTO DO WERYFIKACJI');

        $entityManager->flush();

        return $this->redirectToRoute('app_return_product_show',[
            'id'=>$returnProduct->getId(),
        ]);
    }
    #[Route('/admin/return-product/{id}/delete', name: 'app_list_all_return_product_delete', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function deleteDefects(int $id, EntityManagerInterface $entityManager, ReturnProduct $returnProduct): Response
    {

        $returnProduct = $entityManager->getRepository(ReturnProduct::class)->find($id);
        $entityManager->remove($returnProduct);
        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_return_product');
    }
    #[Route('/admin/return-product/{id}/add-comment', name: 'app_list_all_return_product_comment', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function updatePrice(int $id, EntityManagerInterface $entityManager, ReturnProduct $returnProduct, Request $request): Response
    {

        $returnProduct = $entityManager->getRepository(ReturnProduct::class)->find($id);
        $addComment = $request->request->get('addComment');

        $returnProduct->setAdminComment($addComment);

        $entityManager->flush();

        return $this->redirectToRoute('app_return_product_show',[
            'id'=>$returnProduct->getId(),
        ]);
    }
}