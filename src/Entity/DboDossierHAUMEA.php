<?php

namespace App\Entity;

use App\Repository\DboDossierHAUMEARepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DboDossierHAUMEARepository::class)]
class DboDossierHAUMEA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $codeDossier = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeNatureCode = null;

    #[ORM\Column(nullable: true)]
    private ?int $numOrdreEdit = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remDossier = null;

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

    public function getCodeDossier(): ?string
    {
        return $this->codeDossier;
    }

    public function setCodeDossier(?string $codeDossier): static
    {
        $this->codeDossier = $codeDossier;

        return $this;
    }

    public function getCodeNatureCode(): ?int
    {
        return $this->codeNatureCode;
    }

    public function setCodeNatureCode(?int $codeNatureCode): static
    {
        $this->codeNatureCode = $codeNatureCode;

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

    public function getRemDossier(): ?string
    {
        return $this->remDossier;
    }

    public function setRemDossier(?string $remDossier): static
    {
        $this->remDossier = $remDossier;

        return $this;
    }
}
