<?php

// namespace App\Codex\Entity;
namespace App\Entity;

// use App\Codex\Repository\VUActeursActeurRepository;
use App\Repository\VUActeursActeurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VUActeursActeurRepository::class)]
class VUActeursActeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $codeRoleAct = null;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private ?bool $indicValide = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $codeActeur = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $codeTigre = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $nomActeurLong = null;

    #[ORM\Column(type: 'string', length: 200, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(type: 'string', length: 200, nullable: true)]
    private ?string $adresseComplExpl = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $codePostExpl = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $nomVilleExpl = null;

    #[ORM\Column(type: 'string', length: 200, nullable: true)]
    private ?string $complement = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $tel = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $fax = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeVU(): ?string
    {
        return $this->codeVU;
    }

    public function setCodeVU(?string $codeVU): self
    {
        $this->codeVU = $codeVU;

        return $this;
    }

    public function getCodeRoleAct(): ?int
    {
        return $this->codeRoleAct;
    }

    public function setCodeRoleAct(?int $codeRoleAct): self
    {
        $this->codeRoleAct = $codeRoleAct;

        return $this;
    }

    public function isIndicValide(): ?bool
    {
        return $this->indicValide;
    }

    public function setIndicValide(?bool $indicValide): self
    {
        $this->indicValide = $indicValide;

        return $this;
    }

    public function getCodeActeur(): ?int
    {
        return $this->codeActeur;
    }

    public function setCodeActeur(?int $codeActeur): self
    {
        $this->codeActeur = $codeActeur;

        return $this;
    }

    public function getCodeTigre(): ?int
    {
        return $this->codeTigre;
    }

    public function setCodeTigre(?int $codeTigre): self
    {
        $this->codeTigre = $codeTigre;

        return $this;
    }

    public function getNomActeurLong(): ?string
    {
        return $this->nomActeurLong;
    }

    public function setNomActeurLong(?string $nomActeurLong): self
    {
        $this->nomActeurLong = $nomActeurLong;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAdresseComplExpl(): ?string
    {
        return $this->adresseComplExpl;
    }

    public function setAdresseComplExpl(?string $adresseComplExpl): self
    {
        $this->adresseComplExpl = $adresseComplExpl;

        return $this;
    }

    public function getCodePostExpl(): ?string
    {
        return $this->codePostExpl;
    }

    public function setCodePostExpl(?string $codePostExpl): self
    {
        $this->codePostExpl = $codePostExpl;

        return $this;
    }

    public function getNomVilleExpl(): ?string
    {
        return $this->nomVilleExpl;
    }

    public function setNomVilleExpl(?string $nomVilleExpl): self
    {
        $this->nomVilleExpl = $nomVilleExpl;

        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): self
    {
        $this->complement = $complement;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }
}
