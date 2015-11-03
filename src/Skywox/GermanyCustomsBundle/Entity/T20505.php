<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T20505
 */
class T20505
{
    /**
     * @var integer
     */
    private $ACE_SID_der_Bescheinigungsbeschreibung;

    /**
     * @var string
     */
    private $ACF_Bescheinigungsartcode;

    /**
     * @var string
     */
    private $ACG_Bescheinigungskontrollnummer;

    /**
     * @var \DateTime
     */
    private $ACH_Datum_des_Gültigkeitsbeginn_der_Bescheinigung;

    /**
     * @var \DateTime
     */
    private $ACI_Datum_des_Gültigkeitsende_der_Bescheinigung;

    /**
     * @var string
     */
    private $ACJ_Beschreibung_der_Bescheinigung;


    /**
     * Set ACE_SID_der_Bescheinigungsbeschreibung
     *
     * @param integer $aCESIDDerBescheinigungsbeschreibung
     * @return T20505
     */
    public function setACESIDDerBescheinigungsbeschreibung($aCESIDDerBescheinigungsbeschreibung)
    {
        $this->ACE_SID_der_Bescheinigungsbeschreibung = $aCESIDDerBescheinigungsbeschreibung;

        return $this;
    }

    /**
     * Get ACE_SID_der_Bescheinigungsbeschreibung
     *
     * @return integer 
     */
    public function getACESIDDerBescheinigungsbeschreibung()
    {
        return $this->ACE_SID_der_Bescheinigungsbeschreibung;
    }

    /**
     * Set ACF_Bescheinigungsartcode
     *
     * @param string $aCFBescheinigungsartcode
     * @return T20505
     */
    public function setACFBescheinigungsartcode($aCFBescheinigungsartcode)
    {
        $this->ACF_Bescheinigungsartcode = $aCFBescheinigungsartcode;

        return $this;
    }

    /**
     * Get ACF_Bescheinigungsartcode
     *
     * @return string 
     */
    public function getACFBescheinigungsartcode()
    {
        return $this->ACF_Bescheinigungsartcode;
    }

    /**
     * Set ACG_Bescheinigungskontrollnummer
     *
     * @param string $aCGBescheinigungskontrollnummer
     * @return T20505
     */
    public function setACGBescheinigungskontrollnummer($aCGBescheinigungskontrollnummer)
    {
        $this->ACG_Bescheinigungskontrollnummer = $aCGBescheinigungskontrollnummer;

        return $this;
    }

    /**
     * Get ACG_Bescheinigungskontrollnummer
     *
     * @return string 
     */
    public function getACGBescheinigungskontrollnummer()
    {
        return $this->ACG_Bescheinigungskontrollnummer;
    }

    /**
     * Set ACH_Datum_des_Gültigkeitsbeginn_der_Bescheinigung
     *
     * @param \DateTime $aCHDatumDesGültigkeitsbeginnDerBescheinigung
     * @return T20505
     */
    public function setACHDatumDesGültigkeitsbeginnDerBescheinigung($aCHDatumDesGültigkeitsbeginnDerBescheinigung)
    {
        $this->ACH_Datum_des_Gültigkeitsbeginn_der_Bescheinigung = $aCHDatumDesGültigkeitsbeginnDerBescheinigung;

        return $this;
    }

    /**
     * Get ACH_Datum_des_Gültigkeitsbeginn_der_Bescheinigung
     *
     * @return \DateTime 
     */
    public function getACHDatumDesGültigkeitsbeginnDerBescheinigung()
    {
        return $this->ACH_Datum_des_Gültigkeitsbeginn_der_Bescheinigung;
    }

    /**
     * Set ACI_Datum_des_Gültigkeitsende_der_Bescheinigung
     *
     * @param \DateTime $aCIDatumDesGültigkeitsendeDerBescheinigung
     * @return T20505
     */
    public function setACIDatumDesGültigkeitsendeDerBescheinigung($aCIDatumDesGültigkeitsendeDerBescheinigung)
    {
        $this->ACI_Datum_des_Gültigkeitsende_der_Bescheinigung = $aCIDatumDesGültigkeitsendeDerBescheinigung;

        return $this;
    }

    /**
     * Get ACI_Datum_des_Gültigkeitsende_der_Bescheinigung
     *
     * @return \DateTime 
     */
    public function getACIDatumDesGültigkeitsendeDerBescheinigung()
    {
        return $this->ACI_Datum_des_Gültigkeitsende_der_Bescheinigung;
    }

    /**
     * Set ACJ_Beschreibung_der_Bescheinigung
     *
     * @param string $aCJBeschreibungDerBescheinigung
     * @return T20505
     */
    public function setACJBeschreibungDerBescheinigung($aCJBeschreibungDerBescheinigung)
    {
        $this->ACJ_Beschreibung_der_Bescheinigung = $aCJBeschreibungDerBescheinigung;

        return $this;
    }

    /**
     * Get ACJ_Beschreibung_der_Bescheinigung
     *
     * @return string 
     */
    public function getACJBeschreibungDerBescheinigung()
    {
        return $this->ACJ_Beschreibung_der_Bescheinigung;
    }
}
