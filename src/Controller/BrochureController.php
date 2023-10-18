<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrochureController extends AbstractController
{
    #[Route('/brochure', name: 'app_brochure')]
    public function index(): Response
    {
        return $this->render('brochure/index.html.twig', [
            'controller_name' => 'BrochureController',
        ]);
    }
}
