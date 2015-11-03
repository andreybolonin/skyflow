<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T28500
 */
class T28500
{
    /**
     * @var string
     */
    private $AGC_Basisverordnungsfunktion;

    /**
     * @var string
     */
    private $AGD_Basisverordnungs_ID;

    /**
     * @var \DateTime
     */
    private $AGE_Veröffentlichungsdatum_der_Basisverordnung;

    /**
     * @var string
     */
    private $AGF_Nummer_des_Amtsblattes;

    /**
     * @var string
     */
    private $AGG_Amtsblatt_Seite;

    /**
     * @var \DateTime
     */
    private $AGH_Datum_des_Gültigkeitsbeginns_der_Basisverordnung;

    /**
     * @var \DateTime
     */
    private $AGI_Gültigkeitsendedatum_der_Basisverordnung;

    /**
     * @var \DateTime
     */
    private $AGJ_tatsächliches_Endedatum_der_Basisverordnung;

    /**
     * @var string
     */
    private $AGK_Gemeinschaftscode;

    /**
     * @var string
     */
    private $AGL_Verordnungsgruppen_ID;

    /**
     * @var string
     */
    private $AGM_Funktion_der_Antidumpingverordnung;

    /**
     * @var string
     */
    private $AGN_Verwandter_Antidumpingverordnungs_ID;

    /**
     * @var string
     */
    private $AGO_Funktion_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AGP_ID_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AGQ_Funktion_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AGR_ID_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AGS_Ersatzindikator;

    /**
     * @var string
     */
    private $AGT_ausgesetztes_Merkmal;

    /**
     * @var string
     */
    private $AGU_Informationstext;

    /**
     * @var string
     */
    private $AGV_Billigungsindikator;


    /**
     * Set AGC_Basisverordnungsfunktion
     *
     * @param string $aGCBasisverordnungsfunktion
     * @return T28500
     */
    public function setAGCBasisverordnungsfunktion($aGCBasisverordnungsfunktion)
    {
        $this->AGC_Basisverordnungsfunktion = $aGCBasisverordnungsfunktion;

        return $this;
    }

    /**
     * Get AGC_Basisverordnungsfunktion
     *
     * @return string 
     */
    public function getAGCBasisverordnungsfunktion()
    {
        return $this->AGC_Basisverordnungsfunktion;
    }

    /**
     * Set AGD_Basisverordnungs_ID
     *
     * @param string $aGDBasisverordnungsID
     * @return T28500
     */
    public function setAGDBasisverordnungsID($aGDBasisverordnungsID)
    {
        $this->AGD_Basisverordnungs_ID = $aGDBasisverordnungsID;

        return $this;
    }

    /**
     * Get AGD_Basisverordnungs_ID
     *
     * @return string 
     */
    public function getAGDBasisverordnungsID()
    {
        return $this->AGD_Basisverordnungs_ID;
    }

    /**
     * Set AGE_Veröffentlichungsdatum_der_Basisverordnung
     *
     * @param \DateTime $aGEVeröffentlichungsdatumDerBasisverordnung
     * @return T28500
     */
    public function setAGEVeröffentlichungsdatumDerBasisverordnung($aGEVeröffentlichungsdatumDerBasisverordnung)
    {
        $this->AGE_Veröffentlichungsdatum_der_Basisverordnung = $aGEVeröffentlichungsdatumDerBasisverordnung;

        return $this;
    }

    /**
     * Get AGE_Veröffentlichungsdatum_der_Basisverordnung
     *
     * @return \DateTime 
     */
    public function getAGEVeröffentlichungsdatumDerBasisverordnung()
    {
        return $this->AGE_Veröffentlichungsdatum_der_Basisverordnung;
    }

    /**
     * Set AGF_Nummer_des_Amtsblattes
     *
     * @param string $aGFNummerDesAmtsblattes
     * @return T28500
     */
    public function setAGFNummerDesAmtsblattes($aGFNummerDesAmtsblattes)
    {
        $this->AGF_Nummer_des_Amtsblattes = $aGFNummerDesAmtsblattes;

        return $this;
    }

    /**
     * Get AGF_Nummer_des_Amtsblattes
     *
     * @return string 
     */
    public function getAGFNummerDesAmtsblattes()
    {
        return $this->AGF_Nummer_des_Amtsblattes;
    }

    /**
     * Set AGG_Amtsblatt_Seite
     *
     * @param string $aGGAmtsblattSeite
     * @return T28500
     */
    public function setAGGAmtsblattSeite($aGGAmtsblattSeite)
    {
        $this->AGG_Amtsblatt_Seite = $aGGAmtsblattSeite;

        return $this;
    }

