<?php

namespace App\Controller\SuperAdmin;

use App\Entity\Clients;
use App\Entity\Defects;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class SuperAdminDashboardController extends AbstractDashboardController
{
    #[Route('/panel_super_admin', name: 'app_panel_super_admin')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function index(): Response
    {

         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(ClientsCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Super_Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Strona główna', 'fa fa-home', '/');
        yield MenuItem::linkToCrud('Użytkownicy', 'fas fa-list', Clients::class);
        yield MenuItem::linkToCrud('Zgłoszenia', 'fas fa-list', Defects::class);

    }
}
