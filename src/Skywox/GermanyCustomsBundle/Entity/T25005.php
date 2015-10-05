<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T25005
 */
class T25005
{
    /**
     * @var integer
     */
    private $AEV_SID_der_geographischen_Gebietsbezeichnung;

    /**
     * @var integer
     */
    private $AEW_SID_des_geographischen_Gebiets;

    /**
     * @var \DateTime
     */
    private $AEX_Datum_des_Gültigkeitsbeginns_der_geographischen_Gebietsbesc;

    /**
     * @var \DateTime
     */
    private $AEY_Datum_des_Gültigkeitsende_der_geographischen_Gebietsbeschre;

    /**
     * @var string
     */
    private $AEZ_ID_des_geographischen_Gebiets;

    /**
     * @var string
     */
    private $AFA_Name_des_geographischen_Gebiets;


    /**
     * Set AEV_SID_der_geographischen_Gebietsbezeichnung
     *
     * @param integer $aEVSIDDerGeographischenGebietsbezeichnung
     * @return T25005
     */
    public function setAEVSIDDerGeographischenGebietsbezeichnung($aEVSIDDerGeographischenGebietsbezeichnung)
    {
        $this->AEV_SID_der_geographischen_Gebietsbezeichnung = $aEVSIDDerGeographischenGebietsbezeichnung;

        return $this;
    }

    /**
     * Get AEV_SID_der_geographischen_Gebietsbezeichnung
     *
     * @return integer 
     */
    public function getAEVSIDDerGeographischenGebietsbezeichnung()
    {
        return $this->AEV_SID_der_geographischen_Gebietsbezeichnung;
    }

    /**
     * Set AEW_SID_des_geographischen_Gebiets
     *
     * @param integer $aEWSIDDesGeographischenGebiets
     * @return T25005
     */
    public function setAEWSIDDesGeographischenGebiets($aEWSIDDesGeographischenGebiets)
    {
        $this->AEW_SID_des_geographischen_Gebiets = $aEWSIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AEW_SID_des_geographischen_Gebiets
     *
     * @return integer 
     */
    public function getAEWSIDDesGeographischenGebiets()
    {
        return $this->AEW_SID_des_geographischen_Gebiets;
    }

    /**
     * Set AEX_Datum_des_Gültigkeitsbeginns_der_geographischen_Gebietsbesc
     *
     * @param \DateTime $aEXDatumDesGültigkeitsbeginnsDerGeographischenGebietsbesc
     * @return T25005
     */
    public function setAEXDatumDesGültigkeitsbeginnsDerGeographischenGebietsbesc($aEXDatumDesGültigkeitsbeginnsDerGeographischenGebietsbesc)
    {
        $this->AEX_Datum_des_Gültigkeitsbeginns_der_geographischen_Gebietsbesc = $aEXDatumDesGültigkeitsbeginnsDerGeographischenGebietsbesc;

        return $this;
    }

    /**
     * Get AEX_Datum_des_Gültigkeitsbeginns_der_geographischen_Gebietsbesc
     *
     * @return \DateTime 
     */
    public function getAEXDatumDesGültigkeitsbeginnsDerGeographischenGebietsbesc()
    {
        return $this->AEX_Datum_des_Gültigkeitsbeginns_der_geographischen_Gebietsbesc;
    }

    /**
     * Set AEY_Datum_des_Gültigkeitsende_der_geographischen_Gebietsbeschre
     *
     * @param \DateTime $aEYDatumDesGültigkeitsendeDerGeographischenGebietsbeschre
     * @return T25005
     */
    public function setAEYDatumDesGültigkeitsendeDerGeographischenGebietsbeschre($aEYDatumDesGültigkeitsendeDerGeographischenGebietsbeschre)
    {
        $this->AEY_Datum_des_Gültigkeitsende_der_geographischen_Gebietsbeschre = $aEYDatumDesGültigkeitsendeDerGeographischenGebietsbeschre;

        return $this;
    }

    /**
     * Get AEY_Datum_des_Gültigkeitsende_der_geographischen_Gebietsbeschre
     *
     * @return \DateTime 
     */
    public function getAEYDatumDesGültigkeitsendeDerGeographischenGebietsbeschre()
    {
        return $this->AEY_Datum_des_Gültigkeitsende_der_geographischen_Gebietsbeschre;
    }

    /**
     * Set AEZ_ID_des_geographischen_Gebiets
     *
     * @param string $aEZIDDesGeographischenGebiets
     * @return T25005
     */
    public function setAEZIDDesGeographischenGebiets($aEZIDDesGeographischenGebiets)
    {
        $this->AEZ_ID_des_geographischen_Gebiets = $aEZIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AEZ_ID_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAEZIDDesGeographischenGebiets()
    {
        return $this->AEZ_ID_des_geographischen_Gebiets;
    }

    /**
     * Set AFA_Name_des_geographischen_Gebiets
     *
     * @param string $aFANameDesGeographischenGebiets
     * @return T25005
     */
    public function setAFANameDesGeographischenGebiets($aFANameDesGeographischenGebiets)
    {
        $this->AFA_Name_des_geographischen_Gebiets = $aFANameDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AFA_Name_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAFANameDesGeographischenGebiets()
    {
        return $this->AFA_Name_des_geographischen_Gebiets;
    }
}
