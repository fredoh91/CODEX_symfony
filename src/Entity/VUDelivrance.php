<?php

// namespace App\Codex\Entity;
namespace App\Entity;

// use App\Codex\Repository\VUDelivranceRepository;
use App\Repository\VUDelivranceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VUDelivranceRepository::class)]
class VUDelivrance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 8, nullable: true)]
    private ?string $codeVU = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $codeDelivrance = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $libLong = null;

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

    public function getCodeDelivrance(): ?int
    {
        return $this->codeDelivrance;
    }

    public function setCodeDelivrance(?int $codeDelivrance): self
    {
        $this->codeDelivrance = $codeDelivrance;

        return $this;
    }

    public function getLibLong(): ?string
    {
        return $this->libLong;
    }

    public function setLibLong(?string $libLong): self
    {
        $this->libLong = $libLong;

        return $this;
    }
}
