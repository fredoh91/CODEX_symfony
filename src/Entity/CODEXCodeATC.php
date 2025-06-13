<?php

namespace App\Entity;

use App\Repository\CODEXCodeATCRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CODEXCodeATCRepository::class)]
class CODEXCodeATC
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $CodeATC = null;

    #[ORM\Column(length: 80)]
    private ?string $libCourt = null;

    #[ORM\Column(nullable: true)]
    private ?int $NbCarCodeATC = null;

    #[ORM\Column(nullable: true)]
    private ?int $TypeCodeATC = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLibCourt(): ?string
    {
        return $this->libCourt;
    }

    public function setLibCourt(string $libCourt): static
    {
        $this->libCourt = $libCourt;

        return $this;
    }

    public function getNbCarCodeATC(): ?int
    {
        return $this->NbCarCodeATC;
    }

    public function setNbCarCodeATC(?int $NbCarCodeATC): static
    {
        $this->NbCarCodeATC = $NbCarCodeATC;

        return $this;
    }

    public function getTypeCodeATC(): ?int
    {
        return $this->TypeCodeATC;
    }

    public function setTypeCodeATC(?int $TypeCodeATC): static
    {
        $this->TypeCodeATC = $TypeCodeATC;

        return $this;
    }
}
