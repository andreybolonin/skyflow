<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N31000
 */
class N31000
{
    /**
     * @var string
     */
    private $BAX_Bescheinigungsart;

    /**
     * @var string
     */
    private $BAY_Bescheinigung;

    /**
     * @var string
     */
    private $BAZ_Geographisches_Gebiet;

    /**
     * @var \DateTime
     */
    private $BBA_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BBB_Endedatum;


    /**
     * Set BAX_Bescheinigungsart
     *
     * @param string $bAXBescheinigungsart
     * @return N31000
     */
    public function setBAXBescheinigungsart($bAXBescheinigungsart)
    {
        $this->BAX_Bescheinigungsart = $bAXBescheinigungsart;

        return $this;
    }

    /**
     * Get BAX_Bescheinigungsart
     *
     * @return string 
     */
    public function getBAXBescheinigungsart()
    {
        return $this->BAX_Bescheinigungsart;
    }

    /**
     * Set BAY_Bescheinigung
     *
     * @param string $bAYBescheinigung
     * @return N31000
     */
    public function setBAYBescheinigung($bAYBescheinigung)
    {
        $this->BAY_Bescheinigung = $bAYBescheinigung;

        return $this;
    }

    /**
     * Get BAY_Bescheinigung
     *
     * @return string 
     */
    public function getBAYBescheinigung()
    {
        return $this->BAY_Bescheinigung;
    }

    /**
     * Set BAZ_Geographisches_Gebiet
     *
     * @param string $bAZGeographischesGebiet
     * @return N31000
     */
    public function setBAZGeographischesGebiet($bAZGeographischesGebiet)
    {
        $this->BAZ_Geographisches_Gebiet = $bAZGeographischesGebiet;

        return $this;
    }

    /**
     * Get BAZ_Geographisches_Gebiet
     *
     * @return string 
     */
    public function getBAZGeographischesGebiet()
    {
        return $this->BAZ_Geographisches_Gebiet;
    }

    /**
     * Set BBA_Beginndatum
     *
     * @param \DateTime $bBABeginndatum
     * @return N31000
     */
    public function setBBABeginndatum($bBABeginndatum)
    {
        $this->BBA_Beginndatum = $bBABeginndatum;

        return $this;
    }

    /**
     * Get BBA_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBBABeginndatum()
    {
        return $this->BBA_Beginndatum;
    }

    /**
     * Set BBB_Endedatum
     *
     * @param \DateTime $bBBEndedatum
     * @return N31000
     */
    public function setBBBEndedatum($bBBEndedatum)
    {
        $this->BBB_Endedatum = $bBBEndedatum;

        return $this;
    }

    /**
     * Get BBB_Endedatum
     *
     * @return \DateTime 
     */
    public function getBBBEndedatum()
    {
        return $this->BBB_Endedatum;
    }
}
