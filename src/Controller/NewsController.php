<?php

namespace App\Controller;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class NewsController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/news', name: 'app_news')]
    public function index(): Response
    {

        $newsRepository = $this->entityManager->getRepository(News::class);

        $user = $this->getUser();

        if ($user && $this->isGranted('ROLE_USER')) {
            $actualites = $newsRepository->findAll();
        } else {
            $actualites = $newsRepository->findBy(['visibility' => false]);
        }

        return $this->render('news/index.html.twig', [
            'actualites' => $actualites,
        ]);
    }
}
