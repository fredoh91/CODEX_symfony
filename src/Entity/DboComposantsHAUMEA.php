<?php

namespace App\Entity;

use App\Repository\DboComposantsHAUMEARepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DboComposantsHAUMEARepository::class)]
class DboComposantsHAUMEA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(nullable: true)]
    private ?int $numElement = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeSubstance = null;

    #[ORM\Column(nullable: true)]
    private ?int $numComposant = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeUniteDosage = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeNomSubstance = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeNature = null;

    #[ORM\Column(nullable: true)]
    private ?int $qteDosage = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $dosageLibra = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosageLibraTypo = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $CEP = null;

    #[ORM\Column(nullable: true)]
    private ?int $numOrdreEdit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remComposants = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateDernModif = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicValide = null;

    #[ORM\Column(nullable: true)]
    private ?float $codeModif = null;

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

    public function getNumElement(): ?int
    {
        return $this->numElement;
    }

    public function setNumElement(?int $numElement): static
    {
        $this->numElement = $numElement;

        return $this;
    }

    public function getCodeSubstance(): ?string
    {
        return $this->codeSubstance;
    }

    public function setCodeSubstance(?string $codeSubstance): static
    {
        $this->codeSubstance = $codeSubstance;

        return $this;
    }

    public function getNumComposant(): ?int
    {
        return $this->numComposant;
    }

    public function setNumComposant(?int $numComposant): static
    {
        $this->numComposant = $numComposant;

        return $this;
    }

    public function getCodeUniteDosage(): ?int
    {
        return $this->codeUniteDosage;
    }

    public function setCodeUniteDosage(?int $codeUniteDosage): static
    {
        $this->codeUniteDosage = $codeUniteDosage;

        return $this;
    }

    public function getCodeNomSubstance(): ?string
    {
        return $this->codeNomSubstance;
    }

    public function setCodeNomSubstance(?string $codeNomSubstance): static
    {
        $this->codeNomSubstance = $codeNomSubstance;

        return $this;
    }

    public function getCodeNature(): ?int
    {
        return $this->codeNature;
    }

    public function setCodeNature(?int $codeNature): static
    {
        $this->codeNature = $codeNature;

        return $this;
    }

    public function getQteDosage(): ?int
    {
        return $this->qteDosage;
    }

    public function setQteDosage(?int $qteDosage): static
    {
        $this->qteDosage = $qteDosage;

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

    public function getDosageLibraTypo(): ?string
    {
        return $this->dosageLibraTypo;
    }

    public function setDosageLibraTypo(?string $dosageLibraTypo): static
    {
        $this->dosageLibraTypo = $dosageLibraTypo;

        return $this;
    }

    public function getCEP(): ?string
    {
        return $this->CEP;
    }

    public function setCEP(?string $CEP): static
    {
        $this->CEP = $CEP;

        return $this;
    }

    public function getNumOrdreEdit(): ?int
    {
        return $this->numOrdreEdit;
    }

    public function setNumOrdreEdit(?int $numOrdreEdit): static
    {
        $this->numOrdreEdit = $numOrdreEdit;

        return $this;
    }

    public function getRemComposants(): ?string
    {
        return $this->remComposants;
    }

    public function setRemComposants(?string $remComposants): static
    {
        $this->remComposants = $remComposants;

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

    public function isIndicValide(): ?bool
    {
        return $this->indicValide;
    }

    public function setIndicValide(?bool $indicValide): static
    {
        $this->indicValide = $indicValide;

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
}
