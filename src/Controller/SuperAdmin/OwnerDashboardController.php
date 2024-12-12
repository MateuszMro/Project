<?php

namespace App\Controller\SuperAdmin;

use App\Entity\Clients;
use App\Entity\Defects;
use App\Entity\OrderProduct;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class OwnerDashboardController extends AbstractDashboardController
{
    #[Route('/owner', name: 'app_owner')]
    #[IsGranted('ROLE_OWNER')]
    public function index(): Response
    {

         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(ClientsCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Owner');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Strona główna', 'fa fa-home', '/');
        yield MenuItem::linkToCrud('Użytkownicy', 'fas fa-list', Clients::class);
        yield MenuItem::linkToCrud('Zgłoszenia', 'fas fa-list', Defects::class);
        yield MenuItem::linkToCrud('Zamówienia', 'fas fa-list', OrderProduct::class);

    }
}
