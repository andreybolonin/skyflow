<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37010
 */
class T37010
{
    /**
     * @var integer
     */
    private $ALW_SID_des_Zeitraums_der_Sperrung;

    /**
     * @var integer
     */
    private $ALX_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $ALY_Beginn_der_Sperrung;

    /**
     * @var \DateTime
     */
    private $ALZ_Ende_der_Sperrung;

    /**
     * @var integer
     */
    private $AMA_Typ_des_Zeitraums_der_Sperrung;

    /**
     * @var string
     */
    private $AMB_Kurzbeschreibung_Grund_der_Sperrung;


    /**
     * Set ALW_SID_des_Zeitraums_der_Sperrung
     *
     * @param integer $aLWSIDDesZeitraumsDerSperrung
     * @return T37010
     */
    public function setALWSIDDesZeitraumsDerSperrung($aLWSIDDesZeitraumsDerSperrung)
    {
        $this->ALW_SID_des_Zeitraums_der_Sperrung = $aLWSIDDesZeitraumsDerSperrung;

        return $this;
    }

    /**
     * Get ALW_SID_des_Zeitraums_der_Sperrung
     *
     * @return integer 
     */
    public function getALWSIDDesZeitraumsDerSperrung()
    {
        return $this->ALW_SID_des_Zeitraums_der_Sperrung;
    }

    /**
     * Set ALX_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aLXSIDDerQUOTABeschreibung
     * @return T37010
     */
    public function setALXSIDDerQUOTABeschreibung($aLXSIDDerQUOTABeschreibung)
    {
        $this->ALX_SID_der_QUOTA_Beschreibung = $aLXSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get ALX_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getALXSIDDerQUOTABeschreibung()
    {
        return $this->ALX_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set ALY_Beginn_der_Sperrung
     *
     * @param \DateTime $aLYBeginnDerSperrung
     * @return T37010
     */
    public function setALYBeginnDerSperrung($aLYBeginnDerSperrung)
    {
        $this->ALY_Beginn_der_Sperrung = $aLYBeginnDerSperrung;

        return $this;
    }

    /**
     * Get ALY_Beginn_der_Sperrung
     *
     * @return \DateTime 
     */
    public function getALYBeginnDerSperrung()
    {
        return $this->ALY_Beginn_der_Sperrung;
    }

    /**
     * Set ALZ_Ende_der_Sperrung
     *
     * @param \DateTime $aLZEndeDerSperrung
     * @return T37010
     */
    public function setALZEndeDerSperrung($aLZEndeDerSperrung)
    {
        $this->ALZ_Ende_der_Sperrung = $aLZEndeDerSperrung;

        return $this;
    }

    /**
     * Get ALZ_Ende_der_Sperrung
     *
     * @return \DateTime 
     */
    public function getALZEndeDerSperrung()
    {
        return $this->ALZ_Ende_der_Sperrung;
    }

    /**
     * Set AMA_Typ_des_Zeitraums_der_Sperrung
     *
     * @param integer $aMATypDesZeitraumsDerSperrung
     * @return T37010
     */
    public function setAMATypDesZeitraumsDerSperrung($aMATypDesZeitraumsDerSperrung)
    {
        $this->AMA_Typ_des_Zeitraums_der_Sperrung = $aMATypDesZeitraumsDerSperrung;

        return $this;
    }

    /**
     * Get AMA_Typ_des_Zeitraums_der_Sperrung
     *
     * @return integer 
     */
    public function getAMATypDesZeitraumsDerSperrung()
    {
        return $this->AMA_Typ_des_Zeitraums_der_Sperrung;
    }

    /**
     * Set AMB_Kurzbeschreibung_Grund_der_Sperrung
     *
     * @param string $aMBKurzbeschreibungGrundDerSperrung
     * @return T37010
     */
    public function setAMBKurzbeschreibungGrundDerSperrung($aMBKurzbeschreibungGrundDerSperrung)
    {
        $this->AMB_Kurzbeschreibung_Grund_der_Sperrung = $aMBKurzbeschreibungGrundDerSperrung;

        return $this;
    }

    /**
     * Get AMB_Kurzbeschreibung_Grund_der_Sperrung
     *
     * @return string 
     */
    public function getAMBKurzbeschreibungGrundDerSperrung()
    {
        return $this->AMB_Kurzbeschreibung_Grund_der_Sperrung;
    }
}
