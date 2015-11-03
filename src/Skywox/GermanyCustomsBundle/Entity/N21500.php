<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N21500
 */
class N21500
{
    /**
     * @var string
     */
    private $AVB_Maßnahmeaktion;

    /**
     * @var \DateTime
     */
    private $AVC_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AVD_Endedatum;

    /**
     * @var string
     */
    private $AVE_Beschreibung_der_Maßnahmeaktion;


    /**
     * Set AVB_Maßnahmeaktion
     *
     * @param string $aVBMaßnahmeaktion
     * @return N21500
     */
    public function setAVBMaßnahmeaktion($aVBMaßnahmeaktion)
    {
        $this->AVB_Maßnahmeaktion = $aVBMaßnahmeaktion;

        return $this;
    }

    /**
     * Get AVB_Maßnahmeaktion
     *
     * @return string 
     */
    public function getAVBMaßnahmeaktion()
    {
        return $this->AVB_Maßnahmeaktion;
    }

    /**
     * Set AVC_Beginndatum
     *
     * @param \DateTime $aVCBeginndatum
     * @return N21500
     */
    public function setAVCBeginndatum($aVCBeginndatum)
    {
        $this->AVC_Beginndatum = $aVCBeginndatum;

        return $this;
    }

    /**
     * Get AVC_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAVCBeginndatum()
    {
        return $this->AVC_Beginndatum;
    }

    /**
     * Set AVD_Endedatum
     *
     * @param \DateTime $aVDEndedatum
     * @return N21500
     */
    public function setAVDEndedatum($aVDEndedatum)
    {
        $this->AVD_Endedatum = $aVDEndedatum;

        return $this;
    }

    /**
     * Get AVD_Endedatum
     *
     * @return \DateTime 
     */
    public function getAVDEndedatum()
    {
        return $this->AVD_Endedatum;
    }

    /**
     * Set AVE_Beschreibung_der_Maßnahmeaktion
     *
     * @param string $aVEBeschreibungDerMaßnahmeaktion
     * @return N21500
     */
    public function setAVEBeschreibungDerMaßnahmeaktion($aVEBeschreibungDerMaßnahmeaktion)
    {
        $this->AVE_Beschreibung_der_Maßnahmeaktion = $aVEBeschreibungDerMaßnahmeaktion;

        return $this;
    }

    /**
     * Get AVE_Beschreibung_der_Maßnahmeaktion
     *
     * @return string 
     */
    public function getAVEBeschreibungDerMaßnahmeaktion()
    {
        return $this->AVE_Beschreibung_der_Maßnahmeaktion;
    }
}
