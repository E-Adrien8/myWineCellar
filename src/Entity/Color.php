<?php

namespace App\Entity;

use App\Repository\ColorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ColorRepository::class)]
class Color
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $rouge = null;

    #[ORM\Column(length: 10)]
    private ?string $blanc = null;

    #[ORM\Column(length: 10)]
    private ?string $rosé = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRouge(): ?string
    {
        return $this->rouge;
    }

    public function setRouge(string $rouge): self
    {
        $this->rouge = $rouge;

        return $this;
    }

    public function getBlanc(): ?string
    {
        return $this->blanc;
    }

    public function setBlanc(string $blanc): self
    {
        $this->blanc = $blanc;

        return $this;
    }

    public function getRosé(): ?string
    {
        return $this->rosé;
    }

    public function setRosé(string $rosé): self
    {
        $this->rosé = $rosé;

        return $this;
    }
}
