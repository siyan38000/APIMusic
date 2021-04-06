<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *@ApiResource()
 * @ORM\Table(name="vente", uniqueConstraints={@ORM\UniqueConstraint(name="vente_uq", columns={"IDALBUM", "MOIS", "ANNEE"})}, indexes={@ORM\Index(name="IDX_888A2A4CD0D8FC40", columns={"IDALBUM"})})
 * @ORM\Entity
 */
class Vente
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
     * @var int
     *
     * @ORM\Column(name="MOIS", type="integer", nullable=false)
     */
    private $mois;

    /**
     * @var int
     *
     * @ORM\Column(name="ANNEE", type="integer", nullable=false)
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="NBVENTES", type="integer", nullable=false)
     */
    private $nbventes;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="ID")
     * })
     */
    private $idalbum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?int
    {
        return $this->mois;
    }

    public function setMois(int $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getNbventes(): ?int
    {
        return $this->nbventes;
    }

    public function setNbventes(int $nbventes): self
    {
        $this->nbventes = $nbventes;

        return $this;
    }

    public function getIdalbum(): ?Album
    {
        return $this->idalbum;
    }

    public function setIdalbum(?Album $idalbum): self
    {
        $this->idalbum = $idalbum;

        return $this;
    }


}
