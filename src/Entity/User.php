<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cliNom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cliPrenom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cliAdresse;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $cilCp;

    /**
     * @ORM\Column(type="integer")
     */
    private $cliPhone;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cliInscriDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $cliType;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cliRef;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $cliCoefficient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getCliNom(): ?string
    {
        return $this->cliNom;
    }

    public function setCliNom(string $cliNom): self
    {
        $this->cliNom = $cliNom;

        return $this;
    }

    public function getCliPrenom(): ?string
    {
        return $this->cliPrenom;
    }

    public function setCliPrenom(string $cliPrenom): self
    {
        $this->cliPrenom = $cliPrenom;

        return $this;
    }

    public function getCliAdresse(): ?string
    {
        return $this->cliAdresse;
    }

    public function setCliAdresse(string $cliAdresse): self
    {
        $this->cliAdresse = $cliAdresse;

        return $this;
    }

    public function getCilCp(): ?string
    {
        return $this->cilCp;
    }

    public function setCilCp(string $cilCp): self
    {
        $this->cilCp = $cilCp;

        return $this;
    }

    public function getCliPhone(): ?int
    {
        return $this->cliPhone;
    }

    public function setCliPhone(int $cliPhone): self
    {
        $this->cliPhone = $cliPhone;

        return $this;
    }

    public function getCliInscriDate(): ?\DateTimeInterface
    {
        return $this->cliInscriDate;
    }

    public function setCliInscriDate(\DateTimeInterface $cliInscriDate): self
    {
        $this->cliInscriDate = $cliInscriDate;

        return $this;
    }

    public function getCliType(): ?int
    {
        return $this->cliType;
    }

    public function setCliType(int $cliType): self
    {
        $this->cliType = $cliType;

        return $this;
    }

    public function getCliRef(): ?string
    {
        return $this->cliRef;
    }

    public function setCliRef(string $cliRef): self
    {
        $this->cliRef = $cliRef;

        return $this;
    }

    public function getCliCoefficient(): ?string
    {
        return $this->cliCoefficient;
    }

    public function setCliCoefficient(string $cliCoefficient): self
    {
        $this->cliCoefficient = $cliCoefficient;

        return $this;
    }
}
