<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdhererController extends AbstractController
{
    #[Route('/adherer', name: 'app_adherer')]
    public function index(): Response
    {
        return $this->render('adherer/index.html.twig', [
            'controller_name' => 'AdhererController',
        ]);
    }
}
