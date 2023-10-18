<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OslController extends AbstractController
{
    #[Route('/osl', name: 'app_osl')]
    public function index(): Response
    {
        return $this->render('osl/index.html.twig', [
            'controller_name' => 'OslController',
        ]);
    }
}
