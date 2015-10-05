<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T36010
 */
class T36010
{
    /**
     * @var integer
     */
    private $AKW_SID;

    /**
     * @var integer
     */
    private $AKX_SID_der_Ordnungsnummer;

    /**
     * @var string
     */
    private $AKY_Geographisches_Gebiet;

    /**
     * @var \DateTime
     */
    private $AKZ_Gültigkeitsbeginn;

    /**
     * @var \DateTime
     */
    private $ALA_Gültigkeitsende;

    /**
     * @var integer
     */
    private $ALB_SID_des_geographischen_Gebiets;


    /**
     * Set AKW_SID
     *
     * @param integer $aKWSID
     * @return T36010
     */
    public function setAKWSID($aKWSID)
    {
        $this->AKW_SID = $aKWSID;

        return $this;
    }

    /**
     * Get AKW_SID
     *
     * @return integer 
     */
    public function getAKWSID()
    {
        return $this->AKW_SID;
    }

    /**
     * Set AKX_SID_der_Ordnungsnummer
     *
     * @param integer $aKXSIDDerOrdnungsnummer
     * @return T36010
     */
    public function setAKXSIDDerOrdnungsnummer($aKXSIDDerOrdnungsnummer)
    {
        $this->AKX_SID_der_Ordnungsnummer = $aKXSIDDerOrdnungsnummer;

        return $this;
    }

    /**
     * Get AKX_SID_der_Ordnungsnummer
     *
     * @return integer 
     */
    public function getAKXSIDDerOrdnungsnummer()
    {
        return $this->AKX_SID_der_Ordnungsnummer;
    }

    /**
     * Set AKY_Geographisches_Gebiet
     *
     * @param string $aKYGeographischesGebiet
     * @return T36010
     */
    public function setAKYGeographischesGebiet($aKYGeographischesGebiet)
    {
        $this->AKY_Geographisches_Gebiet = $aKYGeographischesGebiet;

        return $this;
    }

    /**
     * Get AKY_Geographisches_Gebiet
     *
     * @return string 
     */
    public function getAKYGeographischesGebiet()
    {
        return $this->AKY_Geographisches_Gebiet;
    }

    /**
     * Set AKZ_Gültigkeitsbeginn
     *
     * @param \DateTime $aKZGültigkeitsbeginn
     * @return T36010
     */
    public function setAKZGültigkeitsbeginn($aKZGültigkeitsbeginn)
    {
        $this->AKZ_Gültigkeitsbeginn = $aKZGültigkeitsbeginn;

        return $this;
    }

    /**
     * Get AKZ_Gültigkeitsbeginn
     *
     * @return \DateTime 
     */
    public function getAKZGültigkeitsbeginn()
    {
        return $this->AKZ_Gültigkeitsbeginn;
    }

    /**
     * Set ALA_Gültigkeitsende
     *
     * @param \DateTime $aLAGültigkeitsende
     * @return T36010
     */
    public function setALAGültigkeitsende($aLAGültigkeitsende)
    {
        $this->ALA_Gültigkeitsende = $aLAGültigkeitsende;

        return $this;
    }

    /**
     * Get ALA_Gültigkeitsende
     *
     * @return \DateTime 
     */
    public function getALAGültigkeitsende()
    {
        return $this->ALA_Gültigkeitsende;
    }

    /**
     * Set ALB_SID_des_geographischen_Gebiets
     *
     * @param integer $aLBSIDDesGeographischenGebiets
     * @return T36010
     */
    public function setALBSIDDesGeographischenGebiets($aLBSIDDesGeographischenGebiets)
    {
        $this->ALB_SID_des_geographischen_Gebiets = $aLBSIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get ALB_SID_des_geographischen_Gebiets
     *
     * @return integer 
     */
    public function getALBSIDDesGeographischenGebiets()
    {
        return $this->ALB_SID_des_geographischen_Gebiets;
    }
}
