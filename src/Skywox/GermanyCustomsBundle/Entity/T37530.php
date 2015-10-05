<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37530
 */
class T37530
{
    /**
     * @var integer
     */
    private $ANC_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AND_Datum_und_Uhrzeit;

    /**
     * @var \DateTime
     */
    private $ANE_Datum_der_Schließung;

    /**
     * @var string
     */
    private $ANF_Übertragungsmenge;

    /**
     * @var integer
     */
    private $ANG_SID_des_Zielkontingents;


    /**
     * Set ANC_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aNCSIDDerQUOTABeschreibung
     * @return T37530
     */
    public function setANCSIDDerQUOTABeschreibung($aNCSIDDerQUOTABeschreibung)
    {
        $this->ANC_SID_der_QUOTA_Beschreibung = $aNCSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get ANC_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getANCSIDDerQUOTABeschreibung()
    {
        return $this->ANC_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AND_Datum_und_Uhrzeit
     *
     * @param \DateTime $aNDDatumUndUhrzeit
     * @return T37530
     */
    public function setANDDatumUndUhrzeit($aNDDatumUndUhrzeit)
    {
        $this->AND_Datum_und_Uhrzeit = $aNDDatumUndUhrzeit;

        return $this;
    }

    /**
     * Get AND_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getANDDatumUndUhrzeit()
    {
        return $this->AND_Datum_und_Uhrzeit;
    }

    /**
     * Set ANE_Datum_der_Schließung
     *
     * @param \DateTime $aNEDatumDerSchließung
     * @return T37530
     */
    public function setANEDatumDerSchließung($aNEDatumDerSchließung)
    {
        $this->ANE_Datum_der_Schließung = $aNEDatumDerSchließung;

        return $this;
    }

    /**
     * Get ANE_Datum_der_Schließung
     *
     * @return \DateTime 
     */
    public function getANEDatumDerSchließung()
    {
        return $this->ANE_Datum_der_Schließung;
    }

    /**
     * Set ANF_Übertragungsmenge
     *
     * @param string $aNFÜbertragungsmenge
     * @return T37530
     */
    public function setANFÜbertragungsmenge($aNFÜbertragungsmenge)
    {
        $this->ANF_Übertragungsmenge = $aNFÜbertragungsmenge;

        return $this;
    }

    /**
     * Get ANF_Übertragungsmenge
     *
     * @return string 
     */
    public function getANFÜbertragungsmenge()
    {
        return $this->ANF_Übertragungsmenge;
    }

    /**
     * Set ANG_SID_des_Zielkontingents
     *
     * @param integer $aNGSIDDesZielkontingents
     * @return T37530
     */
    public function setANGSIDDesZielkontingents($aNGSIDDesZielkontingents)
    {
        $this->ANG_SID_des_Zielkontingents = $aNGSIDDesZielkontingents;

        return $this;
    }

    /**
     * Get ANG_SID_des_Zielkontingents
     *
     * @return integer 
     */
    public function getANGSIDDesZielkontingents()
    {
        return $this->ANG_SID_des_Zielkontingents;
    }
}