    /**
     * Get AGG_Amtsblatt_Seite
     *
     * @return string 
     */
    public function getAGGAmtsblattSeite()
    {
        return $this->AGG_Amtsblatt_Seite;
    }

    /**
     * Set AGH_Datum_des_Gültigkeitsbeginns_der_Basisverordnung
     *
     * @param \DateTime $aGHDatumDesGültigkeitsbeginnsDerBasisverordnung
     * @return T28500
     */
    public function setAGHDatumDesGültigkeitsbeginnsDerBasisverordnung($aGHDatumDesGültigkeitsbeginnsDerBasisverordnung)
    {
        $this->AGH_Datum_des_Gültigkeitsbeginns_der_Basisverordnung = $aGHDatumDesGültigkeitsbeginnsDerBasisverordnung;

        return $this;
    }

    /**
     * Get AGH_Datum_des_Gültigkeitsbeginns_der_Basisverordnung
     *
     * @return \DateTime 
     */
    public function getAGHDatumDesGültigkeitsbeginnsDerBasisverordnung()
    {
        return $this->AGH_Datum_des_Gültigkeitsbeginns_der_Basisverordnung;
    }

    /**
     * Set AGI_Gültigkeitsendedatum_der_Basisverordnung
     *
     * @param \DateTime $aGIGültigkeitsendedatumDerBasisverordnung
     * @return T28500
     */
    public function setAGIGültigkeitsendedatumDerBasisverordnung($aGIGültigkeitsendedatumDerBasisverordnung)
    {
        $this->AGI_Gültigkeitsendedatum_der_Basisverordnung = $aGIGültigkeitsendedatumDerBasisverordnung;

        return $this;
    }

    /**
     * Get AGI_Gültigkeitsendedatum_der_Basisverordnung
     *
     * @return \DateTime 
     */
    public function getAGIGültigkeitsendedatumDerBasisverordnung()
    {
        return $this->AGI_Gültigkeitsendedatum_der_Basisverordnung;
    }

    /**
     * Set AGJ_tatsächliches_Endedatum_der_Basisverordnung
     *
     * @param \DateTime $aGJTatsächlichesEndedatumDerBasisverordnung
     * @return T28500
     */
    public function setAGJTatsächlichesEndedatumDerBasisverordnung($aGJTatsächlichesEndedatumDerBasisverordnung)
    {
        $this->AGJ_tatsächliches_Endedatum_der_Basisverordnung = $aGJTatsächlichesEndedatumDerBasisverordnung;

        return $this;
    }

    /**
     * Get AGJ_tatsächliches_Endedatum_der_Basisverordnung
     *
     * @return \DateTime 
     */
    public function getAGJTatsächlichesEndedatumDerBasisverordnung()
    {
        return $this->AGJ_tatsächliches_Endedatum_der_Basisverordnung;
    }

    /**
     * Set AGK_Gemeinschaftscode
     *
     * @param string $aGKGemeinschaftscode
     * @return T28500
     */
    public function setAGKGemeinschaftscode($aGKGemeinschaftscode)
    {
        $this->AGK_Gemeinschaftscode = $aGKGemeinschaftscode;

        return $this;
    }

    /**
     * Get AGK_Gemeinschaftscode
     *
     * @return string 
     */
    public function getAGKGemeinschaftscode()
    {
        return $this->AGK_Gemeinschaftscode;
    }

    /**
     * Set AGL_Verordnungsgruppen_ID
     *
     * @param string $aGLVerordnungsgruppenID
     * @return T28500
     */
    public function setAGLVerordnungsgruppenID($aGLVerordnungsgruppenID)
    {
        $this->AGL_Verordnungsgruppen_ID = $aGLVerordnungsgruppenID;

        return $this;
    }

    /**
     * Get AGL_Verordnungsgruppen_ID
     *
     * @return string 
     */
    public function getAGLVerordnungsgruppenID()
    {
        return $this->AGL_Verordnungsgruppen_ID;
    }

    /**
     * Set AGM_Funktion_der_Antidumpingverordnung
     *
     * @param string $aGMFunktionDerAntidumpingverordnung
     * @return T28500
     */
    public function setAGMFunktionDerAntidumpingverordnung($aGMFunktionDerAntidumpingverordnung)
    {
        $this->AGM_Funktion_der_Antidumpingverordnung = $aGMFunktionDerAntidumpingverordnung;

        return $this;
    }

    /**
     * Get AGM_Funktion_der_Antidumpingverordnung
     *
     * @return string 
     */
    public function getAGMFunktionDerAntidumpingverordnung()
    {
        return $this->AGM_Funktion_der_Antidumpingverordnung;
    }

