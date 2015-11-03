<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T23500
 */
class T23500
{
    /**
     * @var string
     */
    private $ADH_Maßnahmeart_ID;

    /**
     * @var \DateTime
     */
    private $ADI_Datum_des_Gültigkeitsbeginns_der_Maßnahmeart_ID;

    /**
     * @var \DateTime
     */
    private $ADJ_Gültigkeitsendedatum_der_Maßnahmeart_ID;

    /**
     * @var string
     */
    private $ADK_Handelsbewegungscode;

    /**
     * @var string
     */
    private $ADL_Prioritätscode;

    /**
     * @var string
     */
    private $ADM_Anwendbarer_Code_der_Maßnahmekomponente;

    /**
     * @var string
     */
    private $ADN_Ursprungs__Bestimmungscode;

    /**
     * @var string
     */
    private $ADO_Ordnungsnummererfassungscode;

    /**
     * @var string
     */
    private $ADP_Hierarchische_Maßnahmeebene;

    /**
     * @var string
     */
    private $ADQ_Maßnahmeartserien_ID;

    /**
     * @var string
     */
    private $ADR_Beschreibung_der_Maßnahmeart;


    /**
     * Set ADH_Maßnahmeart_ID
     *
     * @param string $aDHMaßnahmeartID
     * @return T23500
     */
    public function setADHMaßnahmeartID($aDHMaßnahmeartID)
    {
        $this->ADH_Maßnahmeart_ID = $aDHMaßnahmeartID;

        return $this;
    }

    /**
     * Get ADH_Maßnahmeart_ID
     *
     * @return string 
     */
    public function getADHMaßnahmeartID()
    {
        return $this->ADH_Maßnahmeart_ID;
    }

    /**
     * Set ADI_Datum_des_Gültigkeitsbeginns_der_Maßnahmeart_ID
     *
     * @param \DateTime $aDIDatumDesGültigkeitsbeginnsDerMaßnahmeartID
     * @return T23500
     */
    public function setADIDatumDesGültigkeitsbeginnsDerMaßnahmeartID($aDIDatumDesGültigkeitsbeginnsDerMaßnahmeartID)
    {
        $this->ADI_Datum_des_Gültigkeitsbeginns_der_Maßnahmeart_ID = $aDIDatumDesGültigkeitsbeginnsDerMaßnahmeartID;

        return $this;
    }

    /**
     * Get ADI_Datum_des_Gültigkeitsbeginns_der_Maßnahmeart_ID
     *
     * @return \DateTime 
     */
    public function getADIDatumDesGültigkeitsbeginnsDerMaßnahmeartID()
    {
        return $this->ADI_Datum_des_Gültigkeitsbeginns_der_Maßnahmeart_ID;
    }

    /**
     * Set ADJ_Gültigkeitsendedatum_der_Maßnahmeart_ID
     *
     * @param \DateTime $aDJGültigkeitsendedatumDerMaßnahmeartID
     * @return T23500
     */
    public function setADJGültigkeitsendedatumDerMaßnahmeartID($aDJGültigkeitsendedatumDerMaßnahmeartID)
    {
        $this->ADJ_Gültigkeitsendedatum_der_Maßnahmeart_ID = $aDJGültigkeitsendedatumDerMaßnahmeartID;

        return $this;
    }

    /**
     * Get ADJ_Gültigkeitsendedatum_der_Maßnahmeart_ID
     *
     * @return \DateTime 
     */
    public function getADJGültigkeitsendedatumDerMaßnahmeartID()
    {
        return $this->ADJ_Gültigkeitsendedatum_der_Maßnahmeart_ID;
    }

    /**
     * Set ADK_Handelsbewegungscode
     *
     * @param string $aDKHandelsbewegungscode
     * @return T23500
     */
    public function setADKHandelsbewegungscode($aDKHandelsbewegungscode)
    {
        $this->ADK_Handelsbewegungscode = $aDKHandelsbewegungscode;

        return $this;
    }

    /**
     * Get ADK_Handelsbewegungscode
     *
     * @return string 
     */
    public function getADKHandelsbewegungscode()
    {
        return $this->ADK_Handelsbewegungscode;
    }

    /**
     * Set ADL_Prioritätscode
     *
     * @param string $aDLPrioritätscode
     * @return T23500
     */
    public function setADLPrioritätscode($aDLPrioritätscode)
    {
        $this->ADL_Prioritätscode = $aDLPrioritätscode;

        return $this;
    }

