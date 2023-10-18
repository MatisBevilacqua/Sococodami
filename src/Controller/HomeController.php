<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Comments;

class HomeController extends AbstractController
{
    
    #[Route('/', name: 'app_home')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {  
        $comments = $entityManager->getRepository(Comments::class)->findAll();

        

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'comments' => $comments,
        ]);
    }
}
