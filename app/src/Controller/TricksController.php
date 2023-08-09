<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Trick;
use App\Entity\Users;
use App\Entity\Video;
use App\Entity\Comment;
use App\Form\TricksType;
use App\Form\CommentType;
use App\Form\AddTrickFormType;
use App\Form\CommentsFormType;
use App\Form\TricksUpdateType;
use App\Service\PictureService;
use App\Service\VideoLinkService;
use App\Repository\ImageRepository;
use App\Repository\TrickRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TricksController extends AbstractController
{
    #[Route('/tricks', name: 'tricks_all')]
    public function index(TrickRepository $tricks, ImageRepository $image): Response
    {
        return $this->render('tricks/index.html.twig', [
            'tricks' => $tricks->findAll()
        ]);
    }


    #[Route('/tricks/{slug}', name: 'tricks_display')]
    public function display(Trick $trick, CommentRepository $commentsRepository, EntityManagerInterface $entityManager, ImageRepository $image, Request $request): Response
    {
        $user = $this->getUser();
        $comment = new Comment();
        $form = $this->createForm(CommentsFormType::class, $comment);
        $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
                $comment = $form->getData();
                $comment->setUser($user);
                $comment->setTrick($trick);
                $entityManager->persist($comment);
                $entityManager->flush();
         }
        //  dd($trick->getComments());

        //On va chercher le numéro de page dans l'url
        $page = $request->query->getInt('page', 1);
        $comments = $commentsRepository->findCommentPaginated($page, $trick->getSlug(), 10);

        //On va chercher la liste des produits de la catégorie
        $comments = $commentsRepository->findCommentPaginated($page, $trick->getSlug(), 4);

      

        return $this->render('tricks/display.html.twig', [
            'tricks' => $trick,
            'comments' => $trick->getComments(),
            'images' => $trick->getImage(),
            'user' => $trick->getUsers(),
            'form' => $form->createView()
            
        ]);
    }


    #[Route('/trick/add', name: 'tricks_add')]
    public function addTrick(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger,
        PictureService $pictureService,
        VideoLinkService $videoLinkService
    ): Response {


        $trick = new Trick();
        // $this->denyAccessUnlessGranted('TRICK_ADD', $trick);
        $form = $this->createForm(AddTrickFormType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();

            $slug = $slugger->slug($trick->getName());
            $trick->setName($trick->getName());
            $trick->setSlug($slug);
            $trick->setUsers($user);

            $entityManager->persist($trick);
            
            $this->handleData($form, $pictureService, $trick, $entityManager, $videoLinkService);

            $entityManager->flush();


            $this->addFlash('success', 'Figure ajoutée avec succès');

            return $this->redirectToRoute('home');
        }

        return $this->render(
            'tricks/add.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }


    #[Route('tricks/slug/update', name: 'tricks_update')]

    public function updateTrick(TrickRepository $tricks, ImageRepository $image): Response
    {
        return $this->render('home/index.html.twig', [
            'tricks' => $tricks->findAll(),
            'image' => $image,
        ]);
    }



    #[Route('tricks/slug/delete', name: 'tricks_delete')]

    public function deleteTrick(TrickRepository $tricks, ImageRepository $image): Response
    {
        return $this->render('home/index.html.twig', [
            'tricks' => $tricks->findAll(),
            'image' => $image,
        ]);
    }



    #[Route('/suppression-figure/{slug}', name: 'delete_trick')]
    public function delete(Trick $trick, EntityManagerInterface $entityManager, PictureService $pictureService): Response
    {
        // We check if the user can delete with the voter
        // $this->denyAccessUnlessGranted('TRICK_DELETE', $trick);


        foreach ($trick->getVideo() as $video) {
            $trick->removeVideo($video);
        }

        foreach ($trick->getImage() as $media) {
            $trick->removeImage($media);
        }
        foreach ($trick->getComments() as $comments) {
            $trick->removeComment($comments);
        }

        $entityManager->remove($trick);
        $entityManager->flush();
        
        $this->addFlash('success', 'Figure supprimée avec succès');

        return $this->redirectToRoute('home');
    }

    private function handleData($form, $pictureService, $trick, $entityManager, $videoLinkService)
    {

        $images = $form->get('images')->getData();
        $videos = $form->get('video')->getData();
        //$new_video = $form->get('video');

        //dd($videos);

          //    We get the videos
          foreach ($trick->getVideo() as $video) {
            // $video = new Video();
            $video->setName($trick->getName());

            
            $link = $videoLinkService->checkLink($video->getUrl());
            $video->setUrl($link);
            $video->setTrick($trick);
            $entityManager->persist($video);
        }

        foreach ($images as $image) {
            if($image == $images[0]) {
                $main = true;
            } else {
                $main = false;
            }

            // We define the destination folder
            $folder = 'tricks';
            // We call the add service
            $file = $pictureService->add($image, $folder, 300, 300);
            $image = new Image();
            $image->setName($trick->getName());
            $image->setPath($file);
           
            $image->setIsMain($main);
            $image->setTrick($trick);
            $entityManager->persist($image);
            
        }
        $entityManager->flush();
    }
}
