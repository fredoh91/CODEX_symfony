<?php

namespace App\Entity;

use App\Repository\DatesLancementsExtractionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DatesLancementsExtractionsRepository::class)]
class DatesLancementsExtractions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateDebutExtraction = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateFinExtraction = null;

    #[ORM\Column(nullable: true)]
    private ?int $NbTablesExtraites = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebutExtraction(): ?\DateTime
    {
        return $this->DateDebutExtraction;
    }

    public function setDateDebutExtraction(?\DateTime $DateDebutExtraction): static
    {
        $this->DateDebutExtraction = $DateDebutExtraction;

        return $this;
    }

    public function getDateFinExtraction(): ?\DateTime
    {
        return $this->DateFinExtraction;
    }

    public function setDateFinExtraction(?\DateTime $DateFinExtraction): static
    {
        $this->DateFinExtraction = $DateFinExtraction;

        return $this;
    }

    public function getNbTablesExtraites(): ?int
    {
        return $this->NbTablesExtraites;
    }

    public function setNbTablesExtraites(?int $NbTablesExtraites): static
    {
        $this->NbTablesExtraites = $NbTablesExtraites;

        return $this;
    }
}
