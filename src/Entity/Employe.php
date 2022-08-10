<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
/**
 * @ApiResource(
 *      normalizationContext={"groups"={"user:read"}},
 *      denormalizationContext={"groups"={"user:write"}}
 * )
 */
class Employe implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    /**
     * @Groups("user:read")
     */
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $email = null;

    #[ORM\Column]
    /**
     * @Groups("user:read")
     */
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $adresse = null;

    #[ORM\Column(length: 100)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $telephone = null;

    #[ORM\Column(length: 100)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $skype = null;

    #[ORM\Column]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?int $idville = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?\DateTimeInterface $dateEmbauche = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 2)]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?string $soldeConge = null;

    #[ORM\Column]
    /**
     * @Groups({"user:read", "user:write"})
     */
    private ?int $idposte = null;
    
    /**
     * @Groups("user:write")
     */
    private ?string $plainPassword = null;

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
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSkype(): ?string
    {
        return $this->skype;
    }

    public function setSkype(string $skype): self
    {
        $this->skype = $skype;

        return $this;
    }

    public function getIdville(): ?int
    {
        return $this->idville;
    }

    public function setIdville(?int $idville): self
    {
        $this->idville = $idville;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(\DateTimeInterface $dateEmbauche): self
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getSoldeConge(): ?string
    {
        return $this->soldeConge;
    }

    public function setSoldeConge(string $soldeConge): self
    {
        $this->soldeConge = $soldeConge;

        return $this;
    }

    public function getIdposte(): ?int
    {
        return $this->idposte;
    }

    public function setIdposte(int $idposte): self
    {
        $this->idposte = $idposte;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }
}
