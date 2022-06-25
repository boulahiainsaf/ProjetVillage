<?php

namespace App\Entity;

use App\Repository\PosteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PosteRepository::class)
 */
class Poste
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $posLibelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosLibelle(): ?string
    {
        return $this->posLibelle;
    }

    public function setPosLibelle(string $posLibelle): self
    {
        $this->posLibelle = $posLibelle;

        return $this;
    }
}
