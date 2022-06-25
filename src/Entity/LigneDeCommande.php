<?php

namespace App\Entity;

use App\Repository\LigneDeCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneDeCommandeRepository::class)
 */
class LigneDeCommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $licoQty;

    /**
     * @ORM\Column(type="integer")
     */
    private $licoUniPrix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLicoQty(): ?int
    {
        return $this->licoQty;
    }

    public function setLicoQty(int $licoQty): self
    {
        $this->licoQty = $licoQty;

        return $this;
    }

    public function getLicoUniPrix(): ?int
    {
        return $this->licoUniPrix;
    }

    public function setLicoUniPrix(int $licoUniPrix): self
    {
        $this->licoUniPrix = $licoUniPrix;

        return $this;
    }
}
