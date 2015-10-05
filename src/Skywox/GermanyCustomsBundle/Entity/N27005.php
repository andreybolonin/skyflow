<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N27005
 */
class N27005
{
    /**
     * @var integer
     */
    private $AXS_SID;

    /**
     * @var string
     */
    private $AXT_Ordnungsnummer;

    /**
     * @var string
     */
    private $AXU_ID_des_geographischen_Gebiets;

    /**
     * @var \DateTime
     */
    private $AXV_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AXW_Endedatum;


    /**
     * Set AXS_SID
     *
     * @param integer $aXSSID
     * @return N27005
     */
    public function setAXSSID($aXSSID)
    {
        $this->AXS_SID = $aXSSID;

        return $this;
    }

    /**
     * Get AXS_SID
     *
     * @return integer 
     */
    public function getAXSSID()
    {
        return $this->AXS_SID;
    }

    /**
     * Set AXT_Ordnungsnummer
     *
     * @param string $aXTOrdnungsnummer
     * @return N27005
     */
    public function setAXTOrdnungsnummer($aXTOrdnungsnummer)
    {
        $this->AXT_Ordnungsnummer = $aXTOrdnungsnummer;

        return $this;
    }

    /**
     * Get AXT_Ordnungsnummer
     *
     * @return string 
     */
    public function getAXTOrdnungsnummer()
    {
        return $this->AXT_Ordnungsnummer;
    }

    /**
     * Set AXU_ID_des_geographischen_Gebiets
     *
     * @param string $aXUIDDesGeographischenGebiets
     * @return N27005
     */
    public function setAXUIDDesGeographischenGebiets($aXUIDDesGeographischenGebiets)
    {
        $this->AXU_ID_des_geographischen_Gebiets = $aXUIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AXU_ID_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAXUIDDesGeographischenGebiets()
    {
        return $this->AXU_ID_des_geographischen_Gebiets;
    }

    /**
     * Set AXV_Beginndatum
     *
     * @param \DateTime $aXVBeginndatum
     * @return N27005
     */
    public function setAXVBeginndatum($aXVBeginndatum)
    {
        $this->AXV_Beginndatum = $aXVBeginndatum;

        return $this;
    }

    /**
     * Get AXV_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAXVBeginndatum()
    {
        return $this->AXV_Beginndatum;
    }

    /**
     * Set AXW_Endedatum
     *
     * @param \DateTime $aXWEndedatum
     * @return N27005
     */
    public function setAXWEndedatum($aXWEndedatum)
    {
        $this->AXW_Endedatum = $aXWEndedatum;

        return $this;
    }

    /**
     * Get AXW_Endedatum
     *
     * @return \DateTime 
     */
    public function getAXWEndedatum()
    {
        return $this->AXW_Endedatum;
    }
}
