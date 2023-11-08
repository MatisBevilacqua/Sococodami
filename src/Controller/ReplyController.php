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
use App\Entity\Reply;
use App\Entity\Comments;
use App\Form\ReplyType;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ReplyController extends AbstractController
{

    public function __construct(private Security $security)
    {
    }

    #[Route('/stamps/comment/{id}', name: 'app_stamp_reply')]
    public function index($id, EntityManagerInterface $entityManager, Request $request): Response
    {

        $reply = new Reply();
        $replyForm = $this->createForm(ReplyType::class, $reply);
        $replyForm->handleRequest($request);

        $getReply = $entityManager->getRepository(Comments::class);
        $dataGetReply = $getReply->find($id);

        if ($replyForm->isSubmitted() && $replyForm->isValid()) {
            $user = $this->getUser();
            $reply->setResponseUser($user->getUsername());
            $reply->setResponseDate(new \DateTime());
            $reply->setResponse($id);

            $uploadedFile = $replyForm->get('image')->getData();

            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

                $uploadedFile->move(
                    $this->getParameter('app.upload_directory_stamps'),
                    $newFilename
                );

                $reply->setImage($newFilename);
            } else {
                $reply->setImage(null);
            }

            $entityManager->persist($reply);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }


        return $this->render('reply/index.html.twig', [
            'replyForm' => $replyForm->createView(),
            'replyContent' => $dataGetReply
        ]);
    }
}
