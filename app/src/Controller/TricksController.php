<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Trick;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CommentType;
use App\Form\TricksType;
use App\Form\TricksUpdateType;
use App\Repository\CommentRepository;
use App\Repository\ImageRepository;
use App\Repository\TrickRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class TricksController extends AbstractController
{
    #[Route('/tricks', name: 'tricks_all')]
    public function index(TrickRepository $tricks, ImageRepository $image): Response
    {
        return $this->render('tricks/index.html.twig', [
            'tricks' => $tricks->findAll(),
        ]);
    }
    #[Route('/tricks/{slug}', name: 'tricks_display')]
    public function display(Trick $trick, CommentRepository $commentRepository, Request $request): Response
    {
      //  dd($trick->getComments());

        //On va chercher le numéro de page dans l'url
        $page = $request->query->getInt('page', 1);

        //On va chercher la liste des produits de la catégorie
        $comments = $commentRepository->findCommentPaginated($page, $trick->getSlug(), 4);
       
        return $this->render('tricks/display.html.twig', [
            'tricks' => $trick,
            'comments' => $comments
        ]);
    }
    #[Route('/trick/add', name: 'tricks_add')]
    public function add(): Response
    {
        return $this->render('tricks/add.html.twig', [
            'controller_name' => 'TricksController',
        ]);
    }
}
