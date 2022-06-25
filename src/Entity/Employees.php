<?php

namespace App\Entity;

use App\Repository\EmployeesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeesRepository::class)
 */
class Employees
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
    private $empNom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $empPrenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $empAdresse;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $empCp;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $empVille;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $empMail;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $empPhone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $empMotPass;

    /**
     * @ORM\Column(type="date")
     */
    private $empDatEmbauche;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpNom(): ?string
    {
        return $this->empNom;
    }

    public function setEmpNom(string $empNom): self
    {
        $this->empNom = $empNom;

        return $this;
    }

    public function getEmpPrenom(): ?string
    {
        return $this->empPrenom;
    }

    public function setEmpPrenom(string $empPrenom): self
    {
        $this->empPrenom = $empPrenom;

        return $this;
    }

    public function getEmpAdresse(): ?string
    {
        return $this->empAdresse;
    }

    public function setEmpAdresse(string $empAdresse): self
    {
        $this->empAdresse = $empAdresse;

        return $this;
    }

    public function getEmpCp(): ?string
    {
        return $this->empCp;
    }

    public function setEmpCp(string $empCp): self
    {
        $this->empCp = $empCp;

        return $this;
    }

    public function getEmpVille(): ?string
    {
        return $this->empVille;
    }

    public function setEmpVille(string $empVille): self
    {
        $this->empVille = $empVille;

        return $this;
    }

    public function getEmpMail(): ?string
    {
        return $this->empMail;
    }

    public function setEmpMail(string $empMail): self
    {
        $this->empMail = $empMail;

        return $this;
    }

    public function getEmpPhone(): ?string
    {
        return $this->empPhone;
    }

    public function setEmpPhone(string $empPhone): self
    {
        $this->empPhone = $empPhone;

        return $this;
    }

    public function getEmpMotPass(): ?string
    {
        return $this->empMotPass;
    }

    public function setEmpMotPass(string $empMotPass): self
    {
        $this->empMotPass = $empMotPass;

        return $this;
    }

    public function getEmpDatEmbauche(): ?\DateTimeInterface
    {
        return $this->empDatEmbauche;
    }

    public function setEmpDatEmbauche(\DateTimeInterface $empDatEmbauche): self
    {
        $this->empDatEmbauche = $empDatEmbauche;

        return $this;
    }
}
