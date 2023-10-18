<?php

namespace App\Entity;

use App\Repository\StampRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StampRepository::class)]
class Stamp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reference_sococodami = null;

    #[ORM\Column(length: 255,  nullable: true)]
    private ?string $reference_sococodami_bis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $txt_faciale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $num_tirage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numero = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numero_long_yvert = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_debut_tirage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_fin_tirage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $presse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_parution = null;

    #[ORM\Column(length: 255, nullable: true )]
    private ?string $existe_autoadhesifs = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $memo_cd = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tirage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $qt_tp_presentation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $journe_tirage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $num_superieur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $num_inferieur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remarque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaire_tirage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceSococodami(): ?string
    {
        return $this->reference_sococodami;
    }

    public function setReferenceSococodami(string $reference_sococodami): static
    {
        $this->reference_sococodami = $reference_sococodami;

        return $this;
    }

    public function getReferenceSococodamiBis(): ?string
    {
        return $this->reference_sococodami_bis;
    }

    public function setReferenceSococodamiBis(string $reference_sococodami_bis): static
    {
        $this->reference_sococodami_bis = $reference_sococodami_bis;

        return $this;
    }

    public function getTxtFaciale(): ?string
    {
        return $this->txt_faciale;
    }

    public function setTxtFaciale(?string $txt_faciale): static
    {
        $this->txt_faciale = $txt_faciale;

        return $this;
    }

    public function getNumTirage(): ?string
    {
        return $this->num_tirage;
    }

    public function setNumTirage(?string $num_tirage): static
    {
        $this->num_tirage = $num_tirage;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNumeroLongYvert(): ?string
    {
        return $this->numero_long_yvert;
    }

    public function setNumeroLongYvert(?string $numero_long_yvert): static
    {
        $this->numero_long_yvert = $numero_long_yvert;

        return $this;
    }

    public function getDateDebutTirage(): string
    {
        return $this->date_debut_tirage;
    }

    public function setDateDebutTirage(?string $date_debut_tirage): static
    {
        $this->date_debut_tirage = $date_debut_tirage;

        return $this;
    }

    public function getDateFinTirage(): ?string
    {
        return $this->date_fin_tirage;
    }

    public function setDateFinTirage(?string $date_fin_tirage): static
    {
        $this->date_fin_tirage = $date_fin_tirage;

        return $this;
    }

    public function getPresse(): ?string
    {
        return $this->presse;
    }

    public function setPresse(?string $presse): static
    {
        $this->presse = $presse;

        return $this;
    }

    public function getDateParution(): ?string
    {
        return $this->date_parution;
    }

    public function setDateParution(?string $date_parution): static
    {
        $this->date_parution = $date_parution;

        return $this;
    }

    public function isExisteAutoadhesifs(): ?string
    {
        return $this->existe_autoadhesifs;
    }

    public function setExisteAutoadhesifs(?string $existe_autoadhesifs): static
    {
        $this->existe_autoadhesifs = $existe_autoadhesifs;

        return $this;
    }

    public function getMemoCd(): ?string
    {
        return $this->memo_cd;
    }

    public function setMemoCd(?string $memo_cd): static
    {
        $this->memo_cd = $memo_cd;

        return $this;
    }

    public function getTirage(): ?string
    {
        return $this->tirage;
    }

    public function setTirage(?string $tirage): static
    {
        $this->tirage = $tirage;

        return $this;
    }

    public function getQtTpPresentation(): ?string
    {
        return $this->qt_tp_presentation;
    }

    public function setQtTpPresentation(?string $qt_tp_presentation): static
    {
        $this->qt_tp_presentation = $qt_tp_presentation;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getJourneTirage(): ?string
    {
        return $this->journe_tirage;
    }

    public function setJourneTirage(?string $journe_tirage): static
    {
        $this->journe_tirage = $journe_tirage;

        return $this;
    }

    public function getNumSuperieur(): ?string
    {
        return $this->num_superieur;
    }

    public function setNumSuperieur(?string $num_superieur): static
    {
        $this->num_superieur = $num_superieur;

        return $this;
    }

    public function getNumInferieur(): ?string
    {
        return $this->num_inferieur;
    }

    public function setNumInferieur(?string $num_inferieur): static
    {
        $this->num_inferieur = $num_inferieur;

        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): static
    {   
        $this->remarque = $remarque;

        return $this;
    }

    public function getCommentaireTirage(): ?string
    {
        return $this->commentaire_tirage;
    }

    public function setCommentaireTirage(?string $commentaire_tirage): static
    {
        $this->commentaire_tirage = $commentaire_tirage;

        return $this;
    }
}
