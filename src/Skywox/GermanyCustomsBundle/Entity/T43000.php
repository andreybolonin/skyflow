<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43000
 */
class T43000
{
    /**
     * @var integer
     */
    private $AQM_SID_der_Maßnahme;

    /**
     * @var string
     */
    private $AQN_Maßnahmeart;

    /**
     * @var string
     */
    private $AQO_ID_des_geographischen_Gebiets;

    /**
     * @var string
     */
    private $AQP_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AQQ_Zusatzcodeart;

    /**
     * @var string
     */
    private $AQR_Zusatzcode;

    /**
     * @var string
     */
    private $AQS_Ordnungsnummer;

    /**
     * @var string
     */
    private $AQT_Reduktionsindikator;

    /**
     * @var \DateTime
     */
    private $AQU_Datum_des_Gültigkeitsbeginns_der_Maßnahme;

    /**
     * @var string
     */
    private $AQV_Funktionsart_der_maßnahmegenerierenden_Verordnung;

    /**
     * @var string
     */
    private $AQW_ID_der_maßnahmegenerierenden_Verordnung;

    /**
     * @var \DateTime
     */
    private $AQX_Gültigkeitsendedatum_der_Maßnahme;

    /**
     * @var string
     */
    private $AQY_Funktion_der_Begründungsverordnung;

    /**
     * @var string
     */
    private $AQZ_ID_der_Begründungsverordnung;

    /**
     * @var string
     */
    private $ARA_Ausgesetztes_Merkmal;

    /**
     * @var integer
     */
    private $ARB_SID_des_geographischen_Gebiets;

    /**
     * @var integer
     */
    private $ARC_SID_der_Warennomenklatur;

    /**
     * @var integer
     */
    private $ARD_SID_des_Zusatzcodes;

    /**
     * @var integer
     */
    private $ARE_SID_der_Ausfuhrerstattungsnomenklatur;

    /**
     * @var string
     */
    private $ARF_Ausgesetztes_Merkmal_der_maßnahmegenerierenden_Verordnung;

    /**
     * @var string
     */
    private $ARG_Regime_ID_der_maßnahmegenerierenden_Verordnung;


    /**
     * Set AQM_SID_der_Maßnahme
     *
     * @param integer $aQMSIDDerMaßnahme
     * @return T43000
     */
    public function setAQMSIDDerMaßnahme($aQMSIDDerMaßnahme)
    {
        $this->AQM_SID_der_Maßnahme = $aQMSIDDerMaßnahme;

        return $this;
    }

    /**
     * Get AQM_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getAQMSIDDerMaßnahme()
    {
        return $this->AQM_SID_der_Maßnahme;
    }

    /**
     * Set AQN_Maßnahmeart
     *
     * @param string $aQNMaßnahmeart
     * @return T43000
     */
    public function setAQNMaßnahmeart($aQNMaßnahmeart)
    {
        $this->AQN_Maßnahmeart = $aQNMaßnahmeart;

        return $this;
    }

    /**
     * Get AQN_Maßnahmeart
     *
     * @return string 
     */
    public function getAQNMaßnahmeart()
    {
        return $this->AQN_Maßnahmeart;
    }

