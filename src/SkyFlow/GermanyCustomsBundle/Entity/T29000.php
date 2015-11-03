<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T29000
 */
class T29000
{
    /**
     * @var string
     */
    private $AGW_Funktion_der_Änderungsverordnung;

    /**
     * @var string
     */
    private $AGX_Änderungsverordnungs_ID;

    /**
     * @var \DateTime
     */
    private $AGY_Veröffentlichungsdatum_der_Änderungsverordnung;

    /**
     * @var string
     */
    private $AGZ_Nummer_des_Amtsblattes;

    /**
     * @var string
     */
    private $AHA_Amtsblatt_Seite;

    /**
     * @var \DateTime
     */
    private $AHB_Datum_des_Gültigkeitsbeginns_der_Änderungsverordnung;

    /**
     * @var \DateTime
     */
    private $AHC_Gültigkeitsendedatum_der_Änderungsverordnung;

    /**
     * @var \DateTime
     */
    private $AHD_Tatsächliches_Endedatum_der_Änderungsverordnung;

    /**
     * @var string
     */
    private $AHE_Funktion_der_Basisverordnung;

    /**
     * @var string
     */
    private $AHF_ID_der_Basisverordnung;

    /**
     * @var string
     */
    private $AHG_Funktion_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AHH_ID_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AHI_Funktion_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AHJ_ID_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AHK_Ersatzindikator;

    /**
     * @var string
     */
    private $AHL_ausgesetztes_Merkmal;

    /**
     * @var string
     */
    private $AHM_Informationstext;

    /**
     * @var string
     */
    private $AHN_Billigungsindikator;


    /**
     * Set AGW_Funktion_der_Änderungsverordnung
     *
     * @param string $aGWFunktionDerÄnderungsverordnung
     * @return T29000
     */
    public function setAGWFunktionDerÄnderungsverordnung($aGWFunktionDerÄnderungsverordnung)
    {
        $this->AGW_Funktion_der_Änderungsverordnung = $aGWFunktionDerÄnderungsverordnung;

        return $this;
    }

    /**
     * Get AGW_Funktion_der_Änderungsverordnung
     *
     * @return string 
     */
    public function getAGWFunktionDerÄnderungsverordnung()
    {
        return $this->AGW_Funktion_der_Änderungsverordnung;
    }

    /**
     * Set AGX_Änderungsverordnungs_ID
     *
     * @param string $aGXÄnderungsverordnungsID
     * @return T29000
     */
    public function setAGXÄnderungsverordnungsID($aGXÄnderungsverordnungsID)
    {
        $this->AGX_Änderungsverordnungs_ID = $aGXÄnderungsverordnungsID;

        return $this;
    }

    /**
     * Get AGX_Änderungsverordnungs_ID
     *
     * @return string 
     */
    public function getAGXÄnderungsverordnungsID()
    {
        return $this->AGX_Änderungsverordnungs_ID;
    }

    /**
     * Set AGY_Veröffentlichungsdatum_der_Änderungsverordnung
     *
     * @param \DateTime $aGYVeröffentlichungsdatumDerÄnderungsverordnung
     * @return T29000
     */
    public function setAGYVeröffentlichungsdatumDerÄnderungsverordnung($aGYVeröffentlichungsdatumDerÄnderungsverordnung)
    {
        $this->AGY_Veröffentlichungsdatum_der_Änderungsverordnung = $aGYVeröffentlichungsdatumDerÄnderungsverordnung;

        return $this;
    }

    /**
     * Get AGY_Veröffentlichungsdatum_der_Änderungsverordnung
     *
     * @return \DateTime 
     */
    public function getAGYVeröffentlichungsdatumDerÄnderungsverordnung()
    {
        return $this->AGY_Veröffentlichungsdatum_der_Änderungsverordnung;
    }

    /**
     * Set AGZ_Nummer_des_Amtsblattes
     *
     * @param string $aGZNummerDesAmtsblattes
     * @return T29000
     */
    public function setAGZNummerDesAmtsblattes($aGZNummerDesAmtsblattes)
    {
        $this->AGZ_Nummer_des_Amtsblattes = $aGZNummerDesAmtsblattes;

        return $this;
    }

    /**
     * Get AGZ_Nummer_des_Amtsblattes
     *
     * @return string 
     */
    public function getAGZNummerDesAmtsblattes()
    {
        return $this->AGZ_Nummer_des_Amtsblattes;
    }

