<?php

namespace App\Entity;

use App\Repository\AvisPresidentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\DossierSuspension;

/**
 * @ORM\Entity(repositoryClass=AvisPresidentRepository::class)
 */
class AvisPresident
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
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @var dossierSuspension
     * 
     * Assert\Valid()
     * @Assert\Type(type="App\Entity\DossierSuspension")
     * 
     * @ORM\OneToOne(targetEntity=DossierSuspension::class ,cascade = {"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dossierSuspension;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $dossier_suspension_id;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDate(): ?\DatetimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDossierSuspension(): ?DossierSuspension
    {
        return $this->dossierSuspension;
    }

    public function setDossierSuspension(?DossierSuspension $dossierSuspension): self
    {
        $this->dossierSuspension = $dossierSuspension;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDossierSuspensionId(): ?int
    {
        return $this->dossier_suspension_id;
    }

    public function setDossierSuspensionId(int $dossier_suspension_id): self
    {
        $this->dossier_suspension_id = $dossier_suspension_id;

        return $this;
    }
}
