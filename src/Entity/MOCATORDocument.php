<?php

namespace App\Entity;

use App\Repository\MOCATORDocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

#[ORM\Entity(repositoryClass: MOCATORDocumentRepository::class)]
#[Index(name: "idx_doc_id", fields: ["DocId"])]
class MOCATORDocument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $DocId = null;

    #[ORM\Column(nullable: true)]
    private ?int $GrpId = null;

    #[ORM\Column(nullable: true)]
    private ?int $NotId = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateArch = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateNotif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SrceName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SrceSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $SrceLastUpd = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NativeFormat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ServerName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Rem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Author = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $SeanceId = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateSeance = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGrpId(): ?int
    {
        return $this->GrpId;
    }

    public function setGrpId(?int $GrpId): static
    {
        $this->GrpId = $GrpId;

        return $this;
    }

    public function getNotId(): ?int
    {
        return $this->NotId;
    }

    public function setNotId(?int $NotId): static
    {
        $this->NotId = $NotId;

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

    public function getDateNotif(): ?\DateTime
    {
        return $this->DateNotif;
    }

    public function setDateNotif(?\DateTime $DateNotif): static
    {
        $this->DateNotif = $DateNotif;

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

    public function getSrceSize(): ?string
    {
        return $this->SrceSize;
    }

    public function setSrceSize(?string $SrceSize): static
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

    public function getServerName(): ?string
    {
        return $this->ServerName;
    }

    public function setServerName(?string $ServerName): static
    {
        $this->ServerName = $ServerName;

        return $this;
    }

    public function getRem(): ?string
    {
        return $this->Rem;
    }

    public function setRem(?string $Rem): static
    {
        $this->Rem = $Rem;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->Author;
    }

    public function setAuthor(?string $Author): static
    {
        $this->Author = $Author;

        return $this;
    }

    public function getSeanceId(): ?string
    {
        return $this->SeanceId;
    }

    public function setSeanceId(?string $SeanceId): static
    {
        $this->SeanceId = $SeanceId;

        return $this;
    }

    public function getDateSeance(): ?\DateTime
    {
        return $this->DateSeance;
    }

    public function setDateSeance(?\DateTime $DateSeance): static
    {
        $this->DateSeance = $DateSeance;

        return $this;
    }
}
