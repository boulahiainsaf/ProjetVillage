<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
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
    private $proLibCourt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proLibLong;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $proFouRef;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proPhoto;

    /**
     * @ORM\Column(type="integer")
     */
    private $proPriAchat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $proStock;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $proBloque;

    /**
     * @ORM\Column(type="datetime")
     */
    private $proDateAjou;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseurs::class, inversedBy="produits")
     */
    private $Fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="produits")
     */
    private $Categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProLibCourt(): ?string
    {
        return $this->proLibCourt;
    }

    public function setProLibCourt(string $proLibCourt): self
    {
        $this->proLibCourt = $proLibCourt;

        return $this;
    }

    public function getProLibLong(): ?string
    {
        return $this->proLibLong;
    }

    public function setProLibLong(?string $proLibLong): self
    {
        $this->proLibLong = $proLibLong;

        return $this;
    }

    public function getProFouRef(): ?string
    {
        return $this->proFouRef;
    }

    public function setProFouRef(string $proFouRef): self
    {
        $this->proFouRef = $proFouRef;

        return $this;
    }

    public function getProPhoto(): ?string
    {
        return $this->proPhoto;
    }

    public function setProPhoto(?string $proPhoto): self
    {
        $this->proPhoto = $proPhoto;

        return $this;
    }

    public function getProPriAchat(): ?int
    {
        return $this->proPriAchat;
    }

    public function setProPriAchat(int $proPriAchat): self
    {
        $this->proPriAchat = $proPriAchat;

        return $this;
    }

    public function getProStock(): ?int
    {
        return $this->proStock;
    }

    public function setProStock(?int $proStock): self
    {
        $this->proStock = $proStock;

        return $this;
    }

    public function getProBloque(): ?int
    {
        return $this->proBloque;
    }

    public function setProBloque(?int $proBloque): self
    {
        $this->proBloque = $proBloque;

        return $this;
    }

    public function getProDateAjou(): ?\DateTimeInterface
    {
        return $this->proDateAjou;
    }

    public function setProDateAjou(\DateTimeInterface $proDateAjou): self
    {
        $this->proDateAjou = $proDateAjou;

        return $this;
    }

    public function getFournisseur(): ?Fournisseurs
    {
        return $this->Fournisseur;
    }

    public function setFournisseur(?Fournisseurs $Fournisseur): self
    {
        $this->Fournisseur = $Fournisseur;

        return $this;
    }

    public function getCategorie(): ?Categories
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categories $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }
}
