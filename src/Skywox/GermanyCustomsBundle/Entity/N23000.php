<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N23000
 */
class N23000
{
    /**
     * @var string
     */
    private $AVR_Buchungsschlüssel;

    /**
     * @var \DateTime
     */
    private $AVT_Beginndatum;

    /**
     * @var string
     */
    private $AVS_Buchungsschlüssel_EU_Code;

    /**
     * @var \DateTime
     */
    private $AVU_Endedatum;

    /**
     * @var string
     */
    private $AVV_nationale_Verbuchungsstelle_der_Einnahmen;

    /**
     * @var string
     */
    private $AVW_Zusatzinformationen_zur_Verbuchungsstelle;

    /**
     * @var string
     */
    private $AVX_Beschreibung_der_Abgaben;


    /**
     * Set AVR_Buchungsschlüssel
     *
     * @param string $aVRBuchungsschlüssel
     * @return N23000
     */
    public function setAVRBuchungsschlüssel($aVRBuchungsschlüssel)
    {
        $this->AVR_Buchungsschlüssel = $aVRBuchungsschlüssel;

        return $this;
    }

    /**
     * Get AVR_Buchungsschlüssel
     *
     * @return string 
     */
    public function getAVRBuchungsschlüssel()
    {
        return $this->AVR_Buchungsschlüssel;
    }

    /**
     * Set AVT_Beginndatum
     *
     * @param \DateTime $aVTBeginndatum
     * @return N23000
     */
    public function setAVTBeginndatum($aVTBeginndatum)
    {
        $this->AVT_Beginndatum = $aVTBeginndatum;

        return $this;
    }

    /**
     * Get AVT_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAVTBeginndatum()
    {
        return $this->AVT_Beginndatum;
    }

    /**
     * Set AVS_Buchungsschlüssel_EU_Code
     *
     * @param string $aVSBuchungsschlüsselEUCode
     * @return N23000
     */
    public function setAVSBuchungsschlüsselEUCode($aVSBuchungsschlüsselEUCode)
    {
        $this->AVS_Buchungsschlüssel_EU_Code = $aVSBuchungsschlüsselEUCode;

        return $this;
    }

    /**
     * Get AVS_Buchungsschlüssel_EU_Code
     *
     * @return string 
     */
    public function getAVSBuchungsschlüsselEUCode()
    {
        return $this->AVS_Buchungsschlüssel_EU_Code;
    }

    /**
     * Set AVU_Endedatum
     *
     * @param \DateTime $aVUEndedatum
     * @return N23000
     */
    public function setAVUEndedatum($aVUEndedatum)
    {
        $this->AVU_Endedatum = $aVUEndedatum;

        return $this;
    }

    /**
     * Get AVU_Endedatum
     *
     * @return \DateTime 
     */
    public function getAVUEndedatum()
    {
        return $this->AVU_Endedatum;
    }

    /**
     * Set AVV_nationale_Verbuchungsstelle_der_Einnahmen
     *
     * @param string $aVVNationaleVerbuchungsstelleDerEinnahmen
     * @return N23000
     */
    public function setAVVNationaleVerbuchungsstelleDerEinnahmen($aVVNationaleVerbuchungsstelleDerEinnahmen)
    {
        $this->AVV_nationale_Verbuchungsstelle_der_Einnahmen = $aVVNationaleVerbuchungsstelleDerEinnahmen;

        return $this;
    }

    /**
     * Get AVV_nationale_Verbuchungsstelle_der_Einnahmen
     *
     * @return string 
     */
    public function getAVVNationaleVerbuchungsstelleDerEinnahmen()
    {
        return $this->AVV_nationale_Verbuchungsstelle_der_Einnahmen;
    }

    /**
     * Set AVW_Zusatzinformationen_zur_Verbuchungsstelle
     *
     * @param string $aVWZusatzinformationenZurVerbuchungsstelle
     * @return N23000
     */
    public function setAVWZusatzinformationenZurVerbuchungsstelle($aVWZusatzinformationenZurVerbuchungsstelle)
    {
        $this->AVW_Zusatzinformationen_zur_Verbuchungsstelle = $aVWZusatzinformationenZurVerbuchungsstelle;

        return $this;
    }

    /**
     * Get AVW_Zusatzinformationen_zur_Verbuchungsstelle
     *
     * @return string 
     */
    public function getAVWZusatzinformationenZurVerbuchungsstelle()
    {
        return $this->AVW_Zusatzinformationen_zur_Verbuchungsstelle;
    }

    /**
     * Set AVX_Beschreibung_der_Abgaben
     *
     * @param string $aVXBeschreibungDerAbgaben
     * @return N23000
     */
    public function setAVXBeschreibungDerAbgaben($aVXBeschreibungDerAbgaben)
    {
        $this->AVX_Beschreibung_der_Abgaben = $aVXBeschreibungDerAbgaben;

        return $this;
    }

    /**
     * Get AVX_Beschreibung_der_Abgaben
     *
     * @return string 
     */
    public function getAVXBeschreibungDerAbgaben()
    {
        return $this->AVX_Beschreibung_der_Abgaben;
    }
}
