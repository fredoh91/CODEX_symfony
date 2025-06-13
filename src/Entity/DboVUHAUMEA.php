<?php

namespace App\Entity;

use App\Repository\DboVUHAUMEARepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DboVUHAUMEARepository::class)]
class DboVUHAUMEA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeCIS = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $codeDossier = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeProduit = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeInnovation = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeAutorisation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomVU = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libRech = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVUCommun = null;

    #[ORM\Column(nullable: true)]
    private ?int $numDossierCommun = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVUPrinceps = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateAMM = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $remVU = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicValide = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $nomValidePar = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateDernModif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateAutorisation = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeOrigine = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaireVU = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remNotes = null;

    #[ORM\Column(nullable: true)]
    private ?int $flagNouvelle = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeStatut = null;

    #[ORM\Column(nullable: true)]
    private ?int $statutQualif = null;

    #[ORM\Column(nullable: true)]
    private ?float $codeModif = null;

    #[ORM\Column(nullable: true)]
    private ?int $codePaysProvenance = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nomVUTypo = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $nomCourt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nomCourtTypo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $textSolvants = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeVU(): ?string
    {
        return $this->codeVU;
    }

    public function setCodeVU(?string $codeVU): static
    {
        $this->codeVU = $codeVU;

        return $this;
    }

    public function getCodeCIS(): ?string
    {
        return $this->codeCIS;
    }

    public function setCodeCIS(?string $codeCIS): static
    {
        $this->codeCIS = $codeCIS;

        return $this;
    }

    public function getCodeDossier(): ?string
    {
        return $this->codeDossier;
    }

    public function setCodeDossier(?string $codeDossier): static
    {
        $this->codeDossier = $codeDossier;

        return $this;
    }

    public function getCodeProduit(): ?string
    {
        return $this->codeProduit;
    }

    public function setCodeProduit(?string $codeProduit): static
    {
        $this->codeProduit = $codeProduit;

        return $this;
    }

    public function getCodeInnovation(): ?int
    {
        return $this->codeInnovation;
    }

    public function setCodeInnovation(?int $codeInnovation): static
    {
        $this->codeInnovation = $codeInnovation;

        return $this;
    }

    public function getCodeAutorisation(): ?int
    {
        return $this->codeAutorisation;
    }

    public function setCodeAutorisation(?int $codeAutorisation): static
    {
        $this->codeAutorisation = $codeAutorisation;

        return $this;
    }

    public function getNomVU(): ?string
    {
        return $this->nomVU;
    }

    public function setNomVU(?string $nomVU): static
    {
        $this->nomVU = $nomVU;

        return $this;
    }

    public function getLibRech(): ?string
    {
        return $this->libRech;
    }

    public function setLibRech(?string $libRech): static
    {
        $this->libRech = $libRech;

        return $this;
    }

    public function getCodeVUCommun(): ?string
    {
        return $this->codeVUCommun;
    }

    public function setCodeVUCommun(?string $codeVUCommun): static
    {
        $this->codeVUCommun = $codeVUCommun;

        return $this;
    }

    public function getNumDossierCommun(): ?int
    {
        return $this->numDossierCommun;
    }

    public function setNumDossierCommun(?int $numDossierCommun): static
    {
        $this->numDossierCommun = $numDossierCommun;

        return $this;
    }

    public function getCodeVUPrinceps(): ?string
    {
        return $this->codeVUPrinceps;
    }

    public function setCodeVUPrinceps(?string $codeVUPrinceps): static
    {
        $this->codeVUPrinceps = $codeVUPrinceps;

        return $this;
    }

    public function getDateAMM(): ?\DateTime
    {
        return $this->dateAMM;
    }

    public function setDateAMM(?\DateTime $dateAMM): static
    {
        $this->dateAMM = $dateAMM;

        return $this;
    }

    public function getRemVU(): ?string
    {
        return $this->remVU;
    }

    public function setRemVU(?string $remVU): static
    {
        $this->remVU = $remVU;

        return $this;
    }

    public function isIndicValide(): ?bool
    {
        return $this->indicValide;
    }

    public function setIndicValide(?bool $indicValide): static
    {
        $this->indicValide = $indicValide;

        return $this;
    }

    public function getNomValidePar(): ?string
    {
        return $this->nomValidePar;
    }

    public function setNomValidePar(?string $nomValidePar): static
    {
        $this->nomValidePar = $nomValidePar;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeImmutable $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateDernModif(): ?\DateTimeImmutable
    {
        return $this->dateDernModif;
    }

    public function setDateDernModif(?\DateTimeImmutable $dateDernModif): static
    {
        $this->dateDernModif = $dateDernModif;

        return $this;
    }

    public function getDateAutorisation(): ?\DateTime
    {
        return $this->dateAutorisation;
    }

    public function setDateAutorisation(?\DateTime $dateAutorisation): static
    {
        $this->dateAutorisation = $dateAutorisation;

        return $this;
    }

    public function getCodeOrigine(): ?string
    {
        return $this->codeOrigine;
    }

    public function setCodeOrigine(?string $codeOrigine): static
    {
        $this->codeOrigine = $codeOrigine;

        return $this;
    }

    public function getCommentaireVU(): ?string
    {
        return $this->commentaireVU;
    }

    public function setCommentaireVU(?string $commentaireVU): static
    {
        $this->commentaireVU = $commentaireVU;

        return $this;
    }

    public function getRemNotes(): ?string
    {
        return $this->remNotes;
    }

    public function setRemNotes(?string $remNotes): static
    {
        $this->remNotes = $remNotes;

        return $this;
    }

    public function getFlagNouvelle(): ?int
    {
        return $this->flagNouvelle;
    }

    public function setFlagNouvelle(?int $flagNouvelle): static
    {
        $this->flagNouvelle = $flagNouvelle;

        return $this;
    }

    public function getCodeStatut(): ?int
    {
        return $this->codeStatut;
    }

    public function setCodeStatut(?int $codeStatut): static
    {
        $this->codeStatut = $codeStatut;

        return $this;
    }

    public function getStatutQualif(): ?int
    {
        return $this->statutQualif;
    }

    public function setStatutQualif(?int $statutQualif): static
    {
        $this->statutQualif = $statutQualif;

        return $this;
    }

    public function getCodeModif(): ?float
    {
        return $this->codeModif;
    }

    public function setCodeModif(?float $codeModif): static
    {
        $this->codeModif = $codeModif;

        return $this;
    }

    public function getCodePaysProvenance(): ?int
    {
        return $this->codePaysProvenance;
    }

    public function setCodePaysProvenance(?int $codePaysProvenance): static
    {
        $this->codePaysProvenance = $codePaysProvenance;

        return $this;
    }

    public function getNomVUTypo(): ?string
    {
        return $this->nomVUTypo;
    }

    public function setNomVUTypo(?string $nomVUTypo): static
    {
        $this->nomVUTypo = $nomVUTypo;

        return $this;
    }

    public function getNomCourt(): ?string
    {
        return $this->nomCourt;
    }

    public function setNomCourt(?string $nomCourt): static
    {
        $this->nomCourt = $nomCourt;

        return $this;
    }

    public function getNomCourtTypo(): ?string
    {
        return $this->nomCourtTypo;
    }

    public function setNomCourtTypo(?string $nomCourtTypo): static
    {
        $this->nomCourtTypo = $nomCourtTypo;

        return $this;
    }

    public function getTextSolvants(): ?string
    {
        return $this->textSolvants;
    }

    public function setTextSolvants(?string $textSolvants): static
    {
        $this->textSolvants = $textSolvants;

        return $this;
    }
}
