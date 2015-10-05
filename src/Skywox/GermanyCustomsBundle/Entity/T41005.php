<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T41005
 */
class T41005
{
    /**
     * @var integer
     */
    private $APL_SID_für_die_Führungsstriche_der_Ausfuhrerstattungsnomenkla;

    /**
     * @var integer
     */
    private $APM_SID_der_Ausfuhrerstattungsnomenklatur;

    /**
     * @var \DateTime
     */
    private $APN_Datum_des_Gültigkeitsbeginns_der_Ausfuhrerstattungsnomenkla;

    /**
     * @var \DateTime
     */
    private $APO_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklaturführ;

    /**
     * @var string
     */
    private $APP_Anzahl_der_Ausfuhrerstattungsnomenklaturführungsstriche;

    /**
     * @var string
     */
    private $APQ_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $APR_Zusatzcodeart;

    /**
     * @var string
     */
    private $APS_Ausfuhrerstattungscode;

    /**
     * @var string
     */
    private $APT_Warenliniensuffix;


    /**
     * Set APL_SID_für_die_Führungsstriche_der_Ausfuhrerstattungsnomenkla
     *
     * @param integer $aPLSIDFürDieFührungsstricheDerAusfuhrerstattungsnomenkla
     * @return T41005
     */
    public function setAPLSIDFürDieFührungsstricheDerAusfuhrerstattungsnomenkla($aPLSIDFürDieFührungsstricheDerAusfuhrerstattungsnomenkla)
    {
        $this->APL_SID_für_die_Führungsstriche_der_Ausfuhrerstattungsnomenkla = $aPLSIDFürDieFührungsstricheDerAusfuhrerstattungsnomenkla;

        return $this;
    }

    /**
     * Get APL_SID_für_die_Führungsstriche_der_Ausfuhrerstattungsnomenkla
     *
     * @return integer 
     */
    public function getAPLSIDFürDieFührungsstricheDerAusfuhrerstattungsnomenkla()
    {
        return $this->APL_SID_für_die_Führungsstriche_der_Ausfuhrerstattungsnomenkla;
    }

