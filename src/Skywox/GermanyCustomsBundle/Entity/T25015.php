<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T25015
 */
class T25015
{
    /**
     * @var integer
     */
    private $AFB_SID_des_geographischen_Gebiets;

    /**
     * @var integer
     */
    private $AFC_SID_der_Ländergruppe;

    /**
     * @var \DateTime
     */
    private $AFD_Datum_des_Gültigkeitsbeginn_der_Mitgliedschaft_des_geograph;

    /**
     * @var \DateTime
     */
    private $AFE_Datum_des_Gültigkeitsende_der_Mitgliedschaft_des_geographis;


    /**
     * Set AFB_SID_des_geographischen_Gebiets
     *
     * @param integer $aFBSIDDesGeographischenGebiets
     * @return T25015
     */
    public function setAFBSIDDesGeographischenGebiets($aFBSIDDesGeographischenGebiets)
    {
        $this->AFB_SID_des_geographischen_Gebiets = $aFBSIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AFB_SID_des_geographischen_Gebiets
     *
     * @return integer 
     */
    public function getAFBSIDDesGeographischenGebiets()
    {
        return $this->AFB_SID_des_geographischen_Gebiets;
    }

    /**
     * Set AFC_SID_der_Ländergruppe
     *
     * @param integer $aFCSIDDerLändergruppe
     * @return T25015
     */
    public function setAFCSIDDerLändergruppe($aFCSIDDerLändergruppe)
    {
        $this->AFC_SID_der_Ländergruppe = $aFCSIDDerLändergruppe;

        return $this;
    }

    /**
     * Get AFC_SID_der_Ländergruppe
     *
     * @return integer 
     */
    public function getAFCSIDDerLändergruppe()
    {
        return $this->AFC_SID_der_Ländergruppe;
    }

    /**
     * Set AFD_Datum_des_Gültigkeitsbeginn_der_Mitgliedschaft_des_geograph
     *
     * @param \DateTime $aFDDatumDesGültigkeitsbeginnDerMitgliedschaftDesGeograph
     * @return T25015
     */
    public function setAFDDatumDesGültigkeitsbeginnDerMitgliedschaftDesGeograph($aFDDatumDesGültigkeitsbeginnDerMitgliedschaftDesGeograph)
    {
        $this->AFD_Datum_des_Gültigkeitsbeginn_der_Mitgliedschaft_des_geograph = $aFDDatumDesGültigkeitsbeginnDerMitgliedschaftDesGeograph;

        return $this;
    }

    /**
     * Get AFD_Datum_des_Gültigkeitsbeginn_der_Mitgliedschaft_des_geograph
     *
     * @return \DateTime 
     */
    public function getAFDDatumDesGültigkeitsbeginnDerMitgliedschaftDesGeograph()
    {
        return $this->AFD_Datum_des_Gültigkeitsbeginn_der_Mitgliedschaft_des_geograph;
    }

    /**
     * Set AFE_Datum_des_Gültigkeitsende_der_Mitgliedschaft_des_geographis
     *
     * @param \DateTime $aFEDatumDesGültigkeitsendeDerMitgliedschaftDesGeographis
     * @return T25015
     */
    public function setAFEDatumDesGültigkeitsendeDerMitgliedschaftDesGeographis($aFEDatumDesGültigkeitsendeDerMitgliedschaftDesGeographis)
    {
        $this->AFE_Datum_des_Gültigkeitsende_der_Mitgliedschaft_des_geographis = $aFEDatumDesGültigkeitsendeDerMitgliedschaftDesGeographis;

        return $this;
    }

    /**
     * Get AFE_Datum_des_Gültigkeitsende_der_Mitgliedschaft_des_geographis
     *
     * @return \DateTime 
     */
    public function getAFEDatumDesGültigkeitsendeDerMitgliedschaftDesGeographis()
    {
        return $this->AFE_Datum_des_Gültigkeitsende_der_Mitgliedschaft_des_geographis;
    }
}
