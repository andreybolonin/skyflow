<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T25000
 */
class T25000
{
    /**
     * @var integer
     */
    private $AEP_SID_des_geographischen_Gebiets;

    /**
     * @var string
     */
    private $AEQ_ID_des_geographischen_Gebiets;

    /**
     * @var \DateTime
     */
    private $AER_Datum_des_Gültigkeitsbeginn_des_geographischen_Gebiets;

    /**
     * @var \DateTime
     */
    private $AES_Datum_des_Gültigkeitsende_des_geographischen_Gebiets;

    /**
     * @var string
     */
    private $AET_Art_des_geographischen_Gebiets;

    /**
     * @var integer
     */
    private $AEU_SID_der_Ausgangsländergruppe;


    /**
     * Set AEP_SID_des_geographischen_Gebiets
     *
     * @param integer $aEPSIDDesGeographischenGebiets
     * @return T25000
     */
    public function setAEPSIDDesGeographischenGebiets($aEPSIDDesGeographischenGebiets)
    {
        $this->AEP_SID_des_geographischen_Gebiets = $aEPSIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AEP_SID_des_geographischen_Gebiets
     *
     * @return integer 
     */
    public function getAEPSIDDesGeographischenGebiets()
    {
        return $this->AEP_SID_des_geographischen_Gebiets;
    }

    /**
     * Set AEQ_ID_des_geographischen_Gebiets
     *
     * @param string $aEQIDDesGeographischenGebiets
     * @return T25000
     */
    public function setAEQIDDesGeographischenGebiets($aEQIDDesGeographischenGebiets)
    {
        $this->AEQ_ID_des_geographischen_Gebiets = $aEQIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AEQ_ID_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAEQIDDesGeographischenGebiets()
    {
        return $this->AEQ_ID_des_geographischen_Gebiets;
    }

    /**
     * Set AER_Datum_des_Gültigkeitsbeginn_des_geographischen_Gebiets
     *
     * @param \DateTime $aERDatumDesGültigkeitsbeginnDesGeographischenGebiets
     * @return T25000
     */
    public function setAERDatumDesGültigkeitsbeginnDesGeographischenGebiets($aERDatumDesGültigkeitsbeginnDesGeographischenGebiets)
    {
        $this->AER_Datum_des_Gültigkeitsbeginn_des_geographischen_Gebiets = $aERDatumDesGültigkeitsbeginnDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AER_Datum_des_Gültigkeitsbeginn_des_geographischen_Gebiets
     *
     * @return \DateTime 
     */
    public function getAERDatumDesGültigkeitsbeginnDesGeographischenGebiets()
    {
        return $this->AER_Datum_des_Gültigkeitsbeginn_des_geographischen_Gebiets;
    }

    /**
     * Set AES_Datum_des_Gültigkeitsende_des_geographischen_Gebiets
     *
     * @param \DateTime $aESDatumDesGültigkeitsendeDesGeographischenGebiets
     * @return T25000
     */
    public function setAESDatumDesGültigkeitsendeDesGeographischenGebiets($aESDatumDesGültigkeitsendeDesGeographischenGebiets)
    {
        $this->AES_Datum_des_Gültigkeitsende_des_geographischen_Gebiets = $aESDatumDesGültigkeitsendeDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AES_Datum_des_Gültigkeitsende_des_geographischen_Gebiets
     *
     * @return \DateTime 
     */
    public function getAESDatumDesGültigkeitsendeDesGeographischenGebiets()
    {
        return $this->AES_Datum_des_Gültigkeitsende_des_geographischen_Gebiets;
    }

    /**
     * Set AET_Art_des_geographischen_Gebiets
     *
     * @param string $aETArtDesGeographischenGebiets
     * @return T25000
     */
    public function setAETArtDesGeographischenGebiets($aETArtDesGeographischenGebiets)
    {
        $this->AET_Art_des_geographischen_Gebiets = $aETArtDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AET_Art_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAETArtDesGeographischenGebiets()
    {
        return $this->AET_Art_des_geographischen_Gebiets;
    }

    /**
     * Set AEU_SID_der_Ausgangsländergruppe
     *
     * @param integer $aEUSIDDerAusgangsländergruppe
     * @return T25000
     */
    public function setAEUSIDDerAusgangsländergruppe($aEUSIDDerAusgangsländergruppe)
    {
        $this->AEU_SID_der_Ausgangsländergruppe = $aEUSIDDerAusgangsländergruppe;

        return $this;
    }

    /**
     * Get AEU_SID_der_Ausgangsländergruppe
     *
     * @return integer 
     */
    public function getAEUSIDDerAusgangsländergruppe()
    {
        return $this->AEU_SID_der_Ausgangsländergruppe;
    }
}
