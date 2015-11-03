<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T16000
 */
class T16000
{
    /**
     * @var string
     */
    private $ABE_Verordnungsfunktionsart_ID;

    /**
     * @var \DateTime
     */
    private $ABF_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ABG_Endedatum;

    /**
     * @var string
     */
    private $ABH_Beschreibung_der_Verordnungsfunktion;


    /**
     * Set ABE_Verordnungsfunktionsart_ID
     *
     * @param string $aBEVerordnungsfunktionsartID
     * @return T16000
     */
    public function setABEVerordnungsfunktionsartID($aBEVerordnungsfunktionsartID)
    {
        $this->ABE_Verordnungsfunktionsart_ID = $aBEVerordnungsfunktionsartID;

        return $this;
    }

    /**
     * Get ABE_Verordnungsfunktionsart_ID
     *
     * @return string 
     */
    public function getABEVerordnungsfunktionsartID()
    {
        return $this->ABE_Verordnungsfunktionsart_ID;
    }

    /**
     * Set ABF_Beginndatum
     *
     * @param \DateTime $aBFBeginndatum
     * @return T16000
     */
    public function setABFBeginndatum($aBFBeginndatum)
    {
        $this->ABF_Beginndatum = $aBFBeginndatum;

        return $this;
    }

    /**
     * Get ABF_Beginndatum
     *
     * @return \DateTime 
     */
    public function getABFBeginndatum()
    {
        return $this->ABF_Beginndatum;
    }

    /**
     * Set ABG_Endedatum
     *
     * @param \DateTime $aBGEndedatum
     * @return T16000
     */
    public function setABGEndedatum($aBGEndedatum)
    {
        $this->ABG_Endedatum = $aBGEndedatum;

        return $this;
    }

    /**
     * Get ABG_Endedatum
     *
     * @return \DateTime 
     */
    public function getABGEndedatum()
    {
        return $this->ABG_Endedatum;
    }

    /**
     * Set ABH_Beschreibung_der_Verordnungsfunktion
     *
     * @param string $aBHBeschreibungDerVerordnungsfunktion
     * @return T16000
     */
    public function setABHBeschreibungDerVerordnungsfunktion($aBHBeschreibungDerVerordnungsfunktion)
    {
        $this->ABH_Beschreibung_der_Verordnungsfunktion = $aBHBeschreibungDerVerordnungsfunktion;

        return $this;
    }

    /**
     * Get ABH_Beschreibung_der_Verordnungsfunktion
     *
     * @return string 
     */
    public function getABHBeschreibungDerVerordnungsfunktion()
    {
        return $this->ABH_Beschreibung_der_Verordnungsfunktion;
    }
}
