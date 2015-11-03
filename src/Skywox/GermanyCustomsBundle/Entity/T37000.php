<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37000
 */
class T37000
{
    /**
     * @var integer
     */
    private $ALE_SID_der_QUOTA_Beschreibung;

    /**
     * @var string
     */
    private $ALF_Ordnungsnummer;

    /**
     * @var \DateTime
     */
    private $ALG_Gültigkeitsbeginn;

    /**
     * @var integer
     */
    private $ALH_SID_der_Ordnungsnummer;

    /**
     * @var \DateTime
     */
    private $ALI_Gültigkeitsende;

    /**
     * @var string
     */
    private $ALJ_Kontingentsmenge;

    /**
     * @var string
     */
    private $ALK_Ausgangsmenge;

    /**
     * @var string
     */
    private $ALL_Währungseinheitscode;

    /**
     * @var string
     */
    private $ALM_Maßeinheitscode;

    /**
     * @var string
     */
    private $ALN_Maßeinheitsqualifikator;

    /**
     * @var integer
     */
    private $ALO_Kennzeichen_maximale_Austarifierung;

    /**
     * @var string
     */
    private $ALP_kritischer_Status;

    /**
     * @var integer
     */
    private $ALQ_kritischer_Schwellenwert;

    /**
     * @var string
     */
    private $ALR_Kurzbeschreibung;