    /**
     * Set AHA_Amtsblatt_Seite
     *
     * @param string $aHAAmtsblattSeite
     * @return T29000
     */
    public function setAHAAmtsblattSeite($aHAAmtsblattSeite)
    {
        $this->AHA_Amtsblatt_Seite = $aHAAmtsblattSeite;

        return $this;
    }

    /**
     * Get AHA_Amtsblatt_Seite
     *
     * @return string 
     */
    public function getAHAAmtsblattSeite()
    {
        return $this->AHA_Amtsblatt_Seite;
    }

    /**
     * Set AHB_Datum_des_Gültigkeitsbeginns_der_Änderungsverordnung
     *
     * @param \DateTime $aHBDatumDesGültigkeitsbeginnsDerÄnderungsverordnung
     * @return T29000
     */
    public function setAHBDatumDesGültigkeitsbeginnsDerÄnderungsverordnung($aHBDatumDesGültigkeitsbeginnsDerÄnderungsverordnung)
    {
        $this->AHB_Datum_des_Gültigkeitsbeginns_der_Änderungsverordnung = $aHBDatumDesGültigkeitsbeginnsDerÄnderungsverordnung;

        return $this;
    }

    /**
     * Get AHB_Datum_des_Gültigkeitsbeginns_der_Änderungsverordnung
     *
     * @return \DateTime 
     */
    public function getAHBDatumDesGültigkeitsbeginnsDerÄnderungsverordnung()
    {
        return $this->AHB_Datum_des_Gültigkeitsbeginns_der_Änderungsverordnung;
    }

    /**
     * Set AHC_Gültigkeitsendedatum_der_Änderungsverordnung
     *
     * @param \DateTime $aHCGültigkeitsendedatumDerÄnderungsverordnung
     * @return T29000
     */
    public function setAHCGültigkeitsendedatumDerÄnderungsverordnung($aHCGültigkeitsendedatumDerÄnderungsverordnung)
    {
        $this->AHC_Gültigkeitsendedatum_der_Änderungsverordnung = $aHCGültigkeitsendedatumDerÄnderungsverordnung;

        return $this;
    }

    /**
     * Get AHC_Gültigkeitsendedatum_der_Änderungsverordnung
     *
     * @return \DateTime 
     */
    public function getAHCGültigkeitsendedatumDerÄnderungsverordnung()
    {
        return $this->AHC_Gültigkeitsendedatum_der_Änderungsverordnung;
    }

    /**
     * Set AHD_Tatsächliches_Endedatum_der_Änderungsverordnung
     *
     * @param \DateTime $aHDTatsächlichesEndedatumDerÄnderungsverordnung
     * @return T29000
     */
    public function setAHDTatsächlichesEndedatumDerÄnderungsverordnung($aHDTatsächlichesEndedatumDerÄnderungsverordnung)
    {
        $this->AHD_Tatsächliches_Endedatum_der_Änderungsverordnung = $aHDTatsächlichesEndedatumDerÄnderungsverordnung;

        return $this;
    }

    /**
     * Get AHD_Tatsächliches_Endedatum_der_Änderungsverordnung
     *
     * @return \DateTime 
     */
    public function getAHDTatsächlichesEndedatumDerÄnderungsverordnung()
    {
        return $this->AHD_Tatsächliches_Endedatum_der_Änderungsverordnung;
    }

    /**
     * Set AHE_Funktion_der_Basisverordnung
     *
     * @param string $aHEFunktionDerBasisverordnung
     * @return T29000
     */
    public function setAHEFunktionDerBasisverordnung($aHEFunktionDerBasisverordnung)
    {
        $this->AHE_Funktion_der_Basisverordnung = $aHEFunktionDerBasisverordnung;

        return $this;
    }

    /**
     * Get AHE_Funktion_der_Basisverordnung
     *
     * @return string 
     */
    public function getAHEFunktionDerBasisverordnung()
    {
        return $this->AHE_Funktion_der_Basisverordnung;
    }

    /**
     * Set AHF_ID_der_Basisverordnung
     *
     * @param string $aHFIDDerBasisverordnung
     * @return T29000
     */
    public function setAHFIDDerBasisverordnung($aHFIDDerBasisverordnung)
    {
        $this->AHF_ID_der_Basisverordnung = $aHFIDDerBasisverordnung;

        return $this;
    }

