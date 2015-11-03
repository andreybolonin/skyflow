<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37015
 */
class T37015
{
    /**
     * @var integer
     */
    private $AMC_SID_des_Zeitraums_der_Aussetzung;

    /**
     * @var integer
     */
    private $AMD_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AME_Beginn_der_Aussetzung;

    /**
     * @var \DateTime
     */
    private $AMF_Ende_der_Aussetzung;

    /**
     * @var string
     */
    private $AMG_Kurzbeschreibung_Grund_der_Aussetzung;


    /**
     * Set AMC_SID_des_Zeitraums_der_Aussetzung
     *
     * @param integer $aMCSIDDesZeitraumsDerAussetzung
     * @return T37015
     */
    public function setAMCSIDDesZeitraumsDerAussetzung($aMCSIDDesZeitraumsDerAussetzung)
    {
        $this->AMC_SID_des_Zeitraums_der_Aussetzung = $aMCSIDDesZeitraumsDerAussetzung;

        return $this;
    }

    /**
     * Get AMC_SID_des_Zeitraums_der_Aussetzung
     *
     * @return integer 
     */
    public function getAMCSIDDesZeitraumsDerAussetzung()
    {
        return $this->AMC_SID_des_Zeitraums_der_Aussetzung;
    }

    /**
     * Set AMD_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMDSIDDerQUOTABeschreibung
     * @return T37015
     */
    public function setAMDSIDDerQUOTABeschreibung($aMDSIDDerQUOTABeschreibung)
    {
        $this->AMD_SID_der_QUOTA_Beschreibung = $aMDSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMD_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMDSIDDerQUOTABeschreibung()
    {
        return $this->AMD_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AME_Beginn_der_Aussetzung
     *
     * @param \DateTime $aMEBeginnDerAussetzung
     * @return T37015
     */
    public function setAMEBeginnDerAussetzung($aMEBeginnDerAussetzung)
    {
        $this->AME_Beginn_der_Aussetzung = $aMEBeginnDerAussetzung;

        return $this;
    }

    /**
     * Get AME_Beginn_der_Aussetzung
     *
     * @return \DateTime 
     */
    public function getAMEBeginnDerAussetzung()
    {
        return $this->AME_Beginn_der_Aussetzung;
    }

    /**
     * Set AMF_Ende_der_Aussetzung
     *
     * @param \DateTime $aMFEndeDerAussetzung
     * @return T37015
     */
    public function setAMFEndeDerAussetzung($aMFEndeDerAussetzung)
    {
        $this->AMF_Ende_der_Aussetzung = $aMFEndeDerAussetzung;

        return $this;
    }

    /**
     * Get AMF_Ende_der_Aussetzung
     *
     * @return \DateTime 
     */
    public function getAMFEndeDerAussetzung()
    {
        return $this->AMF_Ende_der_Aussetzung;
    }

    /**
     * Set AMG_Kurzbeschreibung_Grund_der_Aussetzung
     *
     * @param string $aMGKurzbeschreibungGrundDerAussetzung
     * @return T37015
     */
    public function setAMGKurzbeschreibungGrundDerAussetzung($aMGKurzbeschreibungGrundDerAussetzung)
    {
        $this->AMG_Kurzbeschreibung_Grund_der_Aussetzung = $aMGKurzbeschreibungGrundDerAussetzung;

        return $this;
    }

    /**
     * Get AMG_Kurzbeschreibung_Grund_der_Aussetzung
     *
     * @return string 
     */
    public function getAMGKurzbeschreibungGrundDerAussetzung()
    {
        return $this->AMG_Kurzbeschreibung_Grund_der_Aussetzung;
    }
}
