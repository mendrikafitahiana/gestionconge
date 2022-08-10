<?php

namespace App\Entity;

use App\Repository\DemandecongeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandecongeRepository::class)]
class Demandeconge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column]
    private ?int $idnatureconge = null;

    #[ORM\Column]
    private ?int $idemploye = null;

    #[ORM\Column]
    private ?int $etat = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaires = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 2)]
    private ?string $nombrejours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getIdnatureconge(): ?int
    {
        return $this->idnatureconge;
    }

    public function setIdnatureconge(int $idnatureconge): self
    {
        $this->idnatureconge = $idnatureconge;

        return $this;
    }

    public function getIdemploye(): ?int
    {
        return $this->idemploye;
    }

    public function setIdemploye(int $idemploye): self
    {
        $this->idemploye = $idemploye;

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

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getNombrejours(): ?string
    {
        return $this->nombrejours;
    }

    public function setNombrejours(string $nombrejours): self
    {
        $this->nombrejours = $nombrejours;

        return $this;
    }
}
