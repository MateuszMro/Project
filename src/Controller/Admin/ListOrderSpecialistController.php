<?php

namespace App\Controller\Admin;

use App\Entity\OrderSpecialist;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListOrderSpecialistController extends AbstractController
{

    #[Route('/order-specialist/my-order', name: 'app_list_my_order_specialist')]
    #[IsGranted('ROLE_USER')]
    public function index1(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $userEmail= $user->getEmail();

        $order = $entityManager->getRepository(OrderSpecialist::class)->findBy(['email'=>$userEmail]);

        return $this->render('pages/list-my-order-specialist.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/order-specialist/my-order/{id}', name: 'app_list_my_order_specialist_show')]
    #[IsGranted('ROLE_USER')]
    public function listOrderSpecialistShow(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderProduct): Response
    {

        $order = $entityManager->getRepository(OrderSpecialist::class)->find($id);
        $currentUser = $this->getUser();
        $currentUserEmail = $currentUser->getEmail();

        if ($order->getEmail() !== $currentUserEmail){
            return $this->redirectToRoute('homepage');
        }

        return $this->render('pages/my-order-specialist-show.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/order-specialist/my-order/{id}/cancel', name: 'app_list_my_order_specialist_cancel')]
    #[IsGranted('ROLE_USER')]
    public function cancelMyOrder(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderProduct): Response
    {

        $order = $entityManager->getRepository(OrderSpecialist::class)->find($id);

        $order->setStatus('ANULOWANO PRZEZ KLIENTA');

        $entityManager->flush();


        return $this->render('pages/my-order-specialist-show.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/admin/list-all-order-specialist', name: 'app_list_all_order_specialist')]
    #[IsGranted('ROLE_ADMIN')]
    public function listAllOrder(EntityManagerInterface $entityManager, Request $request): Response
    {

        $orders = $entityManager->getRepository(OrderSpecialist::class)->findAll();


        $numberStringOrder = $request->query->get('order-specialist-number');
        $numberIntOrder = intval($numberStringOrder);
        $order = $entityManager->getRepository(OrderSpecialist::class)->findOneBy(['visitNumber'=>$numberIntOrder]);

        return $this->render('admin-panel/list-all-order-specialist.html.twig', [
            'orders' => $orders,
            'order' => $order,
        ]);
    }
    #[Route('/admin/order-specialist/{id}', name: 'app_order_specialist_show')]
    #[IsGranted('ROLE_ADMIN')]
    public function orderShow(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderProduct): Response
    {

        $order = $entityManager->getRepository(OrderSpecialist::class)->find($id);

        return $this->render('admin-panel/order-specialist-show.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/admin/order-specialist/{id}/date-set', name: 'app_list_all_order_specialist_date_set')]
    #[IsGranted('ROLE_ADMIN')]
    public function dateSetOrder(EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist): Response
    {
        $orderSpecialist->setStatus('TERMIN WIZYTY USTALONY');

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/done', name: 'app_list_all_order_specialist_done')]
    #[IsGranted('ROLE_ADMIN')]
    public function doneOrder(EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist): Response
    {
        $orderSpecialist->setStatus('WIZYTA ZREALIZOWANA');

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/cancel', name: 'app_list_all_order_specialist_cancel')]
    #[IsGranted('ROLE_ADMIN')]
    public function cancelOrder(EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist): Response
    {
        $orderSpecialist->setStatus('ANULOWANO PRZEZ KLIENTA');

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/setting_date', name: 'app_list_all_order_specialist_setting_date')]
    #[IsGranted('ROLE_ADMIN')]
    public function settingDateOrder(EntityManagerInterface $entityManager, OrderSpecialist $orderProduct): Response
    {
        $orderProduct->setStatus('USTALANIE TERMINU');

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderProduct->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/price_YES', name: 'app_list_all_order_specialist_price_YES')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function priceOrderYES(EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist): Response
    {
        $orderSpecialist->setPaymentStatus('ZAPŁACONO');

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/price_NO', name: 'app_list_all_order_specialist_price_NO')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function priceOrderNO(EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist): Response
    {
        $orderSpecialist->setPaymentStatus('DO ZAPŁATY');

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/delete', name: 'app_list_all_order_specialist_delete', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function deleteVisit(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist): Response
    {

        $orderSpecialist = $entityManager->getRepository(OrderSpecialist::class)->find($id);
        $entityManager->remove($orderSpecialist);
        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order_specialist');
    }
    #[Route('/admin/order-specialist/{id}/update-price', name: 'app_list_all_order_specialist_update_price', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function updatePrice(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist, Request $request): Response
    {

        $orderSpecialist = $entityManager->getRepository(OrderSpecialist::class)->find($id);
        $newPrice = $request->request->get('newPrice');

        $orderSpecialist->setPrice($newPrice);

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/add-comment', name: 'app_list_all_order_specialist_comment', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function addComment(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist, Request $request): Response
    {

        $orderSpecialist = $entityManager->getRepository(OrderSpecialist::class)->find($id);
        $addComment = $request->request->get('adnotation');

        $orderSpecialist->setAdminComment($addComment);

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
    #[Route('/admin/order-specialist/{id}/add-date-visit', name: 'app_list_all_order_specialist_add_date_visit', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function addVisitDate(int $id, EntityManagerInterface $entityManager, OrderSpecialist $orderSpecialist, Request $request): Response
    {

        $orderSpecialist = $entityManager->getRepository(OrderSpecialist::class)->find($id);
        $addDateVisit = $request->request->get('date-visit');

        $orderSpecialist->setVisitDate($addDateVisit);

        $entityManager->flush();

        return $this->redirectToRoute('app_order_specialist_show',[
            'id'=>$orderSpecialist->getId(),
        ]);
    }
}