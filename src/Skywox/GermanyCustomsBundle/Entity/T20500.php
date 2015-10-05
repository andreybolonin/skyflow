<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T20500
 */
class T20500
{
    /**
     * @var string
     */
    private $ACA_Bescheinigungsartcode;

    /**
     * @var string
     */
    private $ACB_Bescheinigungskontrollnummer;

    /**
     * @var \DateTime
     */
    private $ACC_Datum_des_Gültigkeitsbeginns_der_Bescheinigung;

    /**
     * @var \DateTime
     */
    private $ACD_Gültigkeitsendedatum_der_Bescheinigung;


    /**
     * Set ACA_Bescheinigungsartcode
     *
     * @param string $aCABescheinigungsartcode
     * @return T20500
     */
    public function setACABescheinigungsartcode($aCABescheinigungsartcode)
    {
        $this->ACA_Bescheinigungsartcode = $aCABescheinigungsartcode;

        return $this;
    }

    /**
     * Get ACA_Bescheinigungsartcode
     *
     * @return string 
     */
    public function getACABescheinigungsartcode()
    {
        return $this->ACA_Bescheinigungsartcode;
    }

    /**
     * Set ACB_Bescheinigungskontrollnummer
     *
     * @param string $aCBBescheinigungskontrollnummer
     * @return T20500
     */
    public function setACBBescheinigungskontrollnummer($aCBBescheinigungskontrollnummer)
    {
        $this->ACB_Bescheinigungskontrollnummer = $aCBBescheinigungskontrollnummer;

        return $this;
    }

    /**
     * Get ACB_Bescheinigungskontrollnummer
     *
     * @return string 
     */
    public function getACBBescheinigungskontrollnummer()
    {
        return $this->ACB_Bescheinigungskontrollnummer;
    }

    /**
     * Set ACC_Datum_des_Gültigkeitsbeginns_der_Bescheinigung
     *
     * @param \DateTime $aCCDatumDesGültigkeitsbeginnsDerBescheinigung
     * @return T20500
     */
    public function setACCDatumDesGültigkeitsbeginnsDerBescheinigung($aCCDatumDesGültigkeitsbeginnsDerBescheinigung)
    {
        $this->ACC_Datum_des_Gültigkeitsbeginns_der_Bescheinigung = $aCCDatumDesGültigkeitsbeginnsDerBescheinigung;

        return $this;
    }

    /**
     * Get ACC_Datum_des_Gültigkeitsbeginns_der_Bescheinigung
     *
     * @return \DateTime 
     */
    public function getACCDatumDesGültigkeitsbeginnsDerBescheinigung()
    {
        return $this->ACC_Datum_des_Gültigkeitsbeginns_der_Bescheinigung;
    }

    /**
     * Set ACD_Gültigkeitsendedatum_der_Bescheinigung
     *
     * @param \DateTime $aCDGültigkeitsendedatumDerBescheinigung
     * @return T20500
     */
    public function setACDGültigkeitsendedatumDerBescheinigung($aCDGültigkeitsendedatumDerBescheinigung)
    {
        $this->ACD_Gültigkeitsendedatum_der_Bescheinigung = $aCDGültigkeitsendedatumDerBescheinigung;

        return $this;
    }

    /**
     * Get ACD_Gültigkeitsendedatum_der_Bescheinigung
     *
     * @return \DateTime 
     */
    public function getACDGültigkeitsendedatumDerBescheinigung()
    {
        return $this->ACD_Gültigkeitsendedatum_der_Bescheinigung;
    }
}
