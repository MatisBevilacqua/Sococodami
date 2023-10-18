<?php

namespace App\Controller;

use App\Entity\Stamp;
use App\Entity\StampImage; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Comments; 
use App\Entity\Reply; 
use App\Form\ForumType; 
use App\Form\ReplyType; 

class DetailController extends AbstractController
{

    public function __construct(private Security $security)
    {
    }

    #[Route('/stamps/detail/{id}', name: 'app_stamp_detail')]
    public function index($id, EntityManagerInterface $entityManager, Request $request): Response
    {

        $stampRepository = $entityManager->getRepository(Stamp::class);
        $stamp = $stampRepository->find($id);
        $stampTitle = $stamp->getTitre();
        $stampRef = $stamp->getReferenceSococodami();
        $stampBis = $stamp->getReferenceSococodamiBis();

        $allStampsWithSameTitles = $stampRepository->findBy([
            'titre' => $stampTitle,
            'reference_sococodami' => $stampRef,
            'reference_sococodami_bis' => $stampBis,
        ]);

        $stampImages = [];

        foreach($allStampsWithSameTitles as $allStampsWithSameTitle){
            $stampImages[$allStampsWithSameTitle->getId()] = $entityManager->getRepository(StampImage::class)->findBy(['stamp' => $allStampsWithSameTitle->getId()]);
        }

        $comment = new Comments();
        $commentForm = $this->createForm(ForumType::class, $comment);
        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $user = $this->getUser();
            $comment->setUser($user->getUsername());
            $comment->setDate(new \DateTime());
            $comment->setCommentsId($id);

            $entityManager->persist($comment);
            $entityManager->flush();
        }

        $commentRepository = $entityManager->getRepository(Comments::class);
        $comments = $commentRepository->findBy(['comments_id' => $id]);

        return $this->render('detail/index.html.twig', [
            'allStampsWithSameTitle' => $allStampsWithSameTitles,
            'stampImages' => $stampImages,
            'commentForm' => $commentForm->createView(),
            'comments' => $comments
        ]);
    }
}
