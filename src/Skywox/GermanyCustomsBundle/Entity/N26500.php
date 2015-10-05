<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N26500
 */
class N26500
{
    /**
     * @var string
     */
    private $AXE_Hinweisart;

    /**
     * @var string
     */
    private $AXF_Hinweisschlüssel;

    /**
     * @var \DateTime
     */
    private $AXG_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AXH_Endedatum;

    /**
     * @var string
     */
    private $AXI_Beschreibung_des_Hinweises;

    /**
     * @var string
     */
    private $AXJ_Hinweistext;


    /**
     * Set AXE_Hinweisart
     *
     * @param string $aXEHinweisart
     * @return N26500
     */
    public function setAXEHinweisart($aXEHinweisart)
    {
        $this->AXE_Hinweisart = $aXEHinweisart;

        return $this;
    }

    /**
     * Get AXE_Hinweisart
     *
     * @return string 
     */
    public function getAXEHinweisart()
    {
        return $this->AXE_Hinweisart;
    }

    /**
     * Set AXF_Hinweisschlüssel
     *
     * @param string $aXFHinweisschlüssel
     * @return N26500
     */
    public function setAXFHinweisschlüssel($aXFHinweisschlüssel)
    {
        $this->AXF_Hinweisschlüssel = $aXFHinweisschlüssel;

        return $this;
    }

    /**
     * Get AXF_Hinweisschlüssel
     *
     * @return string 
     */
    public function getAXFHinweisschlüssel()
    {
        return $this->AXF_Hinweisschlüssel;
    }

    /**
     * Set AXG_Beginndatum
     *
     * @param \DateTime $aXGBeginndatum
     * @return N26500
     */
    public function setAXGBeginndatum($aXGBeginndatum)
    {
        $this->AXG_Beginndatum = $aXGBeginndatum;

        return $this;
    }

    /**
     * Get AXG_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAXGBeginndatum()
    {
        return $this->AXG_Beginndatum;
    }

    /**
     * Set AXH_Endedatum
     *
     * @param \DateTime $aXHEndedatum
     * @return N26500
     */
    public function setAXHEndedatum($aXHEndedatum)
    {
        $this->AXH_Endedatum = $aXHEndedatum;

        return $this;
    }

    /**
     * Get AXH_Endedatum
     *
     * @return \DateTime 
     */
    public function getAXHEndedatum()
    {
        return $this->AXH_Endedatum;
    }

    /**
     * Set AXI_Beschreibung_des_Hinweises
     *
     * @param string $aXIBeschreibungDesHinweises
     * @return N26500
     */
    public function setAXIBeschreibungDesHinweises($aXIBeschreibungDesHinweises)
    {
        $this->AXI_Beschreibung_des_Hinweises = $aXIBeschreibungDesHinweises;

        return $this;
    }

    /**
     * Get AXI_Beschreibung_des_Hinweises
     *
     * @return string 
     */
    public function getAXIBeschreibungDesHinweises()
    {
        return $this->AXI_Beschreibung_des_Hinweises;
    }

    /**
     * Set AXJ_Hinweistext
     *
     * @param string $aXJHinweistext
     * @return N26500
     */
    public function setAXJHinweistext($aXJHinweistext)
    {
        $this->AXJ_Hinweistext = $aXJHinweistext;

        return $this;
    }

    /**
     * Get AXJ_Hinweistext
     *
     * @return string 
     */
    public function getAXJHinweistext()
    {
        return $this->AXJ_Hinweistext;
    }
}
