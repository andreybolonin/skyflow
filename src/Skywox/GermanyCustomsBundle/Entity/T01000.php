<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T01000
 */
class T01000
{
    /**
     * @var integer
     */
    private $AAA_ID_des_Kommentar;

    /**
     * @var string
     */
    private $AAB_Kommentar;


    /**
     * Set AAA_ID_des_Kommentar
     *
     * @param integer $aAAIDDesKommentar
     * @return T01000
     */
    public function setAAAIDDesKommentar($aAAIDDesKommentar)
    {
        $this->AAA_ID_des_Kommentar = $aAAIDDesKommentar;

        return $this;
    }

    /**
     * Get AAA_ID_des_Kommentar
     *
     * @return integer 
     */
    public function getAAAIDDesKommentar()
    {
        return $this->AAA_ID_des_Kommentar;
    }

    /**
     * Set AAB_Kommentar
     *
     * @param string $aABKommentar
     * @return T01000
     */
    public function setAABKommentar($aABKommentar)
    {
        $this->AAB_Kommentar = $aABKommentar;

        return $this;
    }

    /**
     * Get AAB_Kommentar
     *
     * @return string 
     */
    public function getAABKommentar()
    {
        return $this->AAB_Kommentar;
    }
}