    /**
     * Set AGN_Verwandter_Antidumpingverordnungs_ID
     *
     * @param string $aGNVerwandterAntidumpingverordnungsID
     * @return T28500
     */
    public function setAGNVerwandterAntidumpingverordnungsID($aGNVerwandterAntidumpingverordnungsID)
    {
        $this->AGN_Verwandter_Antidumpingverordnungs_ID = $aGNVerwandterAntidumpingverordnungsID;

        return $this;
    }

    /**
     * Get AGN_Verwandter_Antidumpingverordnungs_ID
     *
     * @return string 
     */
    public function getAGNVerwandterAntidumpingverordnungsID()
    {
        return $this->AGN_Verwandter_Antidumpingverordnungs_ID;
    }

    /**
     * Set AGO_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aGOFunktionDerVollständigenAufhebungsverordnung
     * @return T28500
     */
    public function setAGOFunktionDerVollständigenAufhebungsverordnung($aGOFunktionDerVollständigenAufhebungsverordnung)
    {
        $this->AGO_Funktion_der_vollständigen_Aufhebungsverordnung = $aGOFunktionDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AGO_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAGOFunktionDerVollständigenAufhebungsverordnung()
    {
        return $this->AGO_Funktion_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AGP_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aGPIDDerVollständigenAufhebungsverordnung
     * @return T28500
     */
    public function setAGPIDDerVollständigenAufhebungsverordnung($aGPIDDerVollständigenAufhebungsverordnung)
    {
        $this->AGP_ID_der_vollständigen_Aufhebungsverordnung = $aGPIDDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AGP_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAGPIDDerVollständigenAufhebungsverordnung()
    {
        return $this->AGP_ID_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AGQ_Funktion_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aGQFunktionDerExplizitenAufhebungsverordnung
     * @return T28500
     */
    public function setAGQFunktionDerExplizitenAufhebungsverordnung($aGQFunktionDerExplizitenAufhebungsverordnung)
    {
        $this->AGQ_Funktion_der_expliziten_Aufhebungsverordnung = $aGQFunktionDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AGQ_Funktion_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAGQFunktionDerExplizitenAufhebungsverordnung()
    {
        return $this->AGQ_Funktion_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AGR_ID_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aGRIDDerExplizitenAufhebungsverordnung
     * @return T28500
     */
    public function setAGRIDDerExplizitenAufhebungsverordnung($aGRIDDerExplizitenAufhebungsverordnung)
    {
        $this->AGR_ID_der_expliziten_Aufhebungsverordnung = $aGRIDDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AGR_ID_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAGRIDDerExplizitenAufhebungsverordnung()
    {
        return $this->AGR_ID_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AGS_Ersatzindikator
     *
     * @param string $aGSErsatzindikator
     * @return T28500
     */
    public function setAGSErsatzindikator($aGSErsatzindikator)
    {
        $this->AGS_Ersatzindikator = $aGSErsatzindikator;

        return $this;
    }

    /**
     * Get AGS_Ersatzindikator
     *
     * @return string 
     */
    public function getAGSErsatzindikator()
    {
        return $this->AGS_Ersatzindikator;
    }

    /**
     * Set AGT_ausgesetztes_Merkmal
     *
     * @param string $aGTAusgesetztesMerkmal
     * @return T28500
     */
    public function setAGTAusgesetztesMerkmal($aGTAusgesetztesMerkmal)
    {
        $this->AGT_ausgesetztes_Merkmal = $aGTAusgesetztesMerkmal;

        return $this;
    }

    /**
     * Get AGT_ausgesetztes_Merkmal
     *
     * @return string 
     */
    public function getAGTAusgesetztesMerkmal()
    {
        return $this->AGT_ausgesetztes_Merkmal;
    }

    /**
     * Set AGU_Informationstext
     *
     * @param string $aGUInformationstext
     * @return T28500
     */
    public function setAGUInformationstext($aGUInformationstext)
    {
        $this->AGU_Informationstext = $aGUInformationstext;

        return $this;
    }

    /**
     * Get AGU_Informationstext
     *
     * @return string 
     */
    public function getAGUInformationstext()
    {
        return $this->AGU_Informationstext;
    }

    /**
     * Set AGV_Billigungsindikator
     *
     * @param string $aGVBilligungsindikator
     * @return T28500
     */
    public function setAGVBilligungsindikator($aGVBilligungsindikator)
    {
        $this->AGV_Billigungsindikator = $aGVBilligungsindikator;

        return $this;
    }

    /**
     * Get AGV_Billigungsindikator
     *
     * @return string 
     */
    public function getAGVBilligungsindikator()
    {
        return $this->AGV_Billigungsindikator;
    }
}
