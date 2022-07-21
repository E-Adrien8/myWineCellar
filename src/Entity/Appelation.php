<?php

namespace App\Entity;

use App\Repository\AppelationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppelationRepository::class)]
class Appelation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $graves = null;

    #[ORM\Column(length: 10)]
    private ?string $pessac_léognan = null;

    #[ORM\Column(length: 10)]
    private ?string $médoc = null;

    #[ORM\Column(length: 10)]
    private ?string $cote_de_blaye = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGraves(): ?string
    {
        return $this->graves;
    }

    public function setGraves(string $graves): self
    {
        $this->graves = $graves;

        return $this;
    }

    public function getPessacLéognan(): ?string
    {
        return $this->pessac_léognan;
    }

    public function setPessacLéognan(string $pessac_léognan): self
    {
        $this->pessac_léognan = $pessac_léognan;

        return $this;
    }

    public function getMédoc(): ?string
    {
        return $this->médoc;
    }

    public function setMédoc(string $médoc): self
    {
        $this->médoc = $médoc;

        return $this;
    }

    public function getCoteDeBlaye(): ?string
    {
        return $this->cote_de_blaye;
    }

    public function setCoteDeBlaye(string $cote_de_blaye): self
    {
        $this->cote_de_blaye = $cote_de_blaye;

        return $this;
    }
}