    /**
     * Get ADL_Prioritätscode
     *
     * @return string 
     */
    public function getADLPrioritätscode()
    {
        return $this->ADL_Prioritätscode;
    }

    /**
     * Set ADM_Anwendbarer_Code_der_Maßnahmekomponente
     *
     * @param string $aDMAnwendbarerCodeDerMaßnahmekomponente
     * @return T23500
     */
    public function setADMAnwendbarerCodeDerMaßnahmekomponente($aDMAnwendbarerCodeDerMaßnahmekomponente)
    {
        $this->ADM_Anwendbarer_Code_der_Maßnahmekomponente = $aDMAnwendbarerCodeDerMaßnahmekomponente;

        return $this;
    }

    /**
     * Get ADM_Anwendbarer_Code_der_Maßnahmekomponente
     *
     * @return string 
     */
    public function getADMAnwendbarerCodeDerMaßnahmekomponente()
    {
        return $this->ADM_Anwendbarer_Code_der_Maßnahmekomponente;
    }

    /**
     * Set ADN_Ursprungs__Bestimmungscode
     *
     * @param string $aDNUrsprungsBestimmungscode
     * @return T23500
     */
    public function setADNUrsprungsBestimmungscode($aDNUrsprungsBestimmungscode)
    {
        $this->ADN_Ursprungs__Bestimmungscode = $aDNUrsprungsBestimmungscode;

        return $this;
    }

    /**
     * Get ADN_Ursprungs__Bestimmungscode
     *
     * @return string 
     */
    public function getADNUrsprungsBestimmungscode()
    {
        return $this->ADN_Ursprungs__Bestimmungscode;
    }

    /**
     * Set ADO_Ordnungsnummererfassungscode
     *
     * @param string $aDOOrdnungsnummererfassungscode
     * @return T23500
     */
    public function setADOOrdnungsnummererfassungscode($aDOOrdnungsnummererfassungscode)
    {
        $this->ADO_Ordnungsnummererfassungscode = $aDOOrdnungsnummererfassungscode;

        return $this;
    }

    /**
     * Get ADO_Ordnungsnummererfassungscode
     *
     * @return string 
     */
    public function getADOOrdnungsnummererfassungscode()
    {
        return $this->ADO_Ordnungsnummererfassungscode;
    }

    /**
     * Set ADP_Hierarchische_Maßnahmeebene
     *
     * @param string $aDPHierarchischeMaßnahmeebene
     * @return T23500
     */
    public function setADPHierarchischeMaßnahmeebene($aDPHierarchischeMaßnahmeebene)
    {
        $this->ADP_Hierarchische_Maßnahmeebene = $aDPHierarchischeMaßnahmeebene;

        return $this;
    }

    /**
     * Get ADP_Hierarchische_Maßnahmeebene
     *
     * @return string 
     */
    public function getADPHierarchischeMaßnahmeebene()
    {
        return $this->ADP_Hierarchische_Maßnahmeebene;
    }

    /**
     * Set ADQ_Maßnahmeartserien_ID
     *
     * @param string $aDQMaßnahmeartserienID
     * @return T23500
     */
    public function setADQMaßnahmeartserienID($aDQMaßnahmeartserienID)
    {
        $this->ADQ_Maßnahmeartserien_ID = $aDQMaßnahmeartserienID;

        return $this;
    }

    /**
     * Get ADQ_Maßnahmeartserien_ID
     *
     * @return string 
     */
    public function getADQMaßnahmeartserienID()
    {
        return $this->ADQ_Maßnahmeartserien_ID;
    }

    /**
     * Set ADR_Beschreibung_der_Maßnahmeart
     *
     * @param string $aDRBeschreibungDerMaßnahmeart
     * @return T23500
     */
    public function setADRBeschreibungDerMaßnahmeart($aDRBeschreibungDerMaßnahmeart)
    {
        $this->ADR_Beschreibung_der_Maßnahmeart = $aDRBeschreibungDerMaßnahmeart;

        return $this;
    }

    /**
     * Get ADR_Beschreibung_der_Maßnahmeart
     *
     * @return string 
     */
    public function getADRBeschreibungDerMaßnahmeart()
    {
        return $this->ADR_Beschreibung_der_Maßnahmeart;
    }
}
