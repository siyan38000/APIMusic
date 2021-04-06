<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *@ApiResource()
 * @ORM\Table(name="artiste")
 * @ORM\Entity
 */
class Artiste
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="ESTCHANTEUR", type="boolean", nullable=false)
     */
    private $estchanteur = '0';

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

    public function getEstchanteur(): ?bool
    {
        return $this->estchanteur;
    }

    public function setEstchanteur(bool $estchanteur): self
    {
        $this->estchanteur = $estchanteur;

        return $this;
    }


}
