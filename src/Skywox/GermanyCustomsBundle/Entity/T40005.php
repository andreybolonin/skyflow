<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40005
 */
class T40005
{
    /**
     * @var integer
     */
    private $ANR_SID_für_Warennomenklaturführungsstriche;

    /**
     * @var integer
     */
    private $ANS_SID_für_die_Warennomenklatur;

    /**
     * @var \DateTime
     */
    private $ANT_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturführungss;

    /**
     * @var \DateTime
     */
    private $ANU_Gültigkeitsendedatum_der_Warennomenklaturführungsstriche;

    /**
     * @var string
     */
    private $ANV_Anzahl_der_Führungsstriche;

    /**
     * @var string
     */
    private $ANW_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $ANX_Warenliniensuffix;


    /**
     * Set ANR_SID_für_Warennomenklaturführungsstriche
     *
     * @param integer $aNRSIDFürWarennomenklaturführungsstriche
     * @return T40005
     */
    public function setANRSIDFürWarennomenklaturführungsstriche($aNRSIDFürWarennomenklaturführungsstriche)
    {
        $this->ANR_SID_für_Warennomenklaturführungsstriche = $aNRSIDFürWarennomenklaturführungsstriche;

        return $this;
    }

    /**
     * Get ANR_SID_für_Warennomenklaturführungsstriche
     *
     * @return integer 
     */
    public function getANRSIDFürWarennomenklaturführungsstriche()
    {
        return $this->ANR_SID_für_Warennomenklaturführungsstriche;
    }

    /**
     * Set ANS_SID_für_die_Warennomenklatur
     *
     * @param integer $aNSSIDFürDieWarennomenklatur
     * @return T40005
     */
    public function setANSSIDFürDieWarennomenklatur($aNSSIDFürDieWarennomenklatur)
    {
        $this->ANS_SID_für_die_Warennomenklatur = $aNSSIDFürDieWarennomenklatur;

        return $this;
    }

    /**
     * Get ANS_SID_für_die_Warennomenklatur
     *
     * @return integer 
     */
    public function getANSSIDFürDieWarennomenklatur()
    {
        return $this->ANS_SID_für_die_Warennomenklatur;
    }

    /**
     * Set ANT_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturführungss
     *
     * @param \DateTime $aNTDatumDesGültigkeitsbeginnsDerWarennomenklaturführungss
     * @return T40005
     */
    public function setANTDatumDesGültigkeitsbeginnsDerWarennomenklaturführungss($aNTDatumDesGültigkeitsbeginnsDerWarennomenklaturführungss)
    {
        $this->ANT_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturführungss = $aNTDatumDesGültigkeitsbeginnsDerWarennomenklaturführungss;

        return $this;
    }

    /**
     * Get ANT_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturführungss
     *
     * @return \DateTime 
     */
    public function getANTDatumDesGültigkeitsbeginnsDerWarennomenklaturführungss()
    {
        return $this->ANT_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturführungss;
    }

    /**
     * Set ANU_Gültigkeitsendedatum_der_Warennomenklaturführungsstriche
     *
     * @param \DateTime $aNUGültigkeitsendedatumDerWarennomenklaturführungsstriche
     * @return T40005
     */
    public function setANUGültigkeitsendedatumDerWarennomenklaturführungsstriche($aNUGültigkeitsendedatumDerWarennomenklaturführungsstriche)
    {
        $this->ANU_Gültigkeitsendedatum_der_Warennomenklaturführungsstriche = $aNUGültigkeitsendedatumDerWarennomenklaturführungsstriche;

        return $this;
    }

    /**
     * Get ANU_Gültigkeitsendedatum_der_Warennomenklaturführungsstriche
     *
     * @return \DateTime 
     */
    public function getANUGültigkeitsendedatumDerWarennomenklaturführungsstriche()
    {
        return $this->ANU_Gültigkeitsendedatum_der_Warennomenklaturführungsstriche;
    }

    /**
     * Set ANV_Anzahl_der_Führungsstriche
     *
     * @param string $aNVAnzahlDerFührungsstriche
     * @return T40005
     */
    public function setANVAnzahlDerFührungsstriche($aNVAnzahlDerFührungsstriche)
    {
        $this->ANV_Anzahl_der_Führungsstriche = $aNVAnzahlDerFührungsstriche;

        return $this;
    }

    /**
     * Get ANV_Anzahl_der_Führungsstriche
     *
     * @return string 
     */
    public function getANVAnzahlDerFührungsstriche()
    {
        return $this->ANV_Anzahl_der_Führungsstriche;
    }

    /**
     * Set ANW_Warennomenklatur_ID
     *
     * @param string $aNWWarennomenklaturID
     * @return T40005
     */
    public function setANWWarennomenklaturID($aNWWarennomenklaturID)
    {
        $this->ANW_Warennomenklatur_ID = $aNWWarennomenklaturID;

        return $this;
    }

    /**
     * Get ANW_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getANWWarennomenklaturID()
    {
        return $this->ANW_Warennomenklatur_ID;
    }

    /**
     * Set ANX_Warenliniensuffix
     *
     * @param string $aNXWarenliniensuffix
     * @return T40005
     */
    public function setANXWarenliniensuffix($aNXWarenliniensuffix)
    {
        $this->ANX_Warenliniensuffix = $aNXWarenliniensuffix;

        return $this;
    }

    /**
     * Get ANX_Warenliniensuffix
     *
     * @return string 
     */
    public function getANXWarenliniensuffix()
    {
        return $this->ANX_Warenliniensuffix;
    }
}
