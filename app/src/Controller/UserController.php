<?php

namespace App\Controller;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/{id}', name: 'user_profile')]
    public function index(Users $users): Response
    {
        $user = $this->getUser();
        $comments = $user->getComments();
        $tricks = $user->getTricksUser();
        return $this->render('user/index.html.twig', [
            'user' => $users,
            'tricks' => $tricks,
        ]);
    }
}
