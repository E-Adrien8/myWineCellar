<?php

namespace App\Entity;

use App\DBAL\Types\AppelationType;
use App\DBAL\Types\ColorType;
use App\DBAL\Types\FormatType;
use App\DBAL\Types\RegionType;
use App\Repository\BottleRepository;
use Doctrine\ORM\Mapping as ORM;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;

#[ORM\Entity(repositoryClass: BottleRepository::class)]
class Bottle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column]
    #[ORM\ManyToOne(targetEntity: Shelf::class, inversedBy: 'bottles')]
    private Shelf $shelf;

    #[ORM\Column(type: 'AppelationType')]
    #[DoctrineAssert\EnumType(entity: AppelationType::class)]
    private string $appelation;

    #[ORM\Column(type: 'RegionType')]
    #[DoctrineAssert\EnumType(entity: RegionType::class)]
    private string $region;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'ColorType')]
    #[DoctrineAssert\EnumType(entity: ColorType::class)]
    private string $color;

    #[ORM\Column(type: 'FormatType')]
    #[DoctrineAssert\EnumType(entity: FormatType::class)]
    private string $format;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShelf(): ?Shelf
    {
        return $this->shelf;
    }

    public function setShelf(?Shelf $shelf): self
    {
        $this->shelf = $shelf;

        return $this;
    }


    public function getCountry(): ?int
    {
        return $this->country;
    }

    public function setCountry(?int $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAppelation(): string
    {
        return $this->appelation;
    }

    public function setAppelation(string $appelation): void
    {
        AppelationType::assertValidChoice($appelation);
        $this->appelation = $appelation;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): void
    {
        RegionType::assertValidChoice($region);
        $this->region = $region;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        ColorType::assertValidChoice($color);
        $this->color = $color;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): void
    {
        FormatType::assertValidChoice($format);
        $this->format = $format;
    }

}