    /**
     * Set ALE_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aLESIDDerQUOTABeschreibung
     * @return T37000
     */
    public function setALESIDDerQUOTABeschreibung($aLESIDDerQUOTABeschreibung)
    {
        $this->ALE_SID_der_QUOTA_Beschreibung = $aLESIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get ALE_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getALESIDDerQUOTABeschreibung()
    {
        return $this->ALE_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set ALF_Ordnungsnummer
     *
     * @param string $aLFOrdnungsnummer
     * @return T37000
     */
    public function setALFOrdnungsnummer($aLFOrdnungsnummer)
    {
        $this->ALF_Ordnungsnummer = $aLFOrdnungsnummer;

        return $this;
    }

    /**
     * Get ALF_Ordnungsnummer
     *
     * @return string 
     */
    public function getALFOrdnungsnummer()
    {
        return $this->ALF_Ordnungsnummer;
    }

    /**
     * Set ALG_Gültigkeitsbeginn
     *
     * @param \DateTime $aLGGültigkeitsbeginn
     * @return T37000
     */
    public function setALGGültigkeitsbeginn($aLGGültigkeitsbeginn)
    {
        $this->ALG_Gültigkeitsbeginn = $aLGGültigkeitsbeginn;

        return $this;
    }

    /**
     * Get ALG_Gültigkeitsbeginn
     *
     * @return \DateTime 
     */
    public function getALGGültigkeitsbeginn()
    {
        return $this->ALG_Gültigkeitsbeginn;
    }

    /**
     * Set ALH_SID_der_Ordnungsnummer
     *
     * @param integer $aLHSIDDerOrdnungsnummer
     * @return T37000
     */
    public function setALHSIDDerOrdnungsnummer($aLHSIDDerOrdnungsnummer)
    {
        $this->ALH_SID_der_Ordnungsnummer = $aLHSIDDerOrdnungsnummer;

        return $this;
    }

    /**
     * Get ALH_SID_der_Ordnungsnummer
     *
     * @return integer 
     */
    public function getALHSIDDerOrdnungsnummer()
    {
        return $this->ALH_SID_der_Ordnungsnummer;
    }

    /**
     * Set ALI_Gültigkeitsende
     *
     * @param \DateTime $aLIGültigkeitsende
     * @return T37000
     */
    public function setALIGültigkeitsende($aLIGültigkeitsende)
    {
        $this->ALI_Gültigkeitsende = $aLIGültigkeitsende;

        return $this;
    }

    /**
     * Get ALI_Gültigkeitsende
     *
     * @return \DateTime 
     */
    public function getALIGültigkeitsende()
    {
        return $this->ALI_Gültigkeitsende;
    }

    /**
     * Set ALJ_Kontingentsmenge
     *
     * @param string $aLJKontingentsmenge
     * @return T37000
     */
    public function setALJKontingentsmenge($aLJKontingentsmenge)
    {
        $this->ALJ_Kontingentsmenge = $aLJKontingentsmenge;

        return $this;
    }

    /**
     * Get ALJ_Kontingentsmenge
     *
     * @return string 
     */
    public function getALJKontingentsmenge()
    {
        return $this->ALJ_Kontingentsmenge;
    }

    /**
     * Set ALK_Ausgangsmenge
     *
     * @param string $aLKAusgangsmenge
     * @return T37000
     */
    public function setALKAusgangsmenge($aLKAusgangsmenge)
    {
        $this->ALK_Ausgangsmenge = $aLKAusgangsmenge;

        return $this;
    }

    /**
     * Get ALK_Ausgangsmenge
     *
     * @return string 
     */
    public function getALKAusgangsmenge()
    {
        return $this->ALK_Ausgangsmenge;
    }

    /**
     * Set ALL_Währungseinheitscode
     *
     * @param string $aLLWährungseinheitscode
     * @return T37000
     */
    public function setALLWährungseinheitscode($aLLWährungseinheitscode)
    {
        $this->ALL_Währungseinheitscode = $aLLWährungseinheitscode;

        return $this;
    }

    /**
     * Get ALL_Währungseinheitscode
     *
     * @return string 
     */
    public function getALLWährungseinheitscode()
    {
        return $this->ALL_Währungseinheitscode;
    }

    /**
     * Set ALM_Maßeinheitscode
     *
     * @param string $aLMMaßeinheitscode
     * @return T37000
     */
    public function setALMMaßeinheitscode($aLMMaßeinheitscode)
    {
        $this->ALM_Maßeinheitscode = $aLMMaßeinheitscode;

        return $this;
    }

    /**
     * Get ALM_Maßeinheitscode
     *
     * @return string 
     */
    public function getALMMaßeinheitscode()
    {
        return $this->ALM_Maßeinheitscode;
    }

    /**
     * Set ALN_Maßeinheitsqualifikator
     *
     * @param string $aLNMaßeinheitsqualifikator
     * @return T37000
     */
    public function setALNMaßeinheitsqualifikator($aLNMaßeinheitsqualifikator)
    {
        $this->ALN_Maßeinheitsqualifikator = $aLNMaßeinheitsqualifikator;

        return $this;
    }

    /**
     * Get ALN_Maßeinheitsqualifikator
     *
     * @return string 
     */
    public function getALNMaßeinheitsqualifikator()
    {
        return $this->ALN_Maßeinheitsqualifikator;
    }

    /**
     * Set ALO_Kennzeichen_maximale_Austarifierung
     *
     * @param integer $aLOKennzeichenMaximaleAustarifierung
     * @return T37000
     */
    public function setALOKennzeichenMaximaleAustarifierung($aLOKennzeichenMaximaleAustarifierung)
    {
        $this->ALO_Kennzeichen_maximale_Austarifierung = $aLOKennzeichenMaximaleAustarifierung;

        return $this;
    }

    /**
     * Get ALO_Kennzeichen_maximale_Austarifierung
     *
     * @return integer 
     */
    public function getALOKennzeichenMaximaleAustarifierung()
    {
        return $this->ALO_Kennzeichen_maximale_Austarifierung;
    }

    /**
     * Set ALP_kritischer_Status
     *
     * @param string $aLPKritischerStatus
     * @return T37000
     */
    public function setALPKritischerStatus($aLPKritischerStatus)
    {
        $this->ALP_kritischer_Status = $aLPKritischerStatus;

        return $this;
    }

    /**
     * Get ALP_kritischer_Status
     *
     * @return string 
     */
    public function getALPKritischerStatus()
    {
        return $this->ALP_kritischer_Status;
    }

    /**
     * Set ALQ_kritischer_Schwellenwert
     *
     * @param integer $aLQKritischerSchwellenwert
     * @return T37000
     */
    public function setALQKritischerSchwellenwert($aLQKritischerSchwellenwert)
    {
        $this->ALQ_kritischer_Schwellenwert = $aLQKritischerSchwellenwert;

        return $this;
    }

    /**
     * Get ALQ_kritischer_Schwellenwert
     *
     * @return integer 
     */
    public function getALQKritischerSchwellenwert()
    {
        return $this->ALQ_kritischer_Schwellenwert;
    }

    /**
     * Set ALR_Kurzbeschreibung
     *
     * @param string $aLRKurzbeschreibung
     * @return T37000
     */
    public function setALRKurzbeschreibung($aLRKurzbeschreibung)
    {
        $this->ALR_Kurzbeschreibung = $aLRKurzbeschreibung;

        return $this;
    }

    /**
     * Get ALR_Kurzbeschreibung
     *
     * @return string 
     */
    public function getALRKurzbeschreibung()
    {
        return $this->ALR_Kurzbeschreibung;
    }
}
