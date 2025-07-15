<?php

namespace App\Entity;

use App\Repository\MOCATORDocumentXMLRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

#[ORM\Entity(repositoryClass: MOCATORDocumentXMLRepository::class)]
#[Index(name: "idx_code_vu", fields: ["codeVU"])]
#[Index(name: "idx_doc_id", fields: ["DocId"])]
class MOCATORDocumentXML
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $XdocId = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(nullable: true)]
    private ?int $DocId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NatureDoc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $StatutDoc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Auteur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ServerName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SrceName = null;

    #[ORM\Column(nullable: true)]
    private ?int $SrceSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $SrceLastUpd = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NativeFormat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $VersionDTD = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DocJoint = null;

    #[ORM\Column(nullable: true)]
    private ?int $NumOrdre = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateMajAMM = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateValide = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateLiv = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateArch = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getXdocId(): ?int
    {
        return $this->XdocId;
    }

    public function setXdocId(?int $XdocId): static
    {
        $this->XdocId = $XdocId;

        return $this;
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

    public function getDocId(): ?int
    {
        return $this->DocId;
    }

    public function setDocId(?int $DocId): static
    {
        $this->DocId = $DocId;

        return $this;
    }

    public function getNatureDoc(): ?string
    {
        return $this->NatureDoc;
    }

    public function setNatureDoc(?string $NatureDoc): static
    {
        $this->NatureDoc = $NatureDoc;

        return $this;
    }

    public function getStatutDoc(): ?string
    {
        return $this->StatutDoc;
    }

    public function setStatutDoc(?string $StatutDoc): static
    {
        $this->StatutDoc = $StatutDoc;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(?string $Auteur): static
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getServerName(): ?string
    {
        return $this->ServerName;
    }

    public function setServerName(?string $ServerName): static
    {
        $this->ServerName = $ServerName;

        return $this;
    }

    public function getSrceName(): ?string
    {
        return $this->SrceName;
    }

    public function setSrceName(?string $SrceName): static
    {
        $this->SrceName = $SrceName;

        return $this;
    }

    public function getSrceSize(): ?int
    {
        return $this->SrceSize;
    }

    public function setSrceSize(?int $SrceSize): static
    {
        $this->SrceSize = $SrceSize;

        return $this;
    }

    public function getSrceLastUpd(): ?\DateTime
    {
        return $this->SrceLastUpd;
    }

    public function setSrceLastUpd(?\DateTime $SrceLastUpd): static
    {
        $this->SrceLastUpd = $SrceLastUpd;

        return $this;
    }

    public function getNativeFormat(): ?string
    {
        return $this->NativeFormat;
    }

    public function setNativeFormat(?string $NativeFormat): static
    {
        $this->NativeFormat = $NativeFormat;

        return $this;
    }

    public function getVersionDTD(): ?string
    {
        return $this->VersionDTD;
    }

    public function setVersionDTD(?string $VersionDTD): static
    {
        $this->VersionDTD = $VersionDTD;

        return $this;
    }

    public function getDocJoint(): ?string
    {
        return $this->DocJoint;
    }

    public function setDocJoint(?string $DocJoint): static
    {
        $this->DocJoint = $DocJoint;

        return $this;
    }

    public function getNumOrdre(): ?int
    {
        return $this->NumOrdre;
    }

    public function setNumOrdre(?int $NumOrdre): static
    {
        $this->NumOrdre = $NumOrdre;

        return $this;
    }

    public function getDateMajAMM(): ?\DateTime
    {
        return $this->DateMajAMM;
    }

    public function setDateMajAMM(?\DateTime $DateMajAMM): static
    {
        $this->DateMajAMM = $DateMajAMM;

        return $this;
    }

    public function getDateValide(): ?\DateTime
    {
        return $this->DateValide;
    }

    public function setDateValide(?\DateTime $DateValide): static
    {
        $this->DateValide = $DateValide;

        return $this;
    }

    public function getDateLiv(): ?\DateTime
    {
        return $this->DateLiv;
    }

    public function setDateLiv(?\DateTime $DateLiv): static
    {
        $this->DateLiv = $DateLiv;

        return $this;
    }

    public function getDateArch(): ?\DateTime
    {
        return $this->DateArch;
    }

    public function setDateArch(?\DateTime $DateArch): static
    {
        $this->DateArch = $DateArch;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): static
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }
}
