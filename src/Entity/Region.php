<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionRepository::class)]
class Region
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $bordeaux = null;

    #[ORM\Column(length: 50)]
    private ?string $sud_ouest = null;

    #[ORM\Column(length: 50)]
    private ?string $valle_de_loire = null;

    #[ORM\Column(length: 50)]
    private ?string $languedoc_rousillon = null;

    #[ORM\Column(length: 50)]
    private ?string $vallée_du_rhone = null;

    #[ORM\Column(length: 50)]
    private ?string $provence = null;

    #[ORM\Column(length: 15)]
    private ?string $corse = null;

    #[ORM\Column(length: 15)]
    private ?string $savoie = null;

    #[ORM\Column(length: 50)]
    private ?string $beaujolais = null;

    #[ORM\Column(length: 20)]
    private ?string $bourgogne = null;

    #[ORM\Column(length: 10)]
    private ?string $jura = null;

    #[ORM\Column(length: 15)]
    private ?string $alsace = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBordeaux(): ?string
    {
        return $this->bordeaux;
    }

    public function setBordeaux(string $bordeaux): self
    {
        $this->bordeaux = $bordeaux;

        return $this;
    }

    public function getSudOuest(): ?string
    {
        return $this->sud_ouest;
    }

    public function setSudOuest(string $sud_ouest): self
    {
        $this->sud_ouest = $sud_ouest;

        return $this;
    }

    public function getValleDeLoire(): ?string
    {
        return $this->valle_de_loire;
    }

    public function setValleDeLoire(string $valle_de_loire): self
    {
        $this->valle_de_loire = $valle_de_loire;

        return $this;
    }

    public function getLanguedocRousillon(): ?string
    {
        return $this->languedoc_rousillon;
    }

    public function setLanguedocRousillon(string $languedoc_rousillon): self
    {
        $this->languedoc_rousillon = $languedoc_rousillon;

        return $this;
    }

    public function getValléeDuRhone(): ?string
    {
        return $this->vallée_du_rhone;
    }

    public function setValléeDuRhone(string $vallée_du_rhone): self
    {
        $this->vallée_du_rhone = $vallée_du_rhone;

        return $this;
    }

    public function getProvence(): ?string
    {
        return $this->provence;
    }

    public function setProvence(string $provence): self
    {
        $this->provence = $provence;

        return $this;
    }

    public function getCorse(): ?string
    {
        return $this->corse;
    }

    public function setCorse(string $corse): self
    {
        $this->corse = $corse;

        return $this;
    }

    public function getSavoie(): ?string
    {
        return $this->savoie;
    }

    public function setSavoie(string $savoie): self
    {
        $this->savoie = $savoie;

        return $this;
    }

    public function getBeaujolais(): ?string
    {
        return $this->beaujolais;
    }

    public function setBeaujolais(string $beaujolais): self
    {
        $this->beaujolais = $beaujolais;

        return $this;
    }

    public function getBourgogne(): ?string
    {
        return $this->bourgogne;
    }

    public function setBourgogne(string $bourgogne): self
    {
        $this->bourgogne = $bourgogne;

        return $this;
    }

    public function getJura(): ?string
    {
        return $this->jura;
    }

    public function setJura(string $jura): self
    {
        $this->jura = $jura;

        return $this;
    }

    public function getAlsace(): ?string
    {
        return $this->alsace;
    }

    public function setAlsace(string $alsace): self
    {
        $this->alsace = $alsace;

        return $this;
    }
}
