<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N27020
 */
class N27020
{
    /**
     * @var integer
     */
    private $AYH_SID_der_Kontingentshinweise;

    /**
     * @var string
     */
    private $AYI_Verweis_auf_ein_Kontingent;


    /**
     * Set AYH_SID_der_Kontingentshinweise
     *
     * @param integer $aYHSIDDerKontingentshinweise
     * @return N27020
     */
    public function setAYHSIDDerKontingentshinweise($aYHSIDDerKontingentshinweise)
    {
        $this->AYH_SID_der_Kontingentshinweise = $aYHSIDDerKontingentshinweise;

        return $this;
    }

    /**
     * Get AYH_SID_der_Kontingentshinweise
     *
     * @return integer 
     */
    public function getAYHSIDDerKontingentshinweise()
    {
        return $this->AYH_SID_der_Kontingentshinweise;
    }

    /**
     * Set AYI_Verweis_auf_ein_Kontingent
     *
     * @param string $aYIVerweisAufEinKontingent
     * @return N27020
     */
    public function setAYIVerweisAufEinKontingent($aYIVerweisAufEinKontingent)
    {
        $this->AYI_Verweis_auf_ein_Kontingent = $aYIVerweisAufEinKontingent;

        return $this;
    }

    /**
     * Get AYI_Verweis_auf_ein_Kontingent
     *
     * @return string 
     */
    public function getAYIVerweisAufEinKontingent()
    {
        return $this->AYI_Verweis_auf_ein_Kontingent;
    }
}
