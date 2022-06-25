<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
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
    private $livNumBon;

    /**
     * @ORM\Column(type="date")
     */
    private $livDate;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $liveEtat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livAdresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivNumBon(): ?int
    {
        return $this->livNumBon;
    }

    public function setLivNumBon(int $livNumBon): self
    {
        $this->livNumBon = $livNumBon;

        return $this;
    }

    public function getLivDate(): ?\DateTimeInterface
    {
        return $this->livDate;
    }

    public function setLivDate(\DateTimeInterface $livDate): self
    {
        $this->livDate = $livDate;

        return $this;
    }

    public function getLiveEtat(): ?string
    {
        return $this->liveEtat;
    }

    public function setLiveEtat(string $liveEtat): self
    {
        $this->liveEtat = $liveEtat;

        return $this;
    }

    public function getLivAdresse(): ?string
    {
        return $this->livAdresse;
    }

    public function setLivAdresse(string $livAdresse): self
    {
        $this->livAdresse = $livAdresse;

        return $this;
    }
}
