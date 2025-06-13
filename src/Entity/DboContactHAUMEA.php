<?php

namespace App\Entity;

use App\Repository\DboContactHAUMEARepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DboContactHAUMEARepository::class)]
class DboContactHAUMEA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeContact = null;

    #[ORM\Column(nullable: true)]
    private ?int $codePays = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeGroupeLabo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomContact = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libRech = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeAMM = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeLibra = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeMuse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomContactLibra = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $adresseContact = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $adresseCompl = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $codePost = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $nomVille = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $telContact = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $faxContact = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomResponsable = null;

    #[ORM\Column(nullable: true)]
    private ?bool $indicCandidat = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateDernModif = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $codeOrigine = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remContact = null;

    #[ORM\Column(nullable: true)]
    private ?int $flagActif = null;

    #[ORM\Column(nullable: true)]
    private ?float $codeModif = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodePays(): ?int
    {
        return $this->codePays;
    }

    public function setCodePays(?int $codePays): static
    {
        $this->codePays = $codePays;

        return $this;
    }

    public function getCodeGroupeLabo(): ?string
    {
        return $this->codeGroupeLabo;
    }

    public function setCodeGroupeLabo(?string $codeGroupeLabo): static
    {
        $this->codeGroupeLabo = $codeGroupeLabo;

        return $this;
    }

    public function getNomContact(): ?string
    {
        return $this->nomContact;
    }

    public function setNomContact(?string $nomContact): static
    {
        $this->nomContact = $nomContact;

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

    public function getCodeAMM(): ?string
    {
        return $this->codeAMM;
    }

    public function setCodeAMM(?string $codeAMM): static
    {
        $this->codeAMM = $codeAMM;

        return $this;
    }

    public function getCodeLibra(): ?string
    {
        return $this->codeLibra;
    }

    public function setCodeLibra(?string $codeLibra): static
    {
        $this->codeLibra = $codeLibra;

        return $this;
    }

    public function getCodeMuse(): ?string
    {
        return $this->codeMuse;
    }

    public function setCodeMuse(?string $codeMuse): static
    {
        $this->codeMuse = $codeMuse;

        return $this;
    }

    public function getNomContactLibra(): ?string
    {
        return $this->nomContactLibra;
    }

    public function setNomContactLibra(?string $nomContactLibra): static
    {
        $this->nomContactLibra = $nomContactLibra;

        return $this;
    }

    public function getAdresseContact(): ?string
    {
        return $this->adresseContact;
    }

    public function setAdresseContact(?string $adresseContact): static
    {
        $this->adresseContact = $adresseContact;

        return $this;
    }

    public function getAdresseCompl(): ?string
    {
        return $this->adresseCompl;
    }

    public function setAdresseCompl(?string $adresseCompl): static
    {
        $this->adresseCompl = $adresseCompl;

        return $this;
    }

    public function getCodePost(): ?string
    {
        return $this->codePost;
    }

    public function setCodePost(?string $codePost): static
    {
        $this->codePost = $codePost;

        return $this;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(?string $nomVille): static
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getTelContact(): ?string
    {
        return $this->telContact;
    }

    public function setTelContact(?string $telContact): static
    {
        $this->telContact = $telContact;

        return $this;
    }

    public function getFaxContact(): ?string
    {
        return $this->faxContact;
    }

    public function setFaxContact(?string $faxContact): static
    {
        $this->faxContact = $faxContact;

        return $this;
    }

    public function getNomResponsable(): ?string
    {
        return $this->nomResponsable;
    }

    public function setNomResponsable(?string $nomResponsable): static
    {
        $this->nomResponsable = $nomResponsable;

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

    public function getCodeOrigine(): ?string
    {
        return $this->codeOrigine;
    }

    public function setCodeOrigine(?string $codeOrigine): static
    {
        $this->codeOrigine = $codeOrigine;

        return $this;
    }

    public function getRemContact(): ?string
    {
        return $this->remContact;
    }

    public function setRemContact(?string $remContact): static
    {
        $this->remContact = $remContact;

        return $this;
    }

    public function getFlagActif(): ?int
    {
        return $this->flagActif;
    }

    public function setFlagActif(?int $flagActif): static
    {
        $this->flagActif = $flagActif;

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
