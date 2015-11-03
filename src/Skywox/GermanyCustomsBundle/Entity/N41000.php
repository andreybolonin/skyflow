<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N41000
 */
class N41000
{
    /**
     * @var integer
     */
    private $BDT_SID;

    /**
     * @var string
     */
    private $BDU_Verbrauchsteuerart_ID;

    /**
     * @var string
     */
    private $BDV_Verbrauchsteuer_ID;

    /**
     * @var string
     */
    private $BDW_Verbrauchsteuerliniensuffix;

    /**
     * @var \DateTime
     */
    private $BDX_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BDY_Endedatum;

    /**
     * @var string
     */
    private $BDZ_Anzahl_Führungsstriche_in_der_Verbrauchsteuernomenklatur;

    /**
     * @var string
     */
    private $BEA_Warenbeschreibung;

    /**
     * @var integer
     */
    private $BEB_Gesamtjahreserzeugung_Bier_minimal;

    /**
     * @var integer
     */
    private $BEC_Gesamtjahreserzeugung_Bier_maximal;


    /**
     * Set BDT_SID
     *
     * @param integer $bDTSID
     * @return N41000
     */
    public function setBDTSID($bDTSID)
    {
        $this->BDT_SID = $bDTSID;

        return $this;
    }

    /**
     * Get BDT_SID
     *
     * @return integer 
     */
    public function getBDTSID()
    {
        return $this->BDT_SID;
    }

    /**
     * Set BDU_Verbrauchsteuerart_ID
     *
     * @param string $bDUVerbrauchsteuerartID
     * @return N41000
     */
    public function setBDUVerbrauchsteuerartID($bDUVerbrauchsteuerartID)
    {
        $this->BDU_Verbrauchsteuerart_ID = $bDUVerbrauchsteuerartID;

        return $this;
    }

    /**
     * Get BDU_Verbrauchsteuerart_ID
     *
     * @return string 
     */
    public function getBDUVerbrauchsteuerartID()
    {
        return $this->BDU_Verbrauchsteuerart_ID;
    }

    /**
     * Set BDV_Verbrauchsteuer_ID
     *
     * @param string $bDVVerbrauchsteuerID
     * @return N41000
     */
    public function setBDVVerbrauchsteuerID($bDVVerbrauchsteuerID)
    {
        $this->BDV_Verbrauchsteuer_ID = $bDVVerbrauchsteuerID;

        return $this;
    }

    /**
     * Get BDV_Verbrauchsteuer_ID
     *
     * @return string 
     */
    public function getBDVVerbrauchsteuerID()
    {
        return $this->BDV_Verbrauchsteuer_ID;
    }

    /**
     * Set BDW_Verbrauchsteuerliniensuffix
     *
     * @param string $bDWVerbrauchsteuerliniensuffix
     * @return N41000
     */
    public function setBDWVerbrauchsteuerliniensuffix($bDWVerbrauchsteuerliniensuffix)
    {
        $this->BDW_Verbrauchsteuerliniensuffix = $bDWVerbrauchsteuerliniensuffix;

        return $this;
    }

    /**
     * Get BDW_Verbrauchsteuerliniensuffix
     *
     * @return string 
     */
    public function getBDWVerbrauchsteuerliniensuffix()
    {
        return $this->BDW_Verbrauchsteuerliniensuffix;
    }

    /**
     * Set BDX_Beginndatum
     *
     * @param \DateTime $bDXBeginndatum
     * @return N41000
     */
    public function setBDXBeginndatum($bDXBeginndatum)
    {
        $this->BDX_Beginndatum = $bDXBeginndatum;

        return $this;
    }

    /**
     * Get BDX_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBDXBeginndatum()
    {
        return $this->BDX_Beginndatum;
    }

    /**
     * Set BDY_Endedatum
     *
     * @param \DateTime $bDYEndedatum
     * @return N41000
     */
    public function setBDYEndedatum($bDYEndedatum)
    {
        $this->BDY_Endedatum = $bDYEndedatum;

        return $this;
    }

    /**
     * Get BDY_Endedatum
     *
     * @return \DateTime 
     */
    public function getBDYEndedatum()
    {
        return $this->BDY_Endedatum;
    }

    /**
     * Set BDZ_Anzahl_Führungsstriche_in_der_Verbrauchsteuernomenklatur
     *
     * @param string $bDZAnzahlFührungsstricheInDerVerbrauchsteuernomenklatur
     * @return N41000
     */
    public function setBDZAnzahlFührungsstricheInDerVerbrauchsteuernomenklatur($bDZAnzahlFührungsstricheInDerVerbrauchsteuernomenklatur)
    {
        $this->BDZ_Anzahl_Führungsstriche_in_der_Verbrauchsteuernomenklatur = $bDZAnzahlFührungsstricheInDerVerbrauchsteuernomenklatur;

        return $this;
    }

    /**
     * Get BDZ_Anzahl_Führungsstriche_in_der_Verbrauchsteuernomenklatur
     *
     * @return string 
     */
    public function getBDZAnzahlFührungsstricheInDerVerbrauchsteuernomenklatur()
    {
        return $this->BDZ_Anzahl_Führungsstriche_in_der_Verbrauchsteuernomenklatur;
    }

    /**
     * Set BEA_Warenbeschreibung
     *
     * @param string $bEAWarenbeschreibung
     * @return N41000
     */
    public function setBEAWarenbeschreibung($bEAWarenbeschreibung)
    {
        $this->BEA_Warenbeschreibung = $bEAWarenbeschreibung;

        return $this;
    }

    /**
     * Get BEA_Warenbeschreibung
     *
     * @return string 
     */
    public function getBEAWarenbeschreibung()
    {
        return $this->BEA_Warenbeschreibung;
    }

    /**
     * Set BEB_Gesamtjahreserzeugung_Bier_minimal
     *
     * @param integer $bEBGesamtjahreserzeugungBierMinimal
     * @return N41000
     */
    public function setBEBGesamtjahreserzeugungBierMinimal($bEBGesamtjahreserzeugungBierMinimal)
    {
        $this->BEB_Gesamtjahreserzeugung_Bier_minimal = $bEBGesamtjahreserzeugungBierMinimal;

        return $this;
    }

    /**
     * Get BEB_Gesamtjahreserzeugung_Bier_minimal
     *
     * @return integer 
     */
    public function getBEBGesamtjahreserzeugungBierMinimal()
    {
        return $this->BEB_Gesamtjahreserzeugung_Bier_minimal;
    }

    /**
     * Set BEC_Gesamtjahreserzeugung_Bier_maximal
     *
     * @param integer $bECGesamtjahreserzeugungBierMaximal
     * @return N41000
     */
    public function setBECGesamtjahreserzeugungBierMaximal($bECGesamtjahreserzeugungBierMaximal)
    {
        $this->BEC_Gesamtjahreserzeugung_Bier_maximal = $bECGesamtjahreserzeugungBierMaximal;

        return $this;
    }

    /**
     * Get BEC_Gesamtjahreserzeugung_Bier_maximal
     *
     * @return integer 
     */
    public function getBECGesamtjahreserzeugungBierMaximal()
    {
        return $this->BEC_Gesamtjahreserzeugung_Bier_maximal;
    }
}
