<?php

namespace App\Entity;

use App\Repository\MOCATORDocumentHTMLRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

#[ORM\Entity(repositoryClass: MOCATORDocumentHTMLRepository::class)]
#[Index(name: "idx_doc_id", fields: ["DocId"])]
#[Index(name: "idx_h_name", fields: ["HName"])]
class MOCATORDocumentHTML
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $HdocId = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $SpecId = null;

    #[ORM\Column(nullable: true)]
    private ?int $DocId = null;

    #[ORM\Column(nullable: true)]
    private ?int $TypId = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $HName = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $DateConv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHdocId(): ?int
    {
        return $this->HdocId;
    }

    public function setHdocId(?int $HdocId): static
    {
        $this->HdocId = $HdocId;

        return $this;
    }

    public function getSpecId(): ?string
    {
        return $this->SpecId;
    }

    public function setSpecId(?string $SpecId): static
    {
        $this->SpecId = $SpecId;

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

    public function getTypId(): ?int
    {
        return $this->TypId;
    }

    public function setTypId(?int $TypId): static
    {
        $this->TypId = $TypId;

        return $this;
    }

    public function getHName(): ?string
    {
        return $this->HName;
    }

    public function setHName(?string $HName): static
    {
        $this->HName = $HName;

        return $this;
    }

    public function getDateConv(): ?\DateTime
    {
        return $this->DateConv;
    }

    public function setDateConv(?\DateTime $DateConv): static
    {
        $this->DateConv = $DateConv;

        return $this;
    }
}
