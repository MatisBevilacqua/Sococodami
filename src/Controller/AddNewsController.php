<?php

namespace App\Controller;

use App\Form\NewsType;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AddNewsController extends AbstractController
{
    #[Route('/add/news', name: 'app_add_news')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $uploadedFile = $form->get('image')->getData();

            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

                $uploadedFile->move(
                    $this->getParameter('app.upload_directory_news'),
                    $newFilename
                );

                $news->setImage($newFilename);
            } else {
                $news->setImage(null);
            }

            $entityManager->persist($news);
            $entityManager->flush();
        }

        return $this->render('add_news/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}