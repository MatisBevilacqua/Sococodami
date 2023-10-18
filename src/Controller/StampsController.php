<?php

namespace App\Controller;


use App\Entity\Stamp;
use App\Form\StampFilterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\StampImage;

class StampsController extends AbstractController
{
    #[Route('/stamps', name: 'app_stamps')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stamps = new Stamp();

        $form = $this->createForm(StampFilterType::class, $stamps);
        $form->handleRequest($request);

        $filteredStamps = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $query = $entityManager->getRepository(Stamp::class)->createQueryBuilder('s')
                ->where('s.reference_sococodami = :reference_sococodami')
                ->andWhere('s.reference_sococodami_bis = :reference_sococodami_bis')
                ->setParameter('reference_sococodami', $formData->getReferenceSococodami())
                ->setParameter('reference_sococodami_bis', $formData->getReferenceSococodamiBis())
                ->getQuery();

            $filteredStamps = $query->getResult();

            foreach ($filteredStamps as $filteredStamp) {
                $stampImages[$filteredStamp->getId()] = $entityManager->getRepository(StampImage::class)->findBy(['stamp' => $filteredStamp->getId()]);
            }
        }

        return $this->render('stamps/index.html.twig', [
            'form' => $form->createView(),
            'filteredStamps' => $filteredStamps
        ]);
    }
}
