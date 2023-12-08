<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Courses;
use App\Entity\Lessons;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class InstructorController extends AbstractController
{
    #[Route('/instructor', name: 'app_instructor')]
    #[IsGranted('ROLE_INSTRUCTOR')]
    public function index(): Response
    {
        /** @var Users $user */
        $user = $this->getUser();
        $courses = $user->getCourses();
        return $this->render('instructor/index.html.twig', [
            'user' => $user,
            'courses' => $courses,
        ]);
    }
}