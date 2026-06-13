<?php

namespace App\Entity;

use App\Repository\EIMedDRACodeCisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EIMedDRACodeCisRepository::class)]
#[ORM\Table(name: 'EI_MedDRA_code_cis')]
class EIMedDRACodeCis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeCIS = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $CodeATC = null;

    #[ORM\Column(nullable: true)]
    private ?int $ptCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ptNameEn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ptNameFr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $frequence = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $libelleBrut = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodeATC(): ?string
    {
        return $this->CodeATC;
    }

    public function setCodeATC(?string $CodeATC): static
    {
        $this->CodeATC = $CodeATC;

        return $this;
    }

    public function getPtCode(): ?int
    {
        return $this->ptCode;
    }

    public function setPtCode(?int $ptCode): static
    {
        $this->ptCode = $ptCode;

        return $this;
    }

    public function getPtNameEn(): ?string
    {
        return $this->ptNameEn;
    }

    public function setPtNameEn(string $ptNameEn): static
    {
        $this->ptNameEn = $ptNameEn;

        return $this;
    }

    public function getPtNameFr(): ?string
    {
        return $this->ptNameFr;
    }

    public function setPtNameFr(?string $ptNameFr): static
    {
        $this->ptNameFr = $ptNameFr;

        return $this;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(?string $frequence): static
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getLibelleBrut(): ?string
    {
        return $this->libelleBrut;
    }

    public function setLibelleBrut(?string $libelleBrut): static
    {
        $this->libelleBrut = $libelleBrut;

        return $this;
    }
}
