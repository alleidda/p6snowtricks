<?php

namespace App\Controller;

use App\Repository\ImageRepository;
use App\Repository\TrickRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    
    public function index(TrickRepository $trickRepository, ImageRepository $image, PaginatorInterface $paginator, Request $request): Response
    {

        $user = $this->getUser();

        if ($user && $user->getIsVerified()) {

            $userTricks = $user->getTricksUser();

             $pagination = $paginator->paginate(
               $userTricks,
                $request->query->get('page', 1),
                2
                );
            
        return $this->render('home/index.html.twig', [
            'titre' => 'Liste de vos tricks',
            'pagination' => $pagination,
            'image' => $image,
        ]); }
        else {
            $pagination = $paginator->paginate(
                $trickRepository->paginationQuery(),
                $request->query->get('page', 1),
                4
                );
            return $this->render('home/index.html.twig', [
                'titre' => 'Liste des tricks',
                'pagination' => $pagination,
                'image' => $image,
            ]);
         }
    
    }
    
}
