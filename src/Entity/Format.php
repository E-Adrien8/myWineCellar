<?php

namespace App\Entity;

use App\Repository\FormatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormatRepository::class)]
class Format
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bouteille = null;

    #[ORM\Column(length: 255)]
    private ?string $magnum = null;

    #[ORM\Column(length: 255)]
    private ?string $jéroboam = null;

    #[ORM\Column(length: 255)]
    private ?string $réhoboam = null;

    #[ORM\Column(length: 255)]
    private ?string $mathusalem = null;

    #[ORM\Column(length: 255)]
    private ?string $salmanazar = null;

    #[ORM\Column(length: 255)]
    private ?string $balthazar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBouteille(): ?string
    {
        return $this->bouteille;
    }

    public function setBouteille(string $bouteille): self
    {
        $this->bouteille = $bouteille;

        return $this;
    }

    public function getMagnum(): ?string
    {
        return $this->magnum;
    }

    public function setMagnum(string $magnum): self
    {
        $this->magnum = $magnum;

        return $this;
    }

    public function getJéroboam(): ?string
    {
        return $this->jéroboam;
    }

    public function setJéroboam(string $jéroboam): self
    {
        $this->jéroboam = $jéroboam;

        return $this;
    }

    public function getRéhoboam(): ?string
    {
        return $this->réhoboam;
    }

    public function setRéhoboam(string $réhoboam): self
    {
        $this->réhoboam = $réhoboam;

        return $this;
    }

    public function getMathusalem(): ?string
    {
        return $this->mathusalem;
    }

    public function setMathusalem(string $mathusalem): self
    {
        $this->mathusalem = $mathusalem;

        return $this;
    }

    public function getSalmanazar(): ?string
    {
        return $this->salmanazar;
    }

    public function setSalmanazar(string $salmanazar): self
    {
        $this->salmanazar = $salmanazar;

        return $this;
    }

    public function getBalthazar(): ?string
    {
        return $this->balthazar;
    }

    public function setBalthazar(string $balthazar): self
    {
        $this->balthazar = $balthazar;

        return $this;
    }
}
