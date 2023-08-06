<?php

namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{
  
 #[Route('/comment/delete/{id}', name: "comment_delete")]
 
    public function delete(Comment $comment, EntityManagerInterface $manager): Response
    {
        $manager->remove($comment);
        $manager->flush();

        $this->addFlash("success", "Le commentaire a bien été supprimé");

        return $this->redirectToRoute("user_profile", ['id' => $this->getUser()->getId()]);
    }
}
