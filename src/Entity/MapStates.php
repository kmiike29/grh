<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapStatesRepository")
 */
class MapStates
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomStates;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapPays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStates(): ?string
    {
        return $this->nomStates;
    }

    public function setNomStates(string $nomStates): self
    {
        $this->nomStates = $nomStates;

        return $this;
    }

    public function getPays(): ?MapPays
    {
        return $this->pays;
    }

    public function setPays(?MapPays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
