<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N23500
 */
class N23500
{
    /**
     * @var string
     */
    private $AVY_Bedingung;

    /**
     * @var \DateTime
     */
    private $AVZ_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AWA_Endedatum;

    /**
     * @var string
     */
    private $AWB_Beschreibung_der_Bedingung;


    /**
     * Set AVY_Bedingung
     *
     * @param string $aVYBedingung
     * @return N23500
     */
    public function setAVYBedingung($aVYBedingung)
    {
        $this->AVY_Bedingung = $aVYBedingung;

        return $this;
    }

    /**
     * Get AVY_Bedingung
     *
     * @return string 
     */
    public function getAVYBedingung()
    {
        return $this->AVY_Bedingung;
    }

    /**
     * Set AVZ_Beginndatum
     *
     * @param \DateTime $aVZBeginndatum
     * @return N23500
     */
    public function setAVZBeginndatum($aVZBeginndatum)
    {
        $this->AVZ_Beginndatum = $aVZBeginndatum;

        return $this;
    }

    /**
     * Get AVZ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAVZBeginndatum()
    {
        return $this->AVZ_Beginndatum;
    }

    /**
     * Set AWA_Endedatum
     *
     * @param \DateTime $aWAEndedatum
     * @return N23500
     */
    public function setAWAEndedatum($aWAEndedatum)
    {
        $this->AWA_Endedatum = $aWAEndedatum;

        return $this;
    }

    /**
     * Get AWA_Endedatum
     *
     * @return \DateTime 
     */
    public function getAWAEndedatum()
    {
        return $this->AWA_Endedatum;
    }

    /**
     * Set AWB_Beschreibung_der_Bedingung
     *
     * @param string $aWBBeschreibungDerBedingung
     * @return N23500
     */
    public function setAWBBeschreibungDerBedingung($aWBBeschreibungDerBedingung)
    {
        $this->AWB_Beschreibung_der_Bedingung = $aWBBeschreibungDerBedingung;

        return $this;
    }

    /**
     * Get AWB_Beschreibung_der_Bedingung
     *
     * @return string 
     */
    public function getAWBBeschreibungDerBedingung()
    {
        return $this->AWB_Beschreibung_der_Bedingung;
    }
}
