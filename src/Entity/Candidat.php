<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatRepository::class)]
class Candidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $nom = null;

    #[ORM\Column(length: 40)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '2')]
    private ?string $note = null;

    #[ORM\Column(nullable: true)]
    private ?int $resultat = null;

    #[ORM\Column(nullable: true)]
    private ?int $npromo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    public function setResultat(?int $resultat): static
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getNpromo(): ?int
    {
        return $this->npromo;
    }

    public function setNpromo(?int $npromo): static
    {
        $this->npromo = $npromo;

        return $this;
    }
}