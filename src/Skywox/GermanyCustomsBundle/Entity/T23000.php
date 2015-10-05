<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T23000
 */
class T23000
{
    /**
     * @var string
     */
    private $ADA_Abgabenart_ID;

    /**
     * @var \DateTime
     */
    private $ADB_Datum_des_Gültigkeitsbeginns_der_Abgabenart;

    /**
     * @var \DateTime
     */
    private $ADC_Gültigkeitsendedatum_der_Abgabenart;

    /**
     * @var string
     */
    private $ADD_Anwendbarkeitscode_des_Abgabenbetrags;

    /**
     * @var string
     */
    private $ADE_Anwendbarkeitscode_der_Maßeinheit;

    /**
     * @var string
     */
    private $ADF_Anwendbarkeitscode_der_Währungseinheit;

    /**
     * @var string
     */
    private $ADG_Beschreibung_der_Abgabenart;


    /**
     * Set ADA_Abgabenart_ID
     *
     * @param string $aDAAbgabenartID
     * @return T23000
     */
    public function setADAAbgabenartID($aDAAbgabenartID)
    {
        $this->ADA_Abgabenart_ID = $aDAAbgabenartID;

        return $this;
    }

    /**
     * Get ADA_Abgabenart_ID
     *
     * @return string 
     */
    public function getADAAbgabenartID()
    {
        return $this->ADA_Abgabenart_ID;
    }

    /**
     * Set ADB_Datum_des_Gültigkeitsbeginns_der_Abgabenart
     *
     * @param \DateTime $aDBDatumDesGültigkeitsbeginnsDerAbgabenart
     * @return T23000
     */
    public function setADBDatumDesGültigkeitsbeginnsDerAbgabenart($aDBDatumDesGültigkeitsbeginnsDerAbgabenart)
    {
        $this->ADB_Datum_des_Gültigkeitsbeginns_der_Abgabenart = $aDBDatumDesGültigkeitsbeginnsDerAbgabenart;

        return $this;
    }

    /**
     * Get ADB_Datum_des_Gültigkeitsbeginns_der_Abgabenart
     *
     * @return \DateTime 
     */
    public function getADBDatumDesGültigkeitsbeginnsDerAbgabenart()
    {
        return $this->ADB_Datum_des_Gültigkeitsbeginns_der_Abgabenart;
    }

    /**
     * Set ADC_Gültigkeitsendedatum_der_Abgabenart
     *
     * @param \DateTime $aDCGültigkeitsendedatumDerAbgabenart
     * @return T23000
     */
    public function setADCGültigkeitsendedatumDerAbgabenart($aDCGültigkeitsendedatumDerAbgabenart)
    {
        $this->ADC_Gültigkeitsendedatum_der_Abgabenart = $aDCGültigkeitsendedatumDerAbgabenart;

        return $this;
    }

    /**
     * Get ADC_Gültigkeitsendedatum_der_Abgabenart
     *
     * @return \DateTime 
     */
    public function getADCGültigkeitsendedatumDerAbgabenart()
    {
        return $this->ADC_Gültigkeitsendedatum_der_Abgabenart;
    }

    /**
     * Set ADD_Anwendbarkeitscode_des_Abgabenbetrags
     *
     * @param string $aDDAnwendbarkeitscodeDesAbgabenbetrags
     * @return T23000
     */
    public function setADDAnwendbarkeitscodeDesAbgabenbetrags($aDDAnwendbarkeitscodeDesAbgabenbetrags)
    {
        $this->ADD_Anwendbarkeitscode_des_Abgabenbetrags = $aDDAnwendbarkeitscodeDesAbgabenbetrags;

        return $this;
    }

    /**
     * Get ADD_Anwendbarkeitscode_des_Abgabenbetrags
     *
     * @return string 
     */
    public function getADDAnwendbarkeitscodeDesAbgabenbetrags()
    {
        return $this->ADD_Anwendbarkeitscode_des_Abgabenbetrags;
    }

    /**
     * Set ADE_Anwendbarkeitscode_der_Maßeinheit
     *
     * @param string $aDEAnwendbarkeitscodeDerMaßeinheit
     * @return T23000
     */
    public function setADEAnwendbarkeitscodeDerMaßeinheit($aDEAnwendbarkeitscodeDerMaßeinheit)
    {
        $this->ADE_Anwendbarkeitscode_der_Maßeinheit = $aDEAnwendbarkeitscodeDerMaßeinheit;

        return $this;
    }

    /**
     * Get ADE_Anwendbarkeitscode_der_Maßeinheit
     *
     * @return string 
     */
    public function getADEAnwendbarkeitscodeDerMaßeinheit()
    {
        return $this->ADE_Anwendbarkeitscode_der_Maßeinheit;
    }

    /**
     * Set ADF_Anwendbarkeitscode_der_Währungseinheit
     *
     * @param string $aDFAnwendbarkeitscodeDerWährungseinheit
     * @return T23000
     */
    public function setADFAnwendbarkeitscodeDerWährungseinheit($aDFAnwendbarkeitscodeDerWährungseinheit)
    {
        $this->ADF_Anwendbarkeitscode_der_Währungseinheit = $aDFAnwendbarkeitscodeDerWährungseinheit;

        return $this;
    }

    /**
     * Get ADF_Anwendbarkeitscode_der_Währungseinheit
     *
     * @return string 
     */
    public function getADFAnwendbarkeitscodeDerWährungseinheit()
    {
        return $this->ADF_Anwendbarkeitscode_der_Währungseinheit;
    }

    /**
     * Set ADG_Beschreibung_der_Abgabenart
     *
     * @param string $aDGBeschreibungDerAbgabenart
     * @return T23000
     */
    public function setADGBeschreibungDerAbgabenart($aDGBeschreibungDerAbgabenart)
    {
        $this->ADG_Beschreibung_der_Abgabenart = $aDGBeschreibungDerAbgabenart;

        return $this;
    }

    /**
     * Get ADG_Beschreibung_der_Abgabenart
     *
     * @return string 
     */
    public function getADGBeschreibungDerAbgabenart()
    {
        return $this->ADG_Beschreibung_der_Abgabenart;
    }
}
