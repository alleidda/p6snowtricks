<?php

namespace App\Controller;

use App\Repository\ImageRepository;
use App\Repository\TrickRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    
    public function index(TrickRepository $tricks, ImageRepository $image): Response
    {
        return $this->render('home/index.html.twig', [
            'tricks' => $tricks->findAll(),
            'image' => $image,
        ]);
    }
}
