<?php

namespace App\Controller\Admin;

use App\Entity\OrderProduct;
use App\Entity\Clients;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ListOrderController extends AbstractController
{

    #[Route('/order/my-order', name: 'app_list_my_order')]
    #[IsGranted('ROLE_USER')]
    public function index1(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $userEmail= $user->getEmail();

        $order = $entityManager->getRepository(OrderProduct::class)->findBy(['email'=>$userEmail]);

        return $this->render('pages/list-my-order.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/order/my-order/{id}', name: 'app_list_my_order_show')]
    #[IsGranted('ROLE_USER')]
    public function listOrderShow(int $id, EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {

        $order = $entityManager->getRepository(OrderProduct::class)->find($id);
        $currentUser = $this->getUser();
        $currentUserEmail = $currentUser->getEmail();

        if ($order->getEmail() !== $currentUserEmail){
            return $this->redirectToRoute('homepage');

        }

        return $this->render('pages/my-order-show.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/order/my-order/{id}/cancel', name: 'app_list_my_order_cancel')]
    #[IsGranted('ROLE_USER')]
    public function cancelOrder(int $id, EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {

        $order = $entityManager->getRepository(OrderProduct::class)->find($id);

        $order->setStatus('ANULOWANO PRZEZ KLIENTA');

        $entityManager->flush();


        return $this->render('pages/my-order-show.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/admin/list-all-order', name: 'app_list_all_order')]
    #[IsGranted('ROLE_ADMIN')]
    public function listAllOrder(EntityManagerInterface $entityManager, Request $request): Response
    {

        $orders = $entityManager->getRepository(OrderProduct::class)->findAll();

        //Wyszukanie jednego zamówienia po numerze

        $numberStringOrder = $request->query->get('order-number');
        $numberIntOrder = intval($numberStringOrder);
        $order = $entityManager->getRepository(OrderProduct::class)->findOneBy(['orderNumber'=>$numberIntOrder]);

        return $this->render('admin-panel/list-all-order.html.twig', [
            'orders' => $orders,
            'order' => $order,
        ]);
    }
    #[Route('/admin/order/{id}', name: 'app_order_show')]
    #[IsGranted('ROLE_ADMIN')]
    public function orderShow(int $id, EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {

        $order = $entityManager->getRepository(OrderProduct::class)->find($id);

        return $this->render('admin-panel/order-show.html.twig', [
            'order' => $order,
        ]);
    }
    #[Route('/admin/order/{id}/in-process', name: 'app_list_all_order_in_process')]
    #[IsGranted('ROLE_ADMIN')]
    public function inProgressOrder(EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {
        $orderProduct->setStatus('W TRAKCIE REALIZACJI');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/in-road', name: 'app_list_all_order_in_road')]
    #[IsGranted('ROLE_ADMIN')]
    public function inRoadOrder(EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {
        $orderProduct->setStatus('ZAMÓWIENIE W DRODZE');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/delivered', name: 'app_list_all_order_delivered')]
    #[IsGranted('ROLE_ADMIN')]
    public function deliveredOrder(EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {
        $orderProduct->setStatus('ZAMÓWIENIE DOSTARCZONE');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/waiting', name: 'app_list_all_order_waiting')]
    #[IsGranted('ROLE_ADMIN')]
    public function inWaitingOrder(EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {
        $orderProduct->setStatus('OCZEKUJE NA REALIZACJĘ');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/price_YES', name: 'app_list_all_order_price_YES')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function priceOrderYES(EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {
        $orderProduct->setPaymentStatus('ZAPŁACONO');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/price_NO', name: 'app_list_all_order_price_NO')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function priceOrderNO(EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {
        $orderProduct->setPaymentStatus('DO ZAPŁATY');

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/delete', name: 'app_list_all_order_delete', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function deleteDefects(int $id, EntityManagerInterface $entityManager, OrderProduct $orderProduct): Response
    {

        $orderProduct = $entityManager->getRepository(OrderProduct::class)->find($id);
        $entityManager->remove($orderProduct);
        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
    #[Route('/admin/order/{id}/update-price', name: 'app_list_all_order_update_price', methods: 'POST')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function updatePrice(int $id, EntityManagerInterface $entityManager, OrderProduct $orderProduct, Request $request): Response
    {

        $orderProduct = $entityManager->getRepository(OrderProduct::class)->find($id);
        $newPrice = $request->request->get('newPrice');

        $orderProduct->setPrice($newPrice);

        $entityManager->flush();

        return $this->redirectToRoute('app_list_all_order');
    }
}