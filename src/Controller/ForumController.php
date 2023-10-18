<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ForumType;
use App\Form\ReplyType;
use App\Entity\Comments;
use App\Entity\Reply;

class ForumController extends AbstractController
{
    public function __construct(private Security $security)
    {
    }

    #[Route('/forum', name: 'app_forum')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $comments = $entityManager->getRepository(Comments::class)->findAll();

        return $this->render('forum/index.html.twig', [
            'comments' => $comments,
        ]);
    }
}
