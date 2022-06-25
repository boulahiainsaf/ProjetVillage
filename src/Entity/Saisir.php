<?php

namespace App\Entity;

use App\Repository\SaisirRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SaisirRepository::class)
 */
class Saisir
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
    private $saiDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $saiDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSaiDate(): ?\DateTimeInterface
    {
        return $this->saiDate;
    }

    public function setSaiDate(\DateTimeInterface $saiDate): self
    {
        $this->saiDate = $saiDate;

        return $this;
    }

    public function getSaiDescription(): ?string
    {
        return $this->saiDescription;
    }

    public function setSaiDescription(string $saiDescription): self
    {
        $this->saiDescription = $saiDescription;

        return $this;
    }
}
