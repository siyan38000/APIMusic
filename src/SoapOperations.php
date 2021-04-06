<?php

namespace App\Soap;

use Doctrine\Persistence\ManagerRegistry;

/**
 * Class SoapOperations
 * @package App\Soap
 */
class SoapOperations
{
    private $doct;
    /**
     * Récupère l'album dont on connait l'id
     * @return \App\Entity\Album Le secteur avec l'id et le libellé
     */
    public function getAlbum($alb) {
        $album = $this->doct->getRepository(\App\Entity\Album::class)->find($alb->id);
        $obj = new Album($album->getId(), $album->getTitre(), $album->getGenre(), $album->getDatesortie(), $album->getPrix(), $album->getIdartiste(), $album->getIdgroupe());
        return $obj;
    }
}
?>