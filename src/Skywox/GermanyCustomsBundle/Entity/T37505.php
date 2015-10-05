<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37505
 */
class T37505
{
    /**
     * @var integer
     */
    private $AMM_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AMN_Datum_und_Uhrzeit;

    /**
     * @var \DateTime
     */
    private $AMO_Datum_der_Aufhebung_der_Sperrung;


    /**
     * Set AMM_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMMSIDDerQUOTABeschreibung
     * @return T37505
     */
    public function setAMMSIDDerQUOTABeschreibung($aMMSIDDerQUOTABeschreibung)
    {
        $this->AMM_SID_der_QUOTA_Beschreibung = $aMMSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMM_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMMSIDDerQUOTABeschreibung()
    {
        return $this->AMM_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AMN_Datum_und_Uhrzeit
     *
     * @param \DateTime $aMNDatumUndUhrzeit
     * @return T37505
     */
    public function setAMNDatumUndUhrzeit($aMNDatumUndUhrzeit)
    {
        $this->AMN_Datum_und_Uhrzeit = $aMNDatumUndUhrzeit;

        return $this;
    }

    /**
     * Get AMN_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getAMNDatumUndUhrzeit()
    {
        return $this->AMN_Datum_und_Uhrzeit;
    }

    /**
     * Set AMO_Datum_der_Aufhebung_der_Sperrung
     *
     * @param \DateTime $aMODatumDerAufhebungDerSperrung
     * @return T37505
     */
    public function setAMODatumDerAufhebungDerSperrung($aMODatumDerAufhebungDerSperrung)
    {
        $this->AMO_Datum_der_Aufhebung_der_Sperrung = $aMODatumDerAufhebungDerSperrung;

        return $this;
    }

    /**
     * Get AMO_Datum_der_Aufhebung_der_Sperrung
     *
     * @return \DateTime 
     */
    public function getAMODatumDerAufhebungDerSperrung()
    {
        return $this->AMO_Datum_der_Aufhebung_der_Sperrung;
    }
}
