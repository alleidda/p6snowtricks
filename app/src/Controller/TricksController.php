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
use Symfony\Component\HttpFoundation\JsonResponse;
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
    public function display(
        Trick $tricks,
        Request $request,
        EntityManagerInterface $entityManager,
        CommentRepository $commentsRepository
    ): Response {
        // We will look for the page number in the url
        $page = $request->query->getInt('page', 1);

        $comments = $commentsRepository->findCommentPaginated($page, $tricks->getSlug(), 10);

        $user = $this->getUser();
        // We check that the user is logged in and that he has validated his account to access the form to add a comment
        if ($user && $user->getIsVerified()) {
            $comment = new Comment();
            $form = $this->createForm(CommentsFormType::class, $comment);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $comment = $form->getData();
                $comment->setUser($user);
                $comment->setTrick($tricks);
                $entityManager->persist($comment);
                $entityManager->flush();

                $this->addFlash('success', 'Commentaire ajouté avec succès');

                return $this->redirectToRoute('tricks_display', ['slug' => $tricks->getSlug()]);
            }

            return $this->render(
                'tricks/display.html.twig', [
                'trick' => $tricks,
                'comments' => $comments,
                'form' => $form->createView(),
                ]
            );
        }
        return $this->render(
            'tricks/display.html.twig', [
            'trick' => $tricks,
            'comments' => $comments,
            ]
        );
    }

