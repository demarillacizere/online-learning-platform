<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\Courses;
use App\Entity\Enrollments;
use App\Entity\Lessons;
use App\Entity\Progress;
use App\Entity\Users;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UsersCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Jagaad OLP Admin panel');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToCrud('Users', 'fa fa-tags', Users::class),
            MenuItem::linkToCrud('Courses', 'fa fa-file-text', Courses::class),
            MenuItem::linkToCrud('Lessons', 'fa fa-user', Lessons::class),
            MenuItem::linkToCrud('Enrollments', 'fa fa-user', Enrollments::class),
            MenuItem::linkToCrud('Progress', 'fa fa-user', Progress::class),
        ];
    }
}
