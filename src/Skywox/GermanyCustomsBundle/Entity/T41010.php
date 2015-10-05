<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T41010
 */
class T41010
{
    /**
     * @var integer
     */
    private $APU_SID_für_die_Beschreibung_der_Ausfuhrerstattungsnomenklatur;

    /**
     * @var integer
     */
    private $APV_SID_für_die_Ausfuhrerstattungsnomenklatur;

    /**
     * @var \DateTime
     */
    private $APW_Datum_des_Gültigkeitsbeginn_der_Beschreibung_der_Ausfuhrers;

    /**
     * @var \DateTime
     */
    private $APX_Datum_des_Gültigkeitsende_der_Beschreibung_der_Ausfuhrersta;

    /**
     * @var string
     */
    private $APY_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $APZ_Zusatzcodeart;

    /**
     * @var string
     */
    private $AQA_Ausfuhrerstattungscode;

    /**
     * @var string
     */
    private $AQB_Warenliniensuffix;

    /**
     * @var string
     */
    private $AQC_Beschreibung_der_Ausfuhrerstattungsnomenklatur;


    /**
     * Set APU_SID_für_die_Beschreibung_der_Ausfuhrerstattungsnomenklatur
     *
     * @param integer $aPUSIDFürDieBeschreibungDerAusfuhrerstattungsnomenklatur
     * @return T41010
     */
    public function setAPUSIDFürDieBeschreibungDerAusfuhrerstattungsnomenklatur($aPUSIDFürDieBeschreibungDerAusfuhrerstattungsnomenklatur)
    {
        $this->APU_SID_für_die_Beschreibung_der_Ausfuhrerstattungsnomenklatur = $aPUSIDFürDieBeschreibungDerAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get APU_SID_für_die_Beschreibung_der_Ausfuhrerstattungsnomenklatur
     *
     * @return integer 
     */
    public function getAPUSIDFürDieBeschreibungDerAusfuhrerstattungsnomenklatur()
    {
        return $this->APU_SID_für_die_Beschreibung_der_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set APV_SID_für_die_Ausfuhrerstattungsnomenklatur
     *
     * @param integer $aPVSIDFürDieAusfuhrerstattungsnomenklatur
     * @return T41010
     */
    public function setAPVSIDFürDieAusfuhrerstattungsnomenklatur($aPVSIDFürDieAusfuhrerstattungsnomenklatur)
    {
        $this->APV_SID_für_die_Ausfuhrerstattungsnomenklatur = $aPVSIDFürDieAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get APV_SID_für_die_Ausfuhrerstattungsnomenklatur
     *
     * @return integer 
     */
    public function getAPVSIDFürDieAusfuhrerstattungsnomenklatur()
    {
        return $this->APV_SID_für_die_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set APW_Datum_des_Gültigkeitsbeginn_der_Beschreibung_der_Ausfuhrers
     *
     * @param \DateTime $aPWDatumDesGültigkeitsbeginnDerBeschreibungDerAusfuhrers
     * @return T41010
     */
    public function setAPWDatumDesGültigkeitsbeginnDerBeschreibungDerAusfuhrers($aPWDatumDesGültigkeitsbeginnDerBeschreibungDerAusfuhrers)
    {
        $this->APW_Datum_des_Gültigkeitsbeginn_der_Beschreibung_der_Ausfuhrers = $aPWDatumDesGültigkeitsbeginnDerBeschreibungDerAusfuhrers;

        return $this;
    }

    /**
     * Get APW_Datum_des_Gültigkeitsbeginn_der_Beschreibung_der_Ausfuhrers
     *
     * @return \DateTime 
     */
    public function getAPWDatumDesGültigkeitsbeginnDerBeschreibungDerAusfuhrers()
    {
        return $this->APW_Datum_des_Gültigkeitsbeginn_der_Beschreibung_der_Ausfuhrers;
    }

    /**
     * Set APX_Datum_des_Gültigkeitsende_der_Beschreibung_der_Ausfuhrersta
     *
     * @param \DateTime $aPXDatumDesGültigkeitsendeDerBeschreibungDerAusfuhrersta
     * @return T41010
     */
    public function setAPXDatumDesGültigkeitsendeDerBeschreibungDerAusfuhrersta($aPXDatumDesGültigkeitsendeDerBeschreibungDerAusfuhrersta)
    {
        $this->APX_Datum_des_Gültigkeitsende_der_Beschreibung_der_Ausfuhrersta = $aPXDatumDesGültigkeitsendeDerBeschreibungDerAusfuhrersta;

        return $this;
    }

    /**
     * Get APX_Datum_des_Gültigkeitsende_der_Beschreibung_der_Ausfuhrersta
     *
     * @return \DateTime 
     */
    public function getAPXDatumDesGültigkeitsendeDerBeschreibungDerAusfuhrersta()
    {
        return $this->APX_Datum_des_Gültigkeitsende_der_Beschreibung_der_Ausfuhrersta;
    }

    /**
     * Set APY_Warennomenklatur_ID
     *
     * @param string $aPYWarennomenklaturID
     * @return T41010
     */
    public function setAPYWarennomenklaturID($aPYWarennomenklaturID)
    {
        $this->APY_Warennomenklatur_ID = $aPYWarennomenklaturID;

        return $this;
    }

    /**
     * Get APY_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAPYWarennomenklaturID()
    {
        return $this->APY_Warennomenklatur_ID;
    }

    /**
     * Set APZ_Zusatzcodeart
     *
     * @param string $aPZZusatzcodeart
     * @return T41010
     */
    public function setAPZZusatzcodeart($aPZZusatzcodeart)
    {
        $this->APZ_Zusatzcodeart = $aPZZusatzcodeart;

        return $this;
    }

    /**
     * Get APZ_Zusatzcodeart
     *
     * @return string 
     */
    public function getAPZZusatzcodeart()
    {
        return $this->APZ_Zusatzcodeart;
    }

    /**
     * Set AQA_Ausfuhrerstattungscode
     *
     * @param string $aQAAusfuhrerstattungscode
     * @return T41010
     */
    public function setAQAAusfuhrerstattungscode($aQAAusfuhrerstattungscode)
    {
        $this->AQA_Ausfuhrerstattungscode = $aQAAusfuhrerstattungscode;

        return $this;
    }

    /**
     * Get AQA_Ausfuhrerstattungscode
     *
     * @return string 
     */
    public function getAQAAusfuhrerstattungscode()
    {
        return $this->AQA_Ausfuhrerstattungscode;
    }

    /**
     * Set AQB_Warenliniensuffix
     *
     * @param string $aQBWarenliniensuffix
     * @return T41010
     */
    public function setAQBWarenliniensuffix($aQBWarenliniensuffix)
    {
        $this->AQB_Warenliniensuffix = $aQBWarenliniensuffix;

        return $this;
    }

    /**
     * Get AQB_Warenliniensuffix
     *
     * @return string 
     */
    public function getAQBWarenliniensuffix()
    {
        return $this->AQB_Warenliniensuffix;
    }

    /**
     * Set AQC_Beschreibung_der_Ausfuhrerstattungsnomenklatur
     *
     * @param string $aQCBeschreibungDerAusfuhrerstattungsnomenklatur
     * @return T41010
     */
    public function setAQCBeschreibungDerAusfuhrerstattungsnomenklatur($aQCBeschreibungDerAusfuhrerstattungsnomenklatur)
    {
        $this->AQC_Beschreibung_der_Ausfuhrerstattungsnomenklatur = $aQCBeschreibungDerAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get AQC_Beschreibung_der_Ausfuhrerstattungsnomenklatur
     *
     * @return string 
     */
    public function getAQCBeschreibungDerAusfuhrerstattungsnomenklatur()
    {
        return $this->AQC_Beschreibung_der_Ausfuhrerstattungsnomenklatur;
    }
}