/*     #[Route('/tricks/{slug}', name: 'tricks_display')]
    public function display(Trick $trick, CommentRepository $commentsRepository, EntityManagerInterface $entityManager, ImageRepository $image, Request $request): Response
    {
        if ($user && $user->getIsVerified()) {
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

        //On va chercher le numéro de page dans l'url
        $page = $request->query->getInt('page', 1);
        $comments = $commentsRepository->findCommentPaginated($page, $trick->getSlug(), 10);

        //On va chercher la liste des produits de la catégorie
        $comments = $commentsRepository->findCommentPaginated($page, $trick->getSlug(), 4);
        }
      

        return $this->render('tricks/display.html.twig', [
            'trick' => $trick,
            'comments' => $trick->getComments(),
            'images' => $trick->getImage(),
            'user' => $trick->getUsers(),
            'form' => $form->createView()
            
        ]);
    } */


    
    #[Route('/tricks/more/{offset}', name: 'more_tricks')]
    public function loadMoreTricks(TrickRepository $tricksRepository, $offset)
    {
        $html = $this->renderView(
            'home/_more_tricks.html.twig', [
            'tricks' => $tricksRepository->findAll(),
            'offset' => $offset
            ]
        );
        return new JsonResponse(['html' => $html]);
    }


    #[Route('/trick/add', name: 'tricks_add')]
    public function newTrick(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger,
        PictureService $pictureService,
        VideoLinkService $videoLinkService,
    ): Response {
        $user = $this->getUser();
        if ($user->getIsVerified()) {
        $trick = new Trick();
        $this->denyAccessUnlessGranted('ROLE_USER');
         $this->denyAccessUnlessGranted('TRICK_ADD', $trick);
        $form = $this->createForm(AddTrickFormType::class, $trick);

        $form->handleRequest($request);
        $action = "add";

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();

            $slug = $slugger->slug($trick->getName());
            $trick->setName($trick->getName());
            $trick->setSlug($slug);
            $trick->setUsers($user);

            $entityManager->persist($trick);
            
            $this->handleData($form, $pictureService, $trick, $entityManager, $videoLinkService, $action);

            $entityManager->flush();


            $this->addFlash('success', 'Figure ajoutée avec succès');

            return $this->redirectToRoute('home');
        }
        
        

        return $this->render(
            'tricks/add_trick.html.twig',
            [
                'form' => $form->createView()
            ]
        );

         $this->addFlash('danger', 'Votre compte n\'est pas encore activé');
        return $this->redirectToRoute('home');
    }
    $this->addFlash('danger', 'Votre compte n\'est pas encore activé');
    return $this->redirectToRoute('home');
    }

    #[Route('/modification-figure/{slug}', name: 'edit_trick')]
    public function editTrick(
        Trick $trick,
        Request $request,
        EntityManagerInterface $entityManager,
        PictureService $pictureService,
        VideoLinkService $videoLinkService,
    ): Response {
        // We check if the user can edit with the voter
        $user = $this->getUser();
        if ($user->getId() == $trick->getUsers()->getId()) {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $this->denyAccessUnlessGranted('TRICK_EDIT', $trick);

        $form = $this->createForm(AddTrickFormType::class, $trick);

        $form->handleRequest($request);
        $action = "edit";

        $params = ['slug' => $trick->getSlug()];
        
               // dd($trick->getSlug());
        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleData($form, $pictureService, $trick, $entityManager, $videoLinkService, $action);


            $this->addFlash('success', 'Figure modifiée avec succès');

            return $this->redirectToRoute('edit_trick', ['slug' => $trick->getSlug()]);
        }

        return $this->render(
            'tricks/edit_trick.html.twig', [
            'form' => $form->createView(),
            'trick' => $trick,
            'images' => $trick->getImage()
            ]
        );
    }
    return $this->redirectToRoute('home');
    }

    #[Route('/image-principale/{id}', name: 'main_picture')]
    public function mainImage(Image $media, EntityManagerInterface $entityManager)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        //dd($media);
        $params = ['slug' => $media->getTrick()->getSlug()];
        $trickmedias = $media->getTrick()->getImage();
        foreach ($trickmedias as $img) {
            $img->setIsMain(0);
            $entityManager->persist($img);
        }

        $media->setIsMain(1);
        $entityManager->persist($media);
        $entityManager->flush();

        return $this->redirectToRoute('edit_trick', $params);
    }

    #[Route('tricks/slug/delete', name: 'tricks_delete')]

    public function deleteTrick(TrickRepository $tricks, ImageRepository $image): Response
    {
        return $this->render('home/index.html.twig', [
            'tricks' => $tricks->findAll(),
            'image' => $image,
        ]);
    }

    #[Route('/suppression-image/{id}', name: 'delete_image', methods: ['DELETE'])]

    public function deleteImage(
        Image $media,
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        PictureService $pictureService
    ): JsonResponse {
        $this->denyAccessUnlessGranted('ROLE_USER');
        // Retrieve the content of the request
        $data = json_decode($request->getContent(), true);

        // We check the token
        if ($this->isCsrfTokenValid('delete' . $media->getId(), $data['_token'])) {
            // The csrf token is valid
            // We get the name of the image
            $name = $media->getPath();

            if ($pictureService->delete($name, 'tricks', 300, 300)) {
                // Delete the image from the database
                $entityManagerInterface->remove($media);
                $entityManagerInterface->flush();

                return new JsonResponse(['success' => true], 200);
            }
            // Deletion did not work
            return new JsonResponse(['error' => 'erreur de suppression']);
        }

        return new JsonResponse(['error' => 'Token invalide'], 400);
    }


    #[Route('/suppression-video/{id}', name: 'delete_video')]
    public function deleteVideo(Video $videos, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $params = ['slug' => $videos->getTrick()->getSlug()];

        $entityManager->remove($videos);
        $entityManager->flush();

        return $this->redirectToRoute('edit_trick', $params);
    }


    #[Route('/suppression-figure/{slug}', name: 'delete_trick')]
    public function delete(Trick $trick, EntityManagerInterface $entityManager, PictureService $pictureService): Response
    {
        // We check if the user can delete with the voter
        $this->denyAccessUnlessGranted('ROLE_USER');
         $this->denyAccessUnlessGranted('TRICK_DELETE', $trick);


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

    private function handleData($form, $pictureService, $trick, $entityManager, $videoLinkService, $action)
    {

        $images = $form->get('images')->getData();
//dd($form->get('video')->getData());


          //    We get the videos
          foreach ($trick->getVideo() as $video) {
            if($video->getId() == null) {

            $video->setName($trick->getName());
          
            $link = $videoLinkService->checkLink($video->getUrl());
            $video->setUrl($link);
            $video->setTrick($trick);
            $entityManager->persist($video);
            }
        } 

        
        foreach ($images as $image) {
           
            if($image == $images[0] && $action == "add") {
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
