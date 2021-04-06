<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *@ApiResource()
 * @ORM\Table(name="contenu", indexes={@ORM\Index(name="contenu_album_fk", columns={"IDALBUM"}), @ORM\Index(name="contenu_morceau_fk", columns={"IDMORCEAU"})})
 * @ORM\Entity
 */
class Contenu
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
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="ID")
     * })
     */
    private $idalbum;

    /**
     * @var \Morceau
     *
     * @ORM\ManyToOne(targetEntity="Morceau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMORCEAU", referencedColumnName="ID")
     * })
     */
    private $idmorceau;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdmorceau(): ?Morceau
    {
        return $this->idmorceau;
    }

    public function setIdmorceau(?Morceau $idmorceau): self
    {
        $this->idmorceau = $idmorceau;

        return $this;
    }


}
