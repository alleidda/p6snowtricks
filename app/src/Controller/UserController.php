<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
   /*  #[Route('/user/{id}', name: 'user_profile')]

    public function index(Users $users): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();
        $comments = $user->getComments();
        $tricks = $user->getTricksUser();
        return $this->render('user/index.html.twig', [
            'user' => $users,
            'tricks' => $tricks,
        ]);
    } */

    #[Route('/mon_compte', name: 'app_profile')]

    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();
        if ($user->getIsVerified()) {
            return $this->render(
                'user/index.html.twig', [
                'user' => $user
                ]
            );
        }
        $this->addFlash('danger', 'Votre compte n\'est pas encore activé');
        return $this->redirectToRoute('home');
    }

}


