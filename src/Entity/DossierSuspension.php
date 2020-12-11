<?php

namespace App\Entity;

use App\Repository\DossierSuspensionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\AvisPresident;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DossierSuspensionRepository::class)
 */
class DossierSuspension
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_depot;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sous_dossier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $provision;

    /**
     * @ORM\Column(type="text")
     */
    private $decision_attaque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ref_dos;

    /**
     * @ORM\Column(type="text")
     */
    private $demandeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_demandeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_demandeur;

    /**
     * @ORM\Column(type="text")
     */
    private $defendeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_defendeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_defendeur;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $signification;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $depot_signification;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $depot_memoire;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $notif_memoire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ref_ordonnance;

     /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $decision_premier_president;

     /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_decision;

     /**
     * @ORM\Column(type="datetime")
     */
    private $date_decision;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var avisPresident
     * 
     * @Assert\Type(type="App\Entity\AvisPresident")
     * 
     */
    private $avisPresident;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->date_depot;
    }

    public function setDateDepot(\DateTimeInterface $date_depot): self
    {
        $this->date_depot = $date_depot;

        return $this;
    }

    public function getSousDossier(): ?string
    {
        return $this->sous_dossier;
    }

    public function setSousDossier(string $sous_dossier): self
    {
        $this->sous_dossier = $sous_dossier;

        return $this;
    }

    public function getProvision(): ?string
    {
        return $this->provision;
    }

    public function setProvision(?string $provision): self
    {
        $this->provision = $provision;

        return $this;
    }

    public function getDecisionAttaque(): ?string
    {
        return $this->decision_attaque;
    }

    public function setDecisionAttaque(string $decision_attaque): self
    {
        $this->decision_attaque = $decision_attaque;

        return $this;
    }

    public function getRefDos(): ?string
    {
        return $this->ref_dos;
    }

    public function setRefDos(string $ref_dos): self
    {
        $this->ref_dos = $ref_dos;

        return $this;
    }

    public function getDemandeur(): ?string
    {
        return $this->demandeur;
    }

    public function setDemandeur(string $demandeur): self
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    public function getTelDemandeur(): ?string
    {
        return $this->tel_demandeur;
    }

    public function setTelDemandeur(?string $tel_demandeur): self
    {
        $this->tel_demandeur = $tel_demandeur;

        return $this;
    }

    public function getEmailDemandeur(): ?string
    {
        return $this->email_demandeur;
    }

    public function setEmailDemandeur(?string $email_demandeur): self
    {
        $this->email_demandeur = $email_demandeur;

        return $this;
    }

    public function getDefendeur(): ?string
    {
        return $this->defendeur;
    }

    public function setDefendeur(string $defendeur): self
    {
        $this->defendeur = $defendeur;

        return $this;
    }

    public function getTelDefendeur(): ?string
    {
        return $this->tel_defendeur;
    }

    public function setTelDefendeur(?string $tel_defendeur): self
    {
        $this->tel_defendeur = $tel_defendeur;

        return $this;
    }

    public function getEmailDefendeur(): ?string
    {
        return $this->email_defendeur;
    }

    public function setEmailDefendeur(?string $email_defendeur): self
    {
        $this->email_defendeur = $email_defendeur;

        return $this;
    }

    public function getSignification(): ?\DateTimeInterface
    {
        return $this->signification;
    }

    public function setSignification(\DateTimeInterface $signification): self
    {
        $this->signification = $signification;

        return $this;
    }

    public function getDepotSignification(): ?\DateTimeInterface
    {
        return $this->depot_signification;
    }

    public function setDepotSignification(\DateTimeInterface $depot_signification): self
    {
        $this->depot_signification = $depot_signification;

        return $this;
    }

    public function getDepotMemoire(): ?\DateTimeInterface
    {
        return $this->depot_memoire;
    }

    public function setDepotMemoire(\DateTimeInterface $depot_memoire): self
    {
        $this->depot_memoire = $depot_memoire;

        return $this;
    }

    public function getNotifMemoire(): ?\DateTimeInterface
    {
        return $this->notif_memoire;
    }

    public function setNotifMemoire(\DateTimeInterface $notif_memoire): self
    {
        $this->notif_memoire = $notif_memoire;

        return $this;
    }

    public function getRefOrdonnance(): ?string
    {
        return $this->ref_ordonnance;
    }

    public function setRefOrdonnance(?string $ref_ordonnance): self
    {
        $this->ref_ordonnance = $ref_ordonnance;

        return $this;
    }

    public function getDecisionPremierPresident(): ?string
    {
        return $this->decision_premier_president;
    }

    public function setDecisionPremierPresident(string $decision_premier_president): self
    {
        $this->decision_premier_president = $decision_premier_president;

        return $this;
    }

    public function getNumeroDecision(): ?int
    {
        return $this->numero_decision;
    }

    public function setNumeroDecision(string $numero_decision): self
    {
        $this->numero_decision = $numero_decision;

        return $this;
    }

    public function getDateDecision(): ?\DateTimeInterface
    {
        return $this->date_decision;
    }

    public function setDateDecision(\DateTimeInterface $date_decision): self
    {
        $this->date_decision = $date_decision;

        return $this;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setAvisPresident(?AvisPresident $avisPresident): self
    {
        $this->avisPresident = $avisPresident;

        return $this;
    }
    public function getAvisPresident(): ?AvisPresident
    {
        return $this->avisPresident;
    }
        
}
