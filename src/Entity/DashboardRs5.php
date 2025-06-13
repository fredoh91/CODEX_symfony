<?php

namespace App\Entity;

use App\Repository\DashboardRs5Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DashboardRs5Repository::class)]
class DashboardRs5
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomVU = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $typeProcedure = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $CodeATC = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $LibATC = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $forme_pharma = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $voie_admin = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $statutSpecialite = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeTerme = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeProduit = null;

    #[ORM\Column(nullable: true)]
    private ?int $indicValide = null;

    #[ORM\Column(length: 13, nullable: true)]
    private ?string $codeCIP13 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomPresentation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomSubstance = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $dosageLibra = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $ClasseACP_libCourt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $date_extract = null;

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

    public function getNomVU(): ?string
    {
        return $this->nomVU;
    }

    public function setNomVU(?string $nomVU): static
    {
        $this->nomVU = $nomVU;

        return $this;
    }

    public function getTypeProcedure(): ?string
    {
        return $this->typeProcedure;
    }

    public function setTypeProcedure(?string $typeProcedure): static
    {
        $this->typeProcedure = $typeProcedure;

        return $this;
    }

    public function getCodeATC(): ?string
    {
        return $this->CodeATC;
    }

    public function setCodeATC(?string $CodeATC): static
    {
        $this->CodeATC = $CodeATC;

        return $this;
    }

    public function getLibATC(): ?string
    {
        return $this->LibATC;
    }

    public function setLibATC(?string $LibATC): static
    {
        $this->LibATC = $LibATC;

        return $this;
    }

    public function getFormePharma(): ?string
    {
        return $this->forme_pharma;
    }

    public function setFormePharma(?string $forme_pharma): static
    {
        $this->forme_pharma = $forme_pharma;

        return $this;
    }

    public function getVoieAdmin(): ?string
    {
        return $this->voie_admin;
    }

    public function setVoieAdmin(?string $voie_admin): static
    {
        $this->voie_admin = $voie_admin;

        return $this;
    }

    public function getStatutSpecialite(): ?string
    {
        return $this->statutSpecialite;
    }

    public function setStatutSpecialite(?string $statutSpecialite): static
    {
        $this->statutSpecialite = $statutSpecialite;

        return $this;
    }

    public function getCodeTerme(): ?int
    {
        return $this->codeTerme;
    }

    public function setCodeTerme(?int $codeTerme): static
    {
        $this->codeTerme = $codeTerme;

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

    public function getIndicValide(): ?int
    {
        return $this->indicValide;
    }

    public function setIndicValide(?int $indicValide): static
    {
        $this->indicValide = $indicValide;

        return $this;
    }

    public function getCodeCIP13(): ?string
    {
        return $this->codeCIP13;
    }

    public function setCodeCIP13(?string $codeCIP13): static
    {
        $this->codeCIP13 = $codeCIP13;

        return $this;
    }

    public function getNomPresentation(): ?string
    {
        return $this->nomPresentation;
    }

    public function setNomPresentation(?string $nomPresentation): static
    {
        $this->nomPresentation = $nomPresentation;

        return $this;
    }

    public function getNomSubstance(): ?string
    {
        return $this->nomSubstance;
    }

    public function setNomSubstance(?string $nomSubstance): static
    {
        $this->nomSubstance = $nomSubstance;

        return $this;
    }

    public function getDosageLibra(): ?string
    {
        return $this->dosageLibra;
    }

    public function setDosageLibra(?string $dosageLibra): static
    {
        $this->dosageLibra = $dosageLibra;

        return $this;
    }

    public function getClasseACPLibCourt(): ?string
    {
        return $this->ClasseACP_libCourt;
    }

    public function setClasseACPLibCourt(?string $ClasseACP_libCourt): static
    {
        $this->ClasseACP_libCourt = $ClasseACP_libCourt;

        return $this;
    }

    public function getDateExtract(): ?\DateTimeImmutable
    {
        return $this->date_extract;
    }

    public function setDateExtract(?\DateTimeImmutable $date_extract): static
    {
        $this->date_extract = $date_extract;

        return $this;
    }
}
