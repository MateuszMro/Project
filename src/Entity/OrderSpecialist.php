<?php

namespace App\Entity;

use App\Repository\OrderSpecialistRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderSpecialistRepository::class)]
class OrderSpecialist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $surname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(nullable: true)]
    private ?int $productId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $visitNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $visitDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentsOrder = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numberPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orderDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $paymentStatus = null;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getVisitNumber(): ?string
    {
        return $this->visitNumber;
    }

    public function setVisitNumber(?string $visitNumber): static
    {
        $this->visitNumber = $visitNumber;

        return $this;
    }

    public function getVisitDate(): ?string
    {
        return $this->visitDate;
    }

    public function setVisitDate(?string $visitDate): static
    {
        $this->visitDate = $visitDate;

        return $this;
    }

    public function getCommentsOrder(): ?string
    {
        return $this->commentsOrder;
    }

    public function setCommentsOrder(?string $commentsOrder): static
    {
        $this->commentsOrder = $commentsOrder;

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

    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    public function setOrderDate(?string $orderDate): static
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(?string $paymentStatus): static
    {
        $this->paymentStatus = $paymentStatus;

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
