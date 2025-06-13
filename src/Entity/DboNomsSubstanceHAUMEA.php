<?php

namespace App\Entity;

use App\Repository\DboNomsSubstanceHAUMEARepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DboNomsSubstanceHAUMEARepository::class)]
class DboNomsSubstanceHAUMEA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeNomSubstance = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeSubstance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomSubstance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libRech = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeDenom = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeOrigineNom = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicValide = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $nomValidePar = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicCandidat = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateDernModif = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodeSubstance(): ?string
    {
        return $this->codeSubstance;
    }

    public function setCodeSubstance(?string $codeSubstance): static
    {
        $this->codeSubstance = $codeSubstance;

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

    public function getLibRech(): ?string
    {
        return $this->libRech;
    }

    public function setLibRech(?string $libRech): static
    {
        $this->libRech = $libRech;

        return $this;
    }

    public function getCodeDenom(): ?int
    {
        return $this->codeDenom;
    }

    public function setCodeDenom(?int $codeDenom): static
    {
        $this->codeDenom = $codeDenom;

        return $this;
    }

    public function getCodeOrigineNom(): ?int
    {
        return $this->codeOrigineNom;
    }

    public function setCodeOrigineNom(?int $codeOrigineNom): static
    {
        $this->codeOrigineNom = $codeOrigineNom;

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

    public function isIndicCandidat(): ?bool
    {
        return $this->indicCandidat;
    }

    public function setIndicCandidat(?bool $indicCandidat): static
    {
        $this->indicCandidat = $indicCandidat;

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
}
