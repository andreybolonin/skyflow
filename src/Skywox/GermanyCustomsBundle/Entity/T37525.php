<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37525
 */
class T37525
{
    /**
     * @var integer
     */
    private $AMZ_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $ANA_Datum_und_Uhrzeit;

    /**
     * @var \DateTime
     */
    private $ANB_Datum_der_Aufhebung_der_Aussetzung;


    /**
     * Set AMZ_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMZSIDDerQUOTABeschreibung
     * @return T37525
     */
    public function setAMZSIDDerQUOTABeschreibung($aMZSIDDerQUOTABeschreibung)
    {
        $this->AMZ_SID_der_QUOTA_Beschreibung = $aMZSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMZ_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMZSIDDerQUOTABeschreibung()
    {
        return $this->AMZ_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set ANA_Datum_und_Uhrzeit
     *
     * @param \DateTime $aNADatumUndUhrzeit
     * @return T37525
     */
    public function setANADatumUndUhrzeit($aNADatumUndUhrzeit)
    {
        $this->ANA_Datum_und_Uhrzeit = $aNADatumUndUhrzeit;

        return $this;
    }

    /**
     * Get ANA_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getANADatumUndUhrzeit()
    {
        return $this->ANA_Datum_und_Uhrzeit;
    }

    /**
     * Set ANB_Datum_der_Aufhebung_der_Aussetzung
     *
     * @param \DateTime $aNBDatumDerAufhebungDerAussetzung
     * @return T37525
     */
    public function setANBDatumDerAufhebungDerAussetzung($aNBDatumDerAufhebungDerAussetzung)
    {
        $this->ANB_Datum_der_Aufhebung_der_Aussetzung = $aNBDatumDerAufhebungDerAussetzung;

        return $this;
    }

    /**
     * Get ANB_Datum_der_Aufhebung_der_Aussetzung
     *
     * @return \DateTime 
     */
    public function getANBDatumDerAufhebungDerAussetzung()
    {
        return $this->ANB_Datum_der_Aufhebung_der_Aussetzung;
    }
}
