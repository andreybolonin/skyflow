<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T29505
 */
class T29505
{
    /**
     * @var string
     */
    private $AHW_Funktion_der_Verlängerungsverordnung;

    /**
     * @var string
     */
    private $AHX_ID_der_Verlängerungsverordnung;

    /**
     * @var string
     */
    private $AHY_Funktion_der_verlängerten_Verordnung;

    /**
     * @var string
     */
    private $AHZ_ID_der_verlängerten_Verordnung;

    /**
     * @var \DateTime
     */
    private $AIA_Datum_Verordnung_verlängert_bis;


    /**
     * Set AHW_Funktion_der_Verlängerungsverordnung
     *
     * @param string $aHWFunktionDerVerlängerungsverordnung
     * @return T29505
     */
    public function setAHWFunktionDerVerlängerungsverordnung($aHWFunktionDerVerlängerungsverordnung)
    {
        $this->AHW_Funktion_der_Verlängerungsverordnung = $aHWFunktionDerVerlängerungsverordnung;

        return $this;
    }

    /**
     * Get AHW_Funktion_der_Verlängerungsverordnung
     *
     * @return string 
     */
    public function getAHWFunktionDerVerlängerungsverordnung()
    {
        return $this->AHW_Funktion_der_Verlängerungsverordnung;
    }

    /**
     * Set AHX_ID_der_Verlängerungsverordnung
     *
     * @param string $aHXIDDerVerlängerungsverordnung
     * @return T29505
     */
    public function setAHXIDDerVerlängerungsverordnung($aHXIDDerVerlängerungsverordnung)
    {
        $this->AHX_ID_der_Verlängerungsverordnung = $aHXIDDerVerlängerungsverordnung;

        return $this;
    }

    /**
     * Get AHX_ID_der_Verlängerungsverordnung
     *
     * @return string 
     */
    public function getAHXIDDerVerlängerungsverordnung()
    {
        return $this->AHX_ID_der_Verlängerungsverordnung;
    }

    /**
     * Set AHY_Funktion_der_verlängerten_Verordnung
     *
     * @param string $aHYFunktionDerVerlängertenVerordnung
     * @return T29505
     */
    public function setAHYFunktionDerVerlängertenVerordnung($aHYFunktionDerVerlängertenVerordnung)
    {
        $this->AHY_Funktion_der_verlängerten_Verordnung = $aHYFunktionDerVerlängertenVerordnung;

        return $this;
    }

    /**
     * Get AHY_Funktion_der_verlängerten_Verordnung
     *
     * @return string 
     */
    public function getAHYFunktionDerVerlängertenVerordnung()
    {
        return $this->AHY_Funktion_der_verlängerten_Verordnung;
    }

    /**
     * Set AHZ_ID_der_verlängerten_Verordnung
     *
     * @param string $aHZIDDerVerlängertenVerordnung
     * @return T29505
     */
    public function setAHZIDDerVerlängertenVerordnung($aHZIDDerVerlängertenVerordnung)
    {
        $this->AHZ_ID_der_verlängerten_Verordnung = $aHZIDDerVerlängertenVerordnung;

        return $this;
    }

    /**
     * Get AHZ_ID_der_verlängerten_Verordnung
     *
     * @return string 
     */
    public function getAHZIDDerVerlängertenVerordnung()
    {
        return $this->AHZ_ID_der_verlängerten_Verordnung;
    }

    /**
     * Set AIA_Datum_Verordnung_verlängert_bis
     *
     * @param \DateTime $aIADatumVerordnungVerlängertBis
     * @return T29505
     */
    public function setAIADatumVerordnungVerlängertBis($aIADatumVerordnungVerlängertBis)
    {
        $this->AIA_Datum_Verordnung_verlängert_bis = $aIADatumVerordnungVerlängertBis;

        return $this;
    }

    /**
     * Get AIA_Datum_Verordnung_verlängert_bis
     *
     * @return \DateTime 
     */
    public function getAIADatumVerordnungVerlängertBis()
    {
        return $this->AIA_Datum_Verordnung_verlängert_bis;
    }
}
