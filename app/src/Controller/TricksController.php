<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TricksController extends AbstractController
{
    #[Route('/tricks', name: 'tricks_all')]
    public function index(): Response
    {
        return $this->render('tricks/index.html.twig', [
            'controller_name' => 'TricksController',
        ]);
    }
    #[Route('/tricks/1', name: 'tricks_display')]
    public function display(): Response
    {
        return $this->render('tricks/display.html.twig', [
            'controller_name' => 'TricksController',
        ]);
    }
}
