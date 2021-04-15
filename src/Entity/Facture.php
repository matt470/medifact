<?php

namespace App\Entity;

use App\Entity\Patient;
use App\Entity\Acte;
use App\Entity\User;
use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $descriptif;

    /**
     * @ORM\Column(type="float")
     */
    private $tarif;

    /**
     * @ORM\Column(type="float")
     */
    private $paye;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $reste;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=patient::class, inversedBy="factures")
     */
    private $patient;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="factures")
     */
    private $gestionnaire;

    /**
     * @ORM\OneToOne(targetEntity=Acte::class, inversedBy="facture", cascade={"persist", "remove"})
     */
    private $acte;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getPaye(): ?float
    {
        return $this->paye;
    }

    public function setPaye(float $paye): self
    {
        $this->paye = $paye;

        return $this;
    }

    public function getReste(): ?float
    {
        return $this->reste;
    }

    public function setReste(float $reste): self
    {
        $this->reste = $reste;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPatient(): ?patient
    {
        return $this->patient;
    }

    public function setPatient(?patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    public function getGestionnaire(): ?user
    {
        return $this->gestionnaire;
    }

    public function setGestionnaire(?user $gestionnaire): self
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    public function getActe(): ?Acte
    {
        return $this->acte;
    }

    public function setActe(?Acte $acte): self
    {
        $this->acte = $acte;

        return $this;
    }

}
