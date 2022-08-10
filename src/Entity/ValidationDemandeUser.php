<?php

namespace App\Entity;

use App\Repository\ValidationDemandeUserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ValidationDemandeUserRepository::class)]
class ValidationDemandeUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $iddemandeconge = null;

    #[ORM\Column]
    private ?int $idemployevalidateur = null;

    #[ORM\Column]
    private ?int $etat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIddemandeconge(): ?int
    {
        return $this->iddemandeconge;
    }

    public function setIddemandeconge(int $iddemandeconge): self
    {
        $this->iddemandeconge = $iddemandeconge;

        return $this;
    }

    public function getIdemployevalidateur(): ?int
    {
        return $this->idemployevalidateur;
    }

    public function setIdemployevalidateur(int $idemployevalidateur): self
    {
        $this->idemployevalidateur = $idemployevalidateur;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
