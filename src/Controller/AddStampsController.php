<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\StampType;
use App\Entity\Stamp;
use App\Entity\StampImage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;


class AddStampsController extends AbstractController
{
    #[Route('/add/stamps', name: 'app_add_stamps')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stamps = new Stamp();

        $form = $this->createForm(StampType::class, $stamps);
        $form->handleRequest($request);

        $entityManager->persist($stamps);
        $entityManager->flush($stamps);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedImage = $form->get('image')->getData();

            if ($uploadedImage) {
                $newFilename = uniqid() . '.' . $uploadedImage->guessExtension();
                $uploadedImage->move(
                    $this->getParameter('app.upload_directory_stamps'),
                    $newFilename
                );
                $stampImage = new StampImage();
                $stampImage->setImage($newFilename);
                $stampId = $stamps->getId();
                $stampImage->setStamp($stampId);
                $entityManager->persist($stampImage);
                $entityManager->flush($stampImage);

            }



            $xlsFile = $form->get('xlsFile')->getData();

            if ($xlsFile instanceof UploadedFile && $xlsFile->getError() === UPLOAD_ERR_OK) {
                $spreadsheet = IOFactory::load($xlsFile);

                $worksheet = $spreadsheet->getActiveSheet();
                $data = [];

                $columnNames = [];
                $firstRow = $worksheet->getRowIterator()->current();
                foreach ($firstRow->getCellIterator() as $cell) {
                    $columnNames[] = $cell->getValue();
                }

                foreach ($worksheet->getRowIterator() as $row) {
                    $rowData = [];
                    foreach ($row->getCellIterator() as $cell) {
                        $rowData[] = $cell->getValue();
                    }

                    $combinedData = array_combine($columnNames, $rowData);
                    $data[] = $combinedData;
                }

                foreach ($data as $row) {
                    $stamp = new Stamp();

                    $stamp->setReferenceSococodami($row['reference_sococodami']);
                    $stamp->setReferenceSococodamiBis($row['reference_sococodami_bis']);
                    $stamp->setTxtFaciale($row['txt_faciale']);
                    $stamp->setNumTirage($row['num_tirage']);
                    $stamp->setNumero($row['numero']);
                    $stamp->setNumeroLongYvert($row['numero_long_yvert']);
                    $stamp->setPresse($row['presse']);


                    if (isset($row['existe_autoadhesifs'])) {
                        $stamp->setExisteAutoadhesifs($row['existe_autoadhesifs']);
                    }

                    $stamp->setMemoCd($row['memo_cd']);
                    $stamp->setTirage($row['tirage']);
                    $stamp->setQtTpPresentation($row['qt_tp_presentation']);
                    $stamp->setTitre($row['titre']);
                    $stamp->setJourneTirage($row['journe_tirage']);
                    $stamp->setNumSuperieur($row['num_superieur']);
                    $stamp->setNumInferieur($row['num_inferieur']);
                    $stamp->setRemarque($row['remarque']);
                    $stamp->setDateDebutTirage($row['date_debut_tirage']);
                    $stamp->setDateFinTirage($row['date_fin_tirage']);
                    $stamp->setDateParution($row['date_parution']);
                    $stamp->setCommentaireTirage($row['commentaire_tirage']);
                    $stamp->setDateTirage($row['date_tirage']);
                    $stamp->setCommentaire($row['commentaire']);
                    
                    $entityManager->persist($stamp);
                }    

                $entityManager->flush($stamp);
                
            }
        }

        return $this->render('add_stamps/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
