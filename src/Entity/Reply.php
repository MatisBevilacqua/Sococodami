<?php

namespace App\Entity;

use App\Repository\ReplyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $response = null;

    #[ORM\Column(length: 255)]
    private ?string $response_content = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $response_date = null;

    #[ORM\Column(length: 255)]
    private ?string $response_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponse(): ?int
    {
        return $this->response;
    }

    public function setResponse(int $response): static
    {
        $this->response = $response;

        return $this;
    }

    public function getResponseContent(): ?string
    {
        return $this->response_content;
    }

    public function setResponseContent(string $response_content): static
    {
        $this->response_content = $response_content;

        return $this;
    }

    public function getResponseDate(): ?\DateTimeInterface
    {
        return $this->response_date;
    }

    public function setResponseDate(\DateTimeInterface $response_date): static
    {
        $this->response_date = $response_date;

        return $this;
    }

    public function getResponseUser(): ?string
    {
        return $this->response_user;
    }

    public function setResponseUser(string $response_user): static
    {
        $this->response_user = $response_user;

        return $this;
    }
}
