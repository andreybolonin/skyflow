<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37510
 */
class T37510
{
    /**
     * @var integer
     */
    private $AMP_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AMQ_Datum_und_Uhrzeit;

    /**
     * @var string
     */
    private $AMR_kritischer_Status;

    /**
     * @var \DateTime
     */
    private $AMS_Datum_des_Statuswechsels;


    /**
     * Set AMP_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMPSIDDerQUOTABeschreibung
     * @return T37510
     */
    public function setAMPSIDDerQUOTABeschreibung($aMPSIDDerQUOTABeschreibung)
    {
        $this->AMP_SID_der_QUOTA_Beschreibung = $aMPSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMP_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMPSIDDerQUOTABeschreibung()
    {
        return $this->AMP_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AMQ_Datum_und_Uhrzeit
     *
     * @param \DateTime $aMQDatumUndUhrzeit
     * @return T37510
     */
    public function setAMQDatumUndUhrzeit($aMQDatumUndUhrzeit)
    {
        $this->AMQ_Datum_und_Uhrzeit = $aMQDatumUndUhrzeit;

        return $this;
    }

    /**
     * Get AMQ_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getAMQDatumUndUhrzeit()
    {
        return $this->AMQ_Datum_und_Uhrzeit;
    }

    /**
     * Set AMR_kritischer_Status
     *
     * @param string $aMRKritischerStatus
     * @return T37510
     */
    public function setAMRKritischerStatus($aMRKritischerStatus)
    {
        $this->AMR_kritischer_Status = $aMRKritischerStatus;

        return $this;
    }

    /**
     * Get AMR_kritischer_Status
     *
     * @return string 
     */
    public function getAMRKritischerStatus()
    {
        return $this->AMR_kritischer_Status;
    }

    /**
     * Set AMS_Datum_des_Statuswechsels
     *
     * @param \DateTime $aMSDatumDesStatuswechsels
     * @return T37510
     */
    public function setAMSDatumDesStatuswechsels($aMSDatumDesStatuswechsels)
    {
        $this->AMS_Datum_des_Statuswechsels = $aMSDatumDesStatuswechsels;

        return $this;
    }

    /**
     * Get AMS_Datum_des_Statuswechsels
     *
     * @return \DateTime 
     */
    public function getAMSDatumDesStatuswechsels()
    {
        return $this->AMS_Datum_des_Statuswechsels;
    }
}
