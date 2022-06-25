<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandesRepository::class)
 */
class Commandes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $comComDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $comPayDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $comExpDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $comTypePaiement;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $comPrixTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $comDiscount;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $comFactureDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comFactureAdresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComComDate(): ?\DateTimeInterface
    {
        return $this->comComDate;
    }

    public function setComComDate(\DateTimeInterface $comComDate): self
    {
        $this->comComDate = $comComDate;

        return $this;
    }

    public function getComPayDate(): ?\DateTimeInterface
    {
        return $this->comPayDate;
    }

    public function setComPayDate(?\DateTimeInterface $comPayDate): self
    {
        $this->comPayDate = $comPayDate;

        return $this;
    }

    public function getComExpDate(): ?\DateTimeInterface
    {
        return $this->comExpDate;
    }

    public function setComExpDate(?\DateTimeInterface $comExpDate): self
    {
        $this->comExpDate = $comExpDate;

        return $this;
    }

    public function getComTypePaiement(): ?int
    {
        return $this->comTypePaiement;
    }

    public function setComTypePaiement(int $comTypePaiement): self
    {
        $this->comTypePaiement = $comTypePaiement;

        return $this;
    }

    public function getComPrixTotal(): ?float
    {
        return $this->comPrixTotal;
    }

    public function setComPrixTotal(?float $comPrixTotal): self
    {
        $this->comPrixTotal = $comPrixTotal;

        return $this;
    }

    public function getComDiscount(): ?int
    {
        return $this->comDiscount;
    }

    public function setComDiscount(?int $comDiscount): self
    {
        $this->comDiscount = $comDiscount;

        return $this;
    }

    public function getComFactureDate(): ?\DateTimeInterface
    {
        return $this->comFactureDate;
    }

    public function setComFactureDate(?\DateTimeInterface $comFactureDate): self
    {
        $this->comFactureDate = $comFactureDate;

        return $this;
    }

    public function getComFactureAdresse(): ?string
    {
        return $this->comFactureAdresse;
    }

    public function setComFactureAdresse(string $comFactureAdresse): self
    {
        $this->comFactureAdresse = $comFactureAdresse;

        return $this;
    }
}
