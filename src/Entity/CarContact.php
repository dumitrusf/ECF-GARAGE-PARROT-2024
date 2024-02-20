<?php

namespace App\Entity;

use App\Repository\CarContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CarContactRepository::class)]
#[Broadcast]
class CarContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'acces_carContact')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cars $cars = null;

    #[ORM\ManyToOne(inversedBy: 'acces_carContacts')]
    private ?Users $users = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $sent_on = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCars(): ?Cars
    {
        return $this->cars;
    }

    public function setCars(?Cars $cars): static
    {
        $this->cars = $cars;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): static
    {
        $this->users = $users;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getSentOn(): ?\DateTimeImmutable
    {
        return $this->sent_on;
    }

    public function setSentOn(\DateTimeImmutable $sent_on): static
    {
        $this->sent_on = $sent_on;

        return $this;
    }
}
