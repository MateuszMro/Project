<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Login = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(length: 255)]
    private ?string $Role = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ConfirmCode = null;

    #[ORM\Column(length: 255)]
    private ?string $ConfirmAccount = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): static
    {
        $this->Login = $Login;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): static
    {
        $this->Password = password_hash($Password, PASSWORD_BCRYPT);

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(string $Role): static
    {
        $this->Role = $Role;

        return $this;
    }

    public function getConfirmCode(): ?string
    {
        return $this->ConfirmCode;
    }

    public function setConfirmCode(?string $ConfirmCode): static
    {
        $this->ConfirmCode = $ConfirmCode;

        return $this;
    }

    public function getConfirmAccount(): ?string
    {
        return $this->ConfirmAccount;
    }

    public function setConfirmAccount(string $ConfirmAccount): static
    {
        $this->ConfirmAccount = $ConfirmAccount;

        return $this;
    }
}