    /**
     * Get AHF_ID_der_Basisverordnung
     *
     * @return string 
     */
    public function getAHFIDDerBasisverordnung()
    {
        return $this->AHF_ID_der_Basisverordnung;
    }

    /**
     * Set AHG_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aHGFunktionDerVollständigenAufhebungsverordnung
     * @return T29000
     */
    public function setAHGFunktionDerVollständigenAufhebungsverordnung($aHGFunktionDerVollständigenAufhebungsverordnung)
    {
        $this->AHG_Funktion_der_vollständigen_Aufhebungsverordnung = $aHGFunktionDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AHG_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAHGFunktionDerVollständigenAufhebungsverordnung()
    {
        return $this->AHG_Funktion_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AHH_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aHHIDDerVollständigenAufhebungsverordnung
     * @return T29000
     */
    public function setAHHIDDerVollständigenAufhebungsverordnung($aHHIDDerVollständigenAufhebungsverordnung)
    {
        $this->AHH_ID_der_vollständigen_Aufhebungsverordnung = $aHHIDDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AHH_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAHHIDDerVollständigenAufhebungsverordnung()
    {
        return $this->AHH_ID_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AHI_Funktion_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aHIFunktionDerExplizitenAufhebungsverordnung
     * @return T29000
     */
    public function setAHIFunktionDerExplizitenAufhebungsverordnung($aHIFunktionDerExplizitenAufhebungsverordnung)
    {
        $this->AHI_Funktion_der_expliziten_Aufhebungsverordnung = $aHIFunktionDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AHI_Funktion_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAHIFunktionDerExplizitenAufhebungsverordnung()
    {
        return $this->AHI_Funktion_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AHJ_ID_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aHJIDDerExplizitenAufhebungsverordnung
     * @return T29000
     */
    public function setAHJIDDerExplizitenAufhebungsverordnung($aHJIDDerExplizitenAufhebungsverordnung)
    {
        $this->AHJ_ID_der_expliziten_Aufhebungsverordnung = $aHJIDDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AHJ_ID_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAHJIDDerExplizitenAufhebungsverordnung()
    {
        return $this->AHJ_ID_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AHK_Ersatzindikator
     *
     * @param string $aHKErsatzindikator
     * @return T29000
     */
    public function setAHKErsatzindikator($aHKErsatzindikator)
    {
        $this->AHK_Ersatzindikator = $aHKErsatzindikator;

        return $this;
    }

    /**
     * Get AHK_Ersatzindikator
     *
     * @return string 
     */
    public function getAHKErsatzindikator()
    {
        return $this->AHK_Ersatzindikator;
    }

    /**
     * Set AHL_ausgesetztes_Merkmal
     *
     * @param string $aHLAusgesetztesMerkmal
     * @return T29000
     */
    public function setAHLAusgesetztesMerkmal($aHLAusgesetztesMerkmal)
    {
        $this->AHL_ausgesetztes_Merkmal = $aHLAusgesetztesMerkmal;

        return $this;
    }

    /**
     * Get AHL_ausgesetztes_Merkmal
     *
     * @return string 
     */
    public function getAHLAusgesetztesMerkmal()
    {
        return $this->AHL_ausgesetztes_Merkmal;
    }

    /**
     * Set AHM_Informationstext
     *
     * @param string $aHMInformationstext
     * @return T29000
     */
    public function setAHMInformationstext($aHMInformationstext)
    {
        $this->AHM_Informationstext = $aHMInformationstext;

        return $this;
    }

    /**
     * Get AHM_Informationstext
     *
     * @return string 
     */
    public function getAHMInformationstext()
    {
        return $this->AHM_Informationstext;
    }

    /**
     * Set AHN_Billigungsindikator
     *
     * @param string $aHNBilligungsindikator
     * @return T29000
     */
    public function setAHNBilligungsindikator($aHNBilligungsindikator)
    {
        $this->AHN_Billigungsindikator = $aHNBilligungsindikator;

        return $this;
    }

    /**
     * Get AHN_Billigungsindikator
     *
     * @return string 
     */
    public function getAHNBilligungsindikator()
    {
        return $this->AHN_Billigungsindikator;
    }
}
