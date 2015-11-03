<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T41020
 */
class T41020
{
    /**
     * @var integer
     */
    private $AQD_SID_für_die_Ausfuhrerstattungsnomenklatur;

    /**
     * @var string
     */
    private $AQE_Fußnotenart_ID;

    /**
     * @var string
     */
    private $AQF_Fußnoten_ID;

    /**
     * @var \DateTime
     */
    private $AQG_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_der_Au;

    /**
     * @var \DateTime
     */
    private $AQH_Gültigkeitsendedatum_der_Verbindung_zwischen_der_Ausfuhrers;

    /**
     * @var string
     */
    private $AQI_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AQJ_Zusatzcodeart;

    /**
     * @var string
     */
    private $AQK_Ausfuhrerstattungscode;

    /**
     * @var string
     */
    private $AQL_Warenliniensuffix;


    /**
     * Set AQD_SID_für_die_Ausfuhrerstattungsnomenklatur
     *
     * @param integer $aQDSIDFürDieAusfuhrerstattungsnomenklatur
     * @return T41020
     */
    public function setAQDSIDFürDieAusfuhrerstattungsnomenklatur($aQDSIDFürDieAusfuhrerstattungsnomenklatur)
    {
        $this->AQD_SID_für_die_Ausfuhrerstattungsnomenklatur = $aQDSIDFürDieAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get AQD_SID_für_die_Ausfuhrerstattungsnomenklatur
     *
     * @return integer 
     */
    public function getAQDSIDFürDieAusfuhrerstattungsnomenklatur()
    {
        return $this->AQD_SID_für_die_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set AQE_Fußnotenart_ID
     *
     * @param string $aQEFußnotenartID
     * @return T41020
     */
    public function setAQEFußnotenartID($aQEFußnotenartID)
    {
        $this->AQE_Fußnotenart_ID = $aQEFußnotenartID;

        return $this;
    }

    /**
     * Get AQE_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAQEFußnotenartID()
    {
        return $this->AQE_Fußnotenart_ID;
    }

    /**
     * Set AQF_Fußnoten_ID
     *
     * @param string $aQFFußnotenID
     * @return T41020
     */
    public function setAQFFußnotenID($aQFFußnotenID)
    {
        $this->AQF_Fußnoten_ID = $aQFFußnotenID;

        return $this;
    }

    /**
     * Get AQF_Fußnoten_ID
     *
     * @return string 
     */
    public function getAQFFußnotenID()
    {
        return $this->AQF_Fußnoten_ID;
    }

    /**
     * Set AQG_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_der_Au
     *
     * @param \DateTime $aQGDatumDesGültigkeitsbeginnsDerVerbindungZwischenDerAu
     * @return T41020
     */
    public function setAQGDatumDesGültigkeitsbeginnsDerVerbindungZwischenDerAu($aQGDatumDesGültigkeitsbeginnsDerVerbindungZwischenDerAu)
    {
        $this->AQG_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_der_Au = $aQGDatumDesGültigkeitsbeginnsDerVerbindungZwischenDerAu;

        return $this;
    }

    /**
     * Get AQG_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_der_Au
     *
     * @return \DateTime 
     */
    public function getAQGDatumDesGültigkeitsbeginnsDerVerbindungZwischenDerAu()
    {
        return $this->AQG_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_der_Au;
    }

    /**
     * Set AQH_Gültigkeitsendedatum_der_Verbindung_zwischen_der_Ausfuhrers
     *
     * @param \DateTime $aQHGültigkeitsendedatumDerVerbindungZwischenDerAusfuhrers
     * @return T41020
     */
    public function setAQHGültigkeitsendedatumDerVerbindungZwischenDerAusfuhrers($aQHGültigkeitsendedatumDerVerbindungZwischenDerAusfuhrers)
    {
        $this->AQH_Gültigkeitsendedatum_der_Verbindung_zwischen_der_Ausfuhrers = $aQHGültigkeitsendedatumDerVerbindungZwischenDerAusfuhrers;

        return $this;
    }

    /**
     * Get AQH_Gültigkeitsendedatum_der_Verbindung_zwischen_der_Ausfuhrers
     *
     * @return \DateTime 
     */
    public function getAQHGültigkeitsendedatumDerVerbindungZwischenDerAusfuhrers()
    {
        return $this->AQH_Gültigkeitsendedatum_der_Verbindung_zwischen_der_Ausfuhrers;
    }

    /**
     * Set AQI_Warennomenklatur_ID
     *
     * @param string $aQIWarennomenklaturID
     * @return T41020
     */
    public function setAQIWarennomenklaturID($aQIWarennomenklaturID)
    {
        $this->AQI_Warennomenklatur_ID = $aQIWarennomenklaturID;

        return $this;
    }

    /**
     * Get AQI_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAQIWarennomenklaturID()
    {
        return $this->AQI_Warennomenklatur_ID;
    }

    /**
     * Set AQJ_Zusatzcodeart
     *
     * @param string $aQJZusatzcodeart
     * @return T41020
     */
    public function setAQJZusatzcodeart($aQJZusatzcodeart)
    {
        $this->AQJ_Zusatzcodeart = $aQJZusatzcodeart;

        return $this;
    }

    /**
     * Get AQJ_Zusatzcodeart
     *
     * @return string 
     */
    public function getAQJZusatzcodeart()
    {
        return $this->AQJ_Zusatzcodeart;
    }

    /**
     * Set AQK_Ausfuhrerstattungscode
     *
     * @param string $aQKAusfuhrerstattungscode
     * @return T41020
     */
    public function setAQKAusfuhrerstattungscode($aQKAusfuhrerstattungscode)
    {
        $this->AQK_Ausfuhrerstattungscode = $aQKAusfuhrerstattungscode;

        return $this;
    }

    /**
     * Get AQK_Ausfuhrerstattungscode
     *
     * @return string 
     */
    public function getAQKAusfuhrerstattungscode()
    {
        return $this->AQK_Ausfuhrerstattungscode;
    }

    /**
     * Set AQL_Warenliniensuffix
     *
     * @param string $aQLWarenliniensuffix
     * @return T41020
     */
    public function setAQLWarenliniensuffix($aQLWarenliniensuffix)
    {
        $this->AQL_Warenliniensuffix = $aQLWarenliniensuffix;

        return $this;
    }

    /**
     * Get AQL_Warenliniensuffix
     *
     * @return string 
     */
    public function getAQLWarenliniensuffix()
    {
        return $this->AQL_Warenliniensuffix;
    }
}
