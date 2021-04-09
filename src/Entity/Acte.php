<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Patient;
use App\Repository\ActeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActeRepository::class)
 */
class Acte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motif;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=patient::class, inversedBy="actes")
     */
    private $patient;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="actes")
     */
    private $gestionnaire;

    /**
     * @ORM\OneToMany(targetEntity=Facture::class, mappedBy="acte", 
     * orphanRemoval=true)
     */
    private $factures;

    /**
     * @ORM\OneToOne(targetEntity=Facture::class, mappedBy="acte", cascade={"persist", "remove"})
     */
    private $facture;

    public function __construct()
    {
        $this->factures = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

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

    /**
     * @return Collection|Facture[]
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures[] = $facture;
            $facture->setActe($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getActe() === $this) {
                $facture->setActe(null);
            }
        }

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        // unset the owning side of the relation if necessary
        if ($facture === null && $this->facture !== null) {
            $this->facture->setActe(null);
        }

        // set the owning side of the relation if necessary
        if ($facture !== null && $facture->getActe() !== $this) {
            $facture->setActe($this);
        }

        $this->facture = $facture;

        return $this;
    }

}