    /**
     * Set AQO_ID_des_geographischen_Gebiets
     *
     * @param string $aQOIDDesGeographischenGebiets
     * @return T43000
     */
    public function setAQOIDDesGeographischenGebiets($aQOIDDesGeographischenGebiets)
    {
        $this->AQO_ID_des_geographischen_Gebiets = $aQOIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get AQO_ID_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getAQOIDDesGeographischenGebiets()
    {
        return $this->AQO_ID_des_geographischen_Gebiets;
    }

    /**
     * Set AQP_Warennomenklatur_ID
     *
     * @param string $aQPWarennomenklaturID
     * @return T43000
     */
    public function setAQPWarennomenklaturID($aQPWarennomenklaturID)
    {
        $this->AQP_Warennomenklatur_ID = $aQPWarennomenklaturID;

        return $this;
    }

    /**
     * Get AQP_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAQPWarennomenklaturID()
    {
        return $this->AQP_Warennomenklatur_ID;
    }

    /**
     * Set AQQ_Zusatzcodeart
     *
     * @param string $aQQZusatzcodeart
     * @return T43000
     */
    public function setAQQZusatzcodeart($aQQZusatzcodeart)
    {
        $this->AQQ_Zusatzcodeart = $aQQZusatzcodeart;

        return $this;
    }

    /**
     * Get AQQ_Zusatzcodeart
     *
     * @return string 
     */
    public function getAQQZusatzcodeart()
    {
        return $this->AQQ_Zusatzcodeart;
    }

    /**
     * Set AQR_Zusatzcode
     *
     * @param string $aQRZusatzcode
     * @return T43000
     */
    public function setAQRZusatzcode($aQRZusatzcode)
    {
        $this->AQR_Zusatzcode = $aQRZusatzcode;

        return $this;
    }

    /**
     * Get AQR_Zusatzcode
     *
     * @return string 
     */
    public function getAQRZusatzcode()
    {
        return $this->AQR_Zusatzcode;
    }

    /**
     * Set AQS_Ordnungsnummer
     *
     * @param string $aQSOrdnungsnummer
     * @return T43000
     */
    public function setAQSOrdnungsnummer($aQSOrdnungsnummer)
    {
        $this->AQS_Ordnungsnummer = $aQSOrdnungsnummer;

        return $this;
    }

    /**
     * Get AQS_Ordnungsnummer
     *
     * @return string 
     */
    public function getAQSOrdnungsnummer()
    {
        return $this->AQS_Ordnungsnummer;
    }

    /**
     * Set AQT_Reduktionsindikator
     *
     * @param string $aQTReduktionsindikator
     * @return T43000
     */
    public function setAQTReduktionsindikator($aQTReduktionsindikator)
    {
        $this->AQT_Reduktionsindikator = $aQTReduktionsindikator;

        return $this;
    }

    /**
     * Get AQT_Reduktionsindikator
     *
     * @return string 
     */
    public function getAQTReduktionsindikator()
    {
        return $this->AQT_Reduktionsindikator;
    }

    /**
     * Set AQU_Datum_des_Gültigkeitsbeginns_der_Maßnahme
     *
     * @param \DateTime $aQUDatumDesGültigkeitsbeginnsDerMaßnahme
     * @return T43000
     */
    public function setAQUDatumDesGültigkeitsbeginnsDerMaßnahme($aQUDatumDesGültigkeitsbeginnsDerMaßnahme)
    {
        $this->AQU_Datum_des_Gültigkeitsbeginns_der_Maßnahme = $aQUDatumDesGültigkeitsbeginnsDerMaßnahme;

        return $this;
    }

    /**
     * Get AQU_Datum_des_Gültigkeitsbeginns_der_Maßnahme
     *
     * @return \DateTime 
     */
    public function getAQUDatumDesGültigkeitsbeginnsDerMaßnahme()
    {
        return $this->AQU_Datum_des_Gültigkeitsbeginns_der_Maßnahme;
    }

    /**
     * Set AQV_Funktionsart_der_maßnahmegenerierenden_Verordnung
     *
     * @param string $aQVFunktionsartDerMaßnahmegenerierendenVerordnung
     * @return T43000
     */
    public function setAQVFunktionsartDerMaßnahmegenerierendenVerordnung($aQVFunktionsartDerMaßnahmegenerierendenVerordnung)
    {
        $this->AQV_Funktionsart_der_maßnahmegenerierenden_Verordnung = $aQVFunktionsartDerMaßnahmegenerierendenVerordnung;

        return $this;
    }

    /**
     * Get AQV_Funktionsart_der_maßnahmegenerierenden_Verordnung
     *
     * @return string 
     */
    public function getAQVFunktionsartDerMaßnahmegenerierendenVerordnung()
    {
        return $this->AQV_Funktionsart_der_maßnahmegenerierenden_Verordnung;
    }

    /**
     * Set AQW_ID_der_maßnahmegenerierenden_Verordnung
     *
     * @param string $aQWIDDerMaßnahmegenerierendenVerordnung
     * @return T43000
     */
    public function setAQWIDDerMaßnahmegenerierendenVerordnung($aQWIDDerMaßnahmegenerierendenVerordnung)
    {
        $this->AQW_ID_der_maßnahmegenerierenden_Verordnung = $aQWIDDerMaßnahmegenerierendenVerordnung;

        return $this;
    }

    /**
     * Get AQW_ID_der_maßnahmegenerierenden_Verordnung
     *
     * @return string 
     */
    public function getAQWIDDerMaßnahmegenerierendenVerordnung()
    {
        return $this->AQW_ID_der_maßnahmegenerierenden_Verordnung;
    }

    /**
     * Set AQX_Gültigkeitsendedatum_der_Maßnahme
     *
     * @param \DateTime $aQXGültigkeitsendedatumDerMaßnahme
     * @return T43000
     */
    public function setAQXGültigkeitsendedatumDerMaßnahme($aQXGültigkeitsendedatumDerMaßnahme)
    {
        $this->AQX_Gültigkeitsendedatum_der_Maßnahme = $aQXGültigkeitsendedatumDerMaßnahme;

        return $this;
    }

    /**
     * Get AQX_Gültigkeitsendedatum_der_Maßnahme
     *
     * @return \DateTime 
     */
    public function getAQXGültigkeitsendedatumDerMaßnahme()
    {
        return $this->AQX_Gültigkeitsendedatum_der_Maßnahme;
    }

    /**
     * Set AQY_Funktion_der_Begründungsverordnung
     *
     * @param string $aQYFunktionDerBegründungsverordnung
     * @return T43000
     */
    public function setAQYFunktionDerBegründungsverordnung($aQYFunktionDerBegründungsverordnung)
    {
        $this->AQY_Funktion_der_Begründungsverordnung = $aQYFunktionDerBegründungsverordnung;

        return $this;
    }

    /**
     * Get AQY_Funktion_der_Begründungsverordnung
     *
     * @return string 
     */
    public function getAQYFunktionDerBegründungsverordnung()
    {
        return $this->AQY_Funktion_der_Begründungsverordnung;
    }

    /**
     * Set AQZ_ID_der_Begründungsverordnung
     *
     * @param string $aQZIDDerBegründungsverordnung
     * @return T43000
     */
    public function setAQZIDDerBegründungsverordnung($aQZIDDerBegründungsverordnung)
    {
        $this->AQZ_ID_der_Begründungsverordnung = $aQZIDDerBegründungsverordnung;

        return $this;
    }

    /**
     * Get AQZ_ID_der_Begründungsverordnung
     *
     * @return string 
     */
    public function getAQZIDDerBegründungsverordnung()
    {
        return $this->AQZ_ID_der_Begründungsverordnung;
    }

    /**
     * Set ARA_Ausgesetztes_Merkmal
     *
     * @param string $aRAAusgesetztesMerkmal
     * @return T43000
     */
    public function setARAAusgesetztesMerkmal($aRAAusgesetztesMerkmal)
    {
        $this->ARA_Ausgesetztes_Merkmal = $aRAAusgesetztesMerkmal;

        return $this;
    }

    /**
     * Get ARA_Ausgesetztes_Merkmal
     *
     * @return string 
     */
    public function getARAAusgesetztesMerkmal()
    {
        return $this->ARA_Ausgesetztes_Merkmal;
    }

    /**
     * Set ARB_SID_des_geographischen_Gebiets
     *
     * @param integer $aRBSIDDesGeographischenGebiets
     * @return T43000
     */
    public function setARBSIDDesGeographischenGebiets($aRBSIDDesGeographischenGebiets)
    {
        $this->ARB_SID_des_geographischen_Gebiets = $aRBSIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get ARB_SID_des_geographischen_Gebiets
     *
     * @return integer 
     */
    public function getARBSIDDesGeographischenGebiets()
    {
        return $this->ARB_SID_des_geographischen_Gebiets;
    }

    /**
     * Set ARC_SID_der_Warennomenklatur
     *
     * @param integer $aRCSIDDerWarennomenklatur
     * @return T43000
     */
    public function setARCSIDDerWarennomenklatur($aRCSIDDerWarennomenklatur)
    {
        $this->ARC_SID_der_Warennomenklatur = $aRCSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get ARC_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getARCSIDDerWarennomenklatur()
    {
        return $this->ARC_SID_der_Warennomenklatur;
    }

    /**
     * Set ARD_SID_des_Zusatzcodes
     *
     * @param integer $aRDSIDDesZusatzcodes
     * @return T43000
     */
    public function setARDSIDDesZusatzcodes($aRDSIDDesZusatzcodes)
    {
        $this->ARD_SID_des_Zusatzcodes = $aRDSIDDesZusatzcodes;

        return $this;
    }

    /**
     * Get ARD_SID_des_Zusatzcodes
     *
     * @return integer 
     */
    public function getARDSIDDesZusatzcodes()
    {
        return $this->ARD_SID_des_Zusatzcodes;
    }

    /**
     * Set ARE_SID_der_Ausfuhrerstattungsnomenklatur
     *
     * @param integer $aRESIDDerAusfuhrerstattungsnomenklatur
     * @return T43000
     */
    public function setARESIDDerAusfuhrerstattungsnomenklatur($aRESIDDerAusfuhrerstattungsnomenklatur)
    {
        $this->ARE_SID_der_Ausfuhrerstattungsnomenklatur = $aRESIDDerAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get ARE_SID_der_Ausfuhrerstattungsnomenklatur
     *
     * @return integer 
     */
    public function getARESIDDerAusfuhrerstattungsnomenklatur()
    {
        return $this->ARE_SID_der_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set ARF_Ausgesetztes_Merkmal_der_maßnahmegenerierenden_Verordnung
     *
     * @param string $aRFAusgesetztesMerkmalDerMaßnahmegenerierendenVerordnung
     * @return T43000
     */
    public function setARFAusgesetztesMerkmalDerMaßnahmegenerierendenVerordnung($aRFAusgesetztesMerkmalDerMaßnahmegenerierendenVerordnung)
    {
        $this->ARF_Ausgesetztes_Merkmal_der_maßnahmegenerierenden_Verordnung = $aRFAusgesetztesMerkmalDerMaßnahmegenerierendenVerordnung;

        return $this;
    }

    /**
     * Get ARF_Ausgesetztes_Merkmal_der_maßnahmegenerierenden_Verordnung
     *
     * @return string 
     */
    public function getARFAusgesetztesMerkmalDerMaßnahmegenerierendenVerordnung()
    {
        return $this->ARF_Ausgesetztes_Merkmal_der_maßnahmegenerierenden_Verordnung;
    }

    /**
     * Set ARG_Regime_ID_der_maßnahmegenerierenden_Verordnung
     *
     * @param string $aRGRegimeIDDerMaßnahmegenerierendenVerordnung
     * @return T43000
     */
    public function setARGRegimeIDDerMaßnahmegenerierendenVerordnung($aRGRegimeIDDerMaßnahmegenerierendenVerordnung)
    {
        $this->ARG_Regime_ID_der_maßnahmegenerierenden_Verordnung = $aRGRegimeIDDerMaßnahmegenerierendenVerordnung;

        return $this;
    }

    /**
     * Get ARG_Regime_ID_der_maßnahmegenerierenden_Verordnung
     *
     * @return string 
     */
    public function getARGRegimeIDDerMaßnahmegenerierendenVerordnung()
    {
        return $this->ARG_Regime_ID_der_maßnahmegenerierenden_Verordnung;
    }
}