    /**
     * Set APM_SID_der_Ausfuhrerstattungsnomenklatur
     *
     * @param integer $aPMSIDDerAusfuhrerstattungsnomenklatur
     * @return T41005
     */
    public function setAPMSIDDerAusfuhrerstattungsnomenklatur($aPMSIDDerAusfuhrerstattungsnomenklatur)
    {
        $this->APM_SID_der_Ausfuhrerstattungsnomenklatur = $aPMSIDDerAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get APM_SID_der_Ausfuhrerstattungsnomenklatur
     *
     * @return integer 
     */
    public function getAPMSIDDerAusfuhrerstattungsnomenklatur()
    {
        return $this->APM_SID_der_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set APN_Datum_des_Gültigkeitsbeginns_der_Ausfuhrerstattungsnomenkla
     *
     * @param \DateTime $aPNDatumDesGültigkeitsbeginnsDerAusfuhrerstattungsnomenkla
     * @return T41005
     */
    public function setAPNDatumDesGültigkeitsbeginnsDerAusfuhrerstattungsnomenkla($aPNDatumDesGültigkeitsbeginnsDerAusfuhrerstattungsnomenkla)
    {
        $this->APN_Datum_des_Gültigkeitsbeginns_der_Ausfuhrerstattungsnomenkla = $aPNDatumDesGültigkeitsbeginnsDerAusfuhrerstattungsnomenkla;

        return $this;
    }

    /**
     * Get APN_Datum_des_Gültigkeitsbeginns_der_Ausfuhrerstattungsnomenkla
     *
     * @return \DateTime 
     */
    public function getAPNDatumDesGültigkeitsbeginnsDerAusfuhrerstattungsnomenkla()
    {
        return $this->APN_Datum_des_Gültigkeitsbeginns_der_Ausfuhrerstattungsnomenkla;
    }

    /**
     * Set APO_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklaturführ
     *
     * @param \DateTime $aPOGültigkeitsendedatumDerAusfuhrerstattungsnomenklaturführ
     * @return T41005
     */
    public function setAPOGültigkeitsendedatumDerAusfuhrerstattungsnomenklaturführ($aPOGültigkeitsendedatumDerAusfuhrerstattungsnomenklaturführ)
    {
        $this->APO_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklaturführ = $aPOGültigkeitsendedatumDerAusfuhrerstattungsnomenklaturführ;

        return $this;
    }

    /**
     * Get APO_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklaturführ
     *
     * @return \DateTime 
     */
    public function getAPOGültigkeitsendedatumDerAusfuhrerstattungsnomenklaturführ()
    {
        return $this->APO_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklaturführ;
    }

    /**
     * Set APP_Anzahl_der_Ausfuhrerstattungsnomenklaturführungsstriche
     *
     * @param string $aPPAnzahlDerAusfuhrerstattungsnomenklaturführungsstriche
     * @return T41005
     */
    public function setAPPAnzahlDerAusfuhrerstattungsnomenklaturführungsstriche($aPPAnzahlDerAusfuhrerstattungsnomenklaturführungsstriche)
    {
        $this->APP_Anzahl_der_Ausfuhrerstattungsnomenklaturführungsstriche = $aPPAnzahlDerAusfuhrerstattungsnomenklaturführungsstriche;

        return $this;
    }

    /**
     * Get APP_Anzahl_der_Ausfuhrerstattungsnomenklaturführungsstriche
     *
     * @return string 
     */
    public function getAPPAnzahlDerAusfuhrerstattungsnomenklaturführungsstriche()
    {
        return $this->APP_Anzahl_der_Ausfuhrerstattungsnomenklaturführungsstriche;
    }

    /**
     * Set APQ_Warennomenklatur_ID
     *
     * @param string $aPQWarennomenklaturID
     * @return T41005
     */
    public function setAPQWarennomenklaturID($aPQWarennomenklaturID)
    {
        $this->APQ_Warennomenklatur_ID = $aPQWarennomenklaturID;

        return $this;
    }

    /**
     * Get APQ_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAPQWarennomenklaturID()
    {
        return $this->APQ_Warennomenklatur_ID;
    }

    /**
     * Set APR_Zusatzcodeart
     *
     * @param string $aPRZusatzcodeart
     * @return T41005
     */
    public function setAPRZusatzcodeart($aPRZusatzcodeart)
    {
        $this->APR_Zusatzcodeart = $aPRZusatzcodeart;

        return $this;
    }

    /**
     * Get APR_Zusatzcodeart
     *
     * @return string 
     */
    public function getAPRZusatzcodeart()
    {
        return $this->APR_Zusatzcodeart;
    }

    /**
     * Set APS_Ausfuhrerstattungscode
     *
     * @param string $aPSAusfuhrerstattungscode
     * @return T41005
     */
    public function setAPSAusfuhrerstattungscode($aPSAusfuhrerstattungscode)
    {
        $this->APS_Ausfuhrerstattungscode = $aPSAusfuhrerstattungscode;

        return $this;
    }

    /**
     * Get APS_Ausfuhrerstattungscode
     *
     * @return string 
     */
    public function getAPSAusfuhrerstattungscode()
    {
        return $this->APS_Ausfuhrerstattungscode;
    }

    /**
     * Set APT_Warenliniensuffix
     *
     * @param string $aPTWarenliniensuffix
     * @return T41005
     */
    public function setAPTWarenliniensuffix($aPTWarenliniensuffix)
    {
        $this->APT_Warenliniensuffix = $aPTWarenliniensuffix;

        return $this;
    }

    /**
     * Get APT_Warenliniensuffix
     *
     * @return string 
     */
    public function getAPTWarenliniensuffix()
    {
        return $this->APT_Warenliniensuffix;
    }
}
