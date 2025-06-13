<?php

namespace App\Entity;

use App\Repository\DboVUTitulairesHAUMEARepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DboVUTitulairesHAUMEARepository::class)]
class DboVUTitulairesHAUMEA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeContact = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $identiteProvisoire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remCommentaire = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicValide = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateDernModif = null;

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

    public function getCodeContact(): ?string
    {
        return $this->codeContact;
    }

    public function setCodeContact(?string $codeContact): static
    {
        $this->codeContact = $codeContact;

        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getIdentiteProvisoire(): ?string
    {
        return $this->identiteProvisoire;
    }

    public function setIdentiteProvisoire(?string $identiteProvisoire): static
    {
        $this->identiteProvisoire = $identiteProvisoire;

        return $this;
    }

    public function getRemCommentaire(): ?string
    {
        return $this->remCommentaire;
    }

    public function setRemCommentaire(?string $remCommentaire): static
    {
        $this->remCommentaire = $remCommentaire;

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
