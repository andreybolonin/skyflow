<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43015
 */
class T43015
{
    /**
     * @var integer
     */
    private $ASE_SID_der_Maßnahme;

    /**
     * @var string
     */
    private $ASF_Ausgeschlossenes_Land__Region;

    /**
     * @var integer
     */
    private $ASG_SID_des_geographischen_Gebiets;


    /**
     * Set ASE_SID_der_Maßnahme
     *
     * @param integer $aSESIDDerMaßnahme
     * @return T43015
     */
    public function setASESIDDerMaßnahme($aSESIDDerMaßnahme)
    {
        $this->ASE_SID_der_Maßnahme = $aSESIDDerMaßnahme;

        return $this;
    }

    /**
     * Get ASE_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getASESIDDerMaßnahme()
    {
        return $this->ASE_SID_der_Maßnahme;
    }

    /**
     * Set ASF_Ausgeschlossenes_Land__Region
     *
     * @param string $aSFAusgeschlossenesLandRegion
     * @return T43015
     */
    public function setASFAusgeschlossenesLandRegion($aSFAusgeschlossenesLandRegion)
    {
        $this->ASF_Ausgeschlossenes_Land__Region = $aSFAusgeschlossenesLandRegion;

        return $this;
    }

    /**
     * Get ASF_Ausgeschlossenes_Land__Region
     *
     * @return string 
     */
    public function getASFAusgeschlossenesLandRegion()
    {
        return $this->ASF_Ausgeschlossenes_Land__Region;
    }

    /**
     * Set ASG_SID_des_geographischen_Gebiets
     *
     * @param integer $aSGSIDDesGeographischenGebiets
     * @return T43015
     */
    public function setASGSIDDesGeographischenGebiets($aSGSIDDesGeographischenGebiets)
    {
        $this->ASG_SID_des_geographischen_Gebiets = $aSGSIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get ASG_SID_des_geographischen_Gebiets
     *
     * @return integer 
     */
    public function getASGSIDDesGeographischenGebiets()
    {
        return $this->ASG_SID_des_geographischen_Gebiets;
    }
}
