<?php

namespace App\Entity;

use App\Repository\FournisseursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseursRepository::class)
 */
class Fournisseurs
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
    private $fouNom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fouVille;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fouPays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fouAdresse;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $fouCp;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fouMail;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fouNomContact;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fouContactPhone;

    /**
     * @ORM\Column(type="string")
     */
    private $fouType;

    /**
     * @ORM\OneToMany(targetEntity=Produits::class, mappedBy="Fournisseur")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFouNom(): ?string
    {
        return $this->fouNom;
    }

    public function setFouNom(string $fouNom): self
    {
        $this->fouNom = $fouNom;

        return $this;
    }

    public function getFouVille(): ?string
    {
        return $this->fouVille;
    }

    public function setFouVille(string $fouVille): self
    {
        $this->fouVille = $fouVille;

        return $this;
    }

    public function getFouPays(): ?string
    {
        return $this->fouPays;
    }

    public function setFouPays(string $fouPays): self
    {
        $this->fouPays = $fouPays;

        return $this;
    }

    public function getFouAdresse(): ?string
    {
        return $this->fouAdresse;
    }

    public function setFouAdresse(string $fouAdresse): self
    {
        $this->fouAdresse = $fouAdresse;

        return $this;
    }

    public function getFouCp(): ?string
    {
        return $this->fouCp;
    }

    public function setFouCp(string $fouCp): self
    {
        $this->fouCp = $fouCp;

        return $this;
    }

    public function getFouMail(): ?string
    {
        return $this->fouMail;
    }

    public function setFouMail(string $fouMail): self
    {
        $this->fouMail = $fouMail;

        return $this;
    }

    public function getFouNomContact(): ?string
    {
        return $this->fouNomContact;
    }

    public function setFouNomContact(string $fouNomContact): self
    {
        $this->fouNomContact = $fouNomContact;

        return $this;
    }

    public function getFouContactPhone(): ?string
    {
        return $this->fouContactPhone;
    }

    public function setFouContactPhone(string $fouContactPhone): self
    {
        $this->fouContactPhone = $fouContactPhone;

        return $this;
    }

    public function getFouType(): ?string
    {
        return $this->fouType;
    }

    public function setFouType(int $fouType): self
    {
        $this->fouType = $fouType;

        return $this;
    }

    /**
     * @return Collection<int, Produits>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produits $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setFournisseur($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getFournisseur() === $this) {
                $produit->setFournisseur(null);
            }
        }

        return $this;
    }
}
