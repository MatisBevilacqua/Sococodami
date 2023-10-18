<?php

namespace App\Entity;

use App\Repository\StampImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StampImageRepository::class)]
class StampImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $stamp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getStamp(): ?int
    {
        return $this->stamp;
    }

    public function setStamp(int $stamp): static
    {
        $this->stamp = $stamp;

        return $this;
    }
}
