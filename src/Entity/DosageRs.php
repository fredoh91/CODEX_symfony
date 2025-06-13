<?php

namespace App\Entity;

use App\Repository\DosageRsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DosageRsRepository::class)]
class DosageRs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeCIS = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomVU = null;

    #[ORM\Column(nullable: true)]
    private ?float $dosageInt = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $dosageUnit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosageIntUnit = null;

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

    public function getNomVU(): ?string
    {
        return $this->nomVU;
    }

    public function setNomVU(?string $nomVU): static
    {
        $this->nomVU = $nomVU;

        return $this;
    }

    public function getDosageInt(): ?float
    {
        return $this->dosageInt;
    }

    public function setDosageInt(?float $dosageInt): static
    {
        $this->dosageInt = $dosageInt;

        return $this;
    }

    public function getDosageUnit(): ?string
    {
        return $this->dosageUnit;
    }

    public function setDosageUnit(?string $dosageUnit): static
    {
        $this->dosageUnit = $dosageUnit;

        return $this;
    }

    public function getDosageIntUnit(): ?string
    {
        return $this->dosageIntUnit;
    }

    public function setDosageIntUnit(?string $dosageIntUnit): static
    {
        $this->dosageIntUnit = $dosageIntUnit;

        return $this;
    }
}
