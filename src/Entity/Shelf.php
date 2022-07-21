<?php

namespace App\Entity;

use App\Repository\ShelfRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShelfRepository::class)]
class Shelf
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user = null;

    #[ORM\Column]
    private ?int $bottle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getBottle(): ?int
    {
        return $this->bottle;
    }

    public function setBottle(int $bottle): self
    {
        $this->bottle = $bottle;

        return $this;
    }
}
