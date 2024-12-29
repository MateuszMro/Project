<?php

namespace App\Entity;

use App\Repository\ReturnProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReturnProductRepository::class)]
class ReturnProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orderNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $surname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numberPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reasonReturn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numberBankAccount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $createReturn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numberReturn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $returnStatus = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adminComment = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id):static
    {
        $this->id = $id;
        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): static
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getNumberPhone(): ?string
    {
        return $this->numberPhone;
    }

    public function setNumberPhone(?string $numberPhone): static
    {
        $this->numberPhone = $numberPhone;

        return $this;
    }

    public function getReasonReturn(): ?string
    {
        return $this->reasonReturn;
    }

    public function setReasonReturn(?string $reasonReturn): static
    {
        $this->reasonReturn = $reasonReturn;

        return $this;
    }

    public function getNumberBankAccount(): ?string
    {
        return $this->numberBankAccount;
    }

    public function setNumberBankAccount(?string $numberBankAccount): static
    {
        $this->numberBankAccount = $numberBankAccount;

        return $this;
    }

    public function getCreateReturn(): ?string
    {
        return $this->createReturn;
    }

    public function setCreateReturn(?string $createReturn): static
    {
        $this->createReturn = $createReturn;

        return $this;
    }

    public function getNumberReturn(): ?string
    {
        return $this->numberReturn;
    }

    public function setNumberReturn(?string $numberReturn): static
    {
        $this->numberReturn = $numberReturn;

        return $this;
    }

    public function getReturnStatus(): ?string
    {
        return $this->returnStatus;
    }

    public function setReturnStatus(?string $returnStatus): static
    {
        $this->returnStatus = $returnStatus;

        return $this;
    }

    public function getAdminComment(): ?string
    {
        return $this->adminComment;
    }

    public function setAdminComment(?string $adminComment): static
    {
        $this->adminComment = $adminComment;

        return $this;
    }
}
