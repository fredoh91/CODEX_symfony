<?php

namespace App\Entity;

use App\Repository\CODEXVoieAdminRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CODEXVoieAdminRepository::class)]
class CODEXVoieAdmin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeVoie = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $libAbr = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $libCourt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libLong = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libRech = null;

    #[ORM\Column(nullable: true)]
    private ?int $numOrdreEdit = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicValide = null;

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

    public function getCodeVoie(): ?int
    {
        return $this->codeVoie;
    }

    public function setCodeVoie(?int $codeVoie): static
    {
        $this->codeVoie = $codeVoie;

        return $this;
    }

    public function getLibAbr(): ?string
    {
        return $this->libAbr;
    }

    public function setLibAbr(?string $libAbr): static
    {
        $this->libAbr = $libAbr;

        return $this;
    }

    public function getLibCourt(): ?string
    {
        return $this->libCourt;
    }

    public function setLibCourt(?string $libCourt): static
    {
        $this->libCourt = $libCourt;

        return $this;
    }

    public function getLibLong(): ?string
    {
        return $this->libLong;
    }

    public function setLibLong(?string $libLong): static
    {
        $this->libLong = $libLong;

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

    public function getNumOrdreEdit(): ?int
    {
        return $this->numOrdreEdit;
    }

    public function setNumOrdreEdit(?int $numOrdreEdit): static
    {
        $this->numOrdreEdit = $numOrdreEdit;

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
}
