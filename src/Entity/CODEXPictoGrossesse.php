<?php

// namespace App\Codex\Entity;
namespace App\Entity;

// use App\Codex\Repository\CODEXPictoGrossesseRepository;
use App\Repository\CODEXPictoGrossesseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CODEXPictoGrossesseRepository::class)]
class CODEXPictoGrossesse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(nullable: true)]
    private ?int $numPresentation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomPresentation = null;

    #[ORM\Column(nullable: true)]
    private ?int $codeCIP = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codeCIP13 = null;

    #[ORM\Column(nullable: true)]
    private ?int $statutComm = null;

    #[ORM\Column(nullable: true)]
    private ?int $Code_Picto = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Lib_Picto = null;

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

    public function getNumPresentation(): ?int
    {
        return $this->numPresentation;
    }

    public function setNumPresentation(?int $numPresentation): static
    {
        $this->numPresentation = $numPresentation;

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

    public function getCodeCIP(): ?int
    {
        return $this->codeCIP;
    }

    public function setCodeCIP(?int $codeCIP): static
    {
        $this->codeCIP = $codeCIP;

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

    public function getStatutComm(): ?int
    {
        return $this->statutComm;
    }

    public function setStatutComm(?int $statutComm): static
    {
        $this->statutComm = $statutComm;

        return $this;
    }

    public function getCodePicto(): ?int
    {
        return $this->Code_Picto;
    }

    public function setCodePicto(?int $Code_Picto): static
    {
        $this->Code_Picto = $Code_Picto;

        return $this;
    }

    public function getLibPicto(): ?string
    {
        return $this->Lib_Picto;
    }

    public function setLibPicto(?string $Lib_Picto): static
    {
        $this->Lib_Picto = $Lib_Picto;

        return $this;
    }
}
