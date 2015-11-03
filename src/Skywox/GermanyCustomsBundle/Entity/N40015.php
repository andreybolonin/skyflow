<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N40015
 */
class N40015
{
    /**
     * @var integer
     */
    private $BDH_SID_der_nationalen_Maßnahme;

    /**
     * @var string
     */
    private $BDI_Abgabenart;

    /**
     * @var string
     */
    private $BDJ_Währungseinheit;

    /**
     * @var string
     */
    private $BDK_Abgabenbetrag;

    /**
     * @var string
     */
    private $BDL_Maßeinheit;

    /**
     * @var string
     */
    private $BDM_Maßeinheitsqualifikator;


    /**
     * Set BDH_SID_der_nationalen_Maßnahme
     *
     * @param integer $bDHSIDDerNationalenMaßnahme
     * @return N40015
     */
    public function setBDHSIDDerNationalenMaßnahme($bDHSIDDerNationalenMaßnahme)
    {
        $this->BDH_SID_der_nationalen_Maßnahme = $bDHSIDDerNationalenMaßnahme;

        return $this;
    }

    /**
     * Get BDH_SID_der_nationalen_Maßnahme
     *
     * @return integer 
     */
    public function getBDHSIDDerNationalenMaßnahme()
    {
        return $this->BDH_SID_der_nationalen_Maßnahme;
    }

    /**
     * Set BDI_Abgabenart
     *
     * @param string $bDIAbgabenart
     * @return N40015
     */
    public function setBDIAbgabenart($bDIAbgabenart)
    {
        $this->BDI_Abgabenart = $bDIAbgabenart;

        return $this;
    }

    /**
     * Get BDI_Abgabenart
     *
     * @return string 
     */
    public function getBDIAbgabenart()
    {
        return $this->BDI_Abgabenart;
    }

    /**
     * Set BDJ_Währungseinheit
     *
     * @param string $bDJWährungseinheit
     * @return N40015
     */
    public function setBDJWährungseinheit($bDJWährungseinheit)
    {
        $this->BDJ_Währungseinheit = $bDJWährungseinheit;

        return $this;
    }

    /**
     * Get BDJ_Währungseinheit
     *
     * @return string 
     */
    public function getBDJWährungseinheit()
    {
        return $this->BDJ_Währungseinheit;
    }

    /**
     * Set BDK_Abgabenbetrag
     *
     * @param string $bDKAbgabenbetrag
     * @return N40015
     */
    public function setBDKAbgabenbetrag($bDKAbgabenbetrag)
    {
        $this->BDK_Abgabenbetrag = $bDKAbgabenbetrag;

        return $this;
    }

    /**
     * Get BDK_Abgabenbetrag
     *
     * @return string 
     */
    public function getBDKAbgabenbetrag()
    {
        return $this->BDK_Abgabenbetrag;
    }

    /**
     * Set BDL_Maßeinheit
     *
     * @param string $bDLMaßeinheit
     * @return N40015
     */
    public function setBDLMaßeinheit($bDLMaßeinheit)
    {
        $this->BDL_Maßeinheit = $bDLMaßeinheit;

        return $this;
    }

    /**
     * Get BDL_Maßeinheit
     *
     * @return string 
     */
    public function getBDLMaßeinheit()
    {
        return $this->BDL_Maßeinheit;
    }

    /**
     * Set BDM_Maßeinheitsqualifikator
     *
     * @param string $bDMMaßeinheitsqualifikator
     * @return N40015
     */
    public function setBDMMaßeinheitsqualifikator($bDMMaßeinheitsqualifikator)
    {
        $this->BDM_Maßeinheitsqualifikator = $bDMMaßeinheitsqualifikator;

        return $this;
    }

    /**
     * Get BDM_Maßeinheitsqualifikator
     *
     * @return string 
     */
    public function getBDMMaßeinheitsqualifikator()
    {
        return $this->BDM_Maßeinheitsqualifikator;
    }
}
