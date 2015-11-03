<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T30500
 */
class T30500
{
    /**
     * @var string
     */
    private $AIU_Funktion_des_Ersatzes_der_Verordnung;

    /**
     * @var string
     */
    private $AIV_ID_des_Ersatzes_der_Verordnung;

    /**
     * @var string
     */
    private $AIW_Ersetzte_Verordnungsfunktion;

    /**
     * @var string
     */
    private $AIX_Ersetzter_Verordnungs_ID;

    /**
     * @var string
     */
    private $AIY_Maßnahmeart_ID;

    /**
     * @var string
     */
    private $AIZ_ID_des_geographischen_Gebiets;

    /**
     * @var string
     */
    private $AJA_Kapitelnummer;


    /**
     * Set AIU_Funktion_des_Ersatzes_der_Verordnung
     *
     * @param string $aIUFunktionDesErsatzesDerVerordnung
     * @return T30500
     */
    public function setAIUFunktionDesErsatzesDerVerordnung($aIUFunktionDesErsatzesDerVerordnung)
    {
        $this->AIU_Funktion_des_Ersatzes_der_Verordnung = $aIUFunktionDesErsatzesDerVerordnung;

        return $this;
    }

    /**
     * Get AIU_Funktion_des_Ersatzes_der_Verordnung
     *
     * @return string 
     */
    public function getAIUFunktionDesErsatzesDerVerordnung()
    {
        return $this->AIU_Funktion_des_Ersatzes_der_Verordnung;
    }

    /**
     * Set AIV_ID_des_Ersatzes_der_Verordnung
     *
     * @param string $aIVIDDesErsatzesDerVerordnung
     * @return T30500
     */
    public function setAIVIDDesErsatzesDerVerordnung($aIVIDDesErsatzesDerVerordnung)
    {
        $this->AIV_ID_des_Ersatzes_der_Verordnung = $aIVIDDesErsatzesDerVerordnung;

        return $this;
    }

    /**
     * Get AIV_ID_des_Ersatzes_der_Verordnung
     *
     * @return string 
     */
    public function getAIVIDDesErsatzesDerVerordnung()
    {
        return $this->AIV_ID_des_Ersatzes_der_Verordnung;
    }

    /**
     * Set AIW_Ersetzte_Verordnungsfunktion
     *
     * @param string $aIWErsetzteVerordnungsfunktion
     * @return T30500
     */
    public function setAIWErsetzteVerordnungsfunktion($aIWErsetzteVerordnungsfunktion)
    {
        $this->AIW_Ersetzte_Verordnungsfunktion = $aIWErsetzteVerordnungsfunktion;

        return $this;
    }

    /**
     * Get AIW_Ersetzte_Verordnungsfunktion
     *
     * @return string 
     */
    public function getAIWErsetzteVerordnungsfunktion()
    {
        return $this->AIW_Ersetzte_Verordnungsfunktion;
    }

    /**
     * Set AIX_Ersetzter_Verordnungs_ID
     *
     * @param string $aIXErsetzterVerordnungsID
     * @return T30500
     */
    public function setAIXErsetzterVerordnungsID($aIXErsetzterVerordnungsID)
    {
        $this->AIX_Ersetzter_Verordnungs_ID = $aIXErsetzterVerordnungsID;

        return $this;
    }

    /**
     * Get AIX_Ersetzter_Verordnungs_ID
     *
     * @return string 
     */
    public function getAIXErsetzterVerordnungsID()
    {
        return $this->AIX_Ersetzter_Verordnungs_ID;
    }

    /**
     * Set AIY_Maßnahmeart_ID
     *
     * @param string $aIYMaßnahmeartID
     * @return T30500
     */
    public function setAIYMaßnahmeartID($aIYMaßnahmeartID)
    {
        $this->AIY_Maßnahmeart_ID = $aIYMaßnahmeartID;

        return $this;
    }

    /**
     * Get AIY_Maßnahmeart_ID
     *
     * @return string 
     */
    public function getAIYMaßnahmeartID()
    {
        return $this->AIY_Maßnahmeart_ID;
    }

    /**
     * Set AIZ_ID_des_geographischen_Gebiets
     *
     * @param string $aIZIDDesGeographischenGebiets
     * @return T30500
     */
    public function setAIZIDDesGeographischenGebiets($aIZIDDesGeographischenGebiets)
    {
        $this->AIZ_ID_des_geographischen_Gebiets = $aIZIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AIZ_ID_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAIZIDDesGeographischenGebiets()
    {
        return $this->AIZ_ID_des_geographischen_Gebiets;
    }

    /**
     * Set AJA_Kapitelnummer
     *
     * @param string $aJAKapitelnummer
     * @return T30500
     */
    public function setAJAKapitelnummer($aJAKapitelnummer)
    {
        $this->AJA_Kapitelnummer = $aJAKapitelnummer;

        return $this;
    }

    /**
     * Get AJA_Kapitelnummer
     *
     * @return string 
     */
    public function getAJAKapitelnummer()
    {
        return $this->AJA_Kapitelnummer;
    }
}
