<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N30000
 */
class N30000
{
    /**
     * @var string
     */
    private $AZW_Maßnahmeart;

    /**
     * @var string
     */
    private $AZX_Herkunft_der_Maßnahmeart_TARIC__national;

    /**
     * @var \DateTime
     */
    private $AZY_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AZZ_Endedatum;

    /**
     * @var string
     */
    private $BAA_Handelsbewegungscode;

    /**
     * @var string
     */
    private $BAB_Maßnahmeartserien_ID;

    /**
     * @var string
     */
    private $BAC_Beschreibung_der_Maßnahmeart;

    /**
     * @var string
     */
    private $BAD_Abgabengruppe;

    /**
     * @var string
     */
    private $BAE_Anzeigeflag;

    /**
     * @var string
     */
    private $BAF_Maßnahmemerkmal;


    /**
     * Set AZW_Maßnahmeart
     *
     * @param string $aZWMaßnahmeart
     * @return N30000
     */
    public function setAZWMaßnahmeart($aZWMaßnahmeart)
    {
        $this->AZW_Maßnahmeart = $aZWMaßnahmeart;

        return $this;
    }

    /**
     * Get AZW_Maßnahmeart
     *
     * @return string 
     */
    public function getAZWMaßnahmeart()
    {
        return $this->AZW_Maßnahmeart;
    }

    /**
     * Set AZX_Herkunft_der_Maßnahmeart_TARIC__national
     *
     * @param string $aZXHerkunftDerMaßnahmeartTARICNational
     * @return N30000
     */
    public function setAZXHerkunftDerMaßnahmeartTARICNational($aZXHerkunftDerMaßnahmeartTARICNational)
    {
        $this->AZX_Herkunft_der_Maßnahmeart_TARIC__national = $aZXHerkunftDerMaßnahmeartTARICNational;

        return $this;
    }

    /**
     * Get AZX_Herkunft_der_Maßnahmeart_TARIC__national
     *
     * @return string 
     */
    public function getAZXHerkunftDerMaßnahmeartTARICNational()
    {
        return $this->AZX_Herkunft_der_Maßnahmeart_TARIC__national;
    }

    /**
     * Set AZY_Beginndatum
     *
     * @param \DateTime $aZYBeginndatum
     * @return N30000
     */
    public function setAZYBeginndatum($aZYBeginndatum)
    {
        $this->AZY_Beginndatum = $aZYBeginndatum;

        return $this;
    }

    /**
     * Get AZY_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAZYBeginndatum()
    {
        return $this->AZY_Beginndatum;
    }

    /**
     * Set AZZ_Endedatum
     *
     * @param \DateTime $aZZEndedatum
     * @return N30000
     */
    public function setAZZEndedatum($aZZEndedatum)
    {
        $this->AZZ_Endedatum = $aZZEndedatum;

        return $this;
    }

    /**
     * Get AZZ_Endedatum
     *
     * @return \DateTime 
     */
    public function getAZZEndedatum()
    {
        return $this->AZZ_Endedatum;
    }

    /**
     * Set BAA_Handelsbewegungscode
     *
     * @param string $bAAHandelsbewegungscode
     * @return N30000
     */
    public function setBAAHandelsbewegungscode($bAAHandelsbewegungscode)
    {
        $this->BAA_Handelsbewegungscode = $bAAHandelsbewegungscode;

        return $this;
    }

    /**
     * Get BAA_Handelsbewegungscode
     *
     * @return string 
     */
    public function getBAAHandelsbewegungscode()
    {
        return $this->BAA_Handelsbewegungscode;
    }

    /**
     * Set BAB_Maßnahmeartserien_ID
     *
     * @param string $bABMaßnahmeartserienID
     * @return N30000
     */
    public function setBABMaßnahmeartserienID($bABMaßnahmeartserienID)
    {
        $this->BAB_Maßnahmeartserien_ID = $bABMaßnahmeartserienID;

        return $this;
    }

    /**
     * Get BAB_Maßnahmeartserien_ID
     *
     * @return string 
     */
    public function getBABMaßnahmeartserienID()
    {
        return $this->BAB_Maßnahmeartserien_ID;
    }

    /**
     * Set BAC_Beschreibung_der_Maßnahmeart
     *
     * @param string $bACBeschreibungDerMaßnahmeart
     * @return N30000
     */
    public function setBACBeschreibungDerMaßnahmeart($bACBeschreibungDerMaßnahmeart)
    {
        $this->BAC_Beschreibung_der_Maßnahmeart = $bACBeschreibungDerMaßnahmeart;

        return $this;
    }

    /**
     * Get BAC_Beschreibung_der_Maßnahmeart
     *
     * @return string 
     */
    public function getBACBeschreibungDerMaßnahmeart()
    {
        return $this->BAC_Beschreibung_der_Maßnahmeart;
    }

    /**
     * Set BAD_Abgabengruppe
     *
     * @param string $bADAbgabengruppe
     * @return N30000
     */
    public function setBADAbgabengruppe($bADAbgabengruppe)
    {
        $this->BAD_Abgabengruppe = $bADAbgabengruppe;

        return $this;
    }

    /**
     * Get BAD_Abgabengruppe
     *
     * @return string 
     */
    public function getBADAbgabengruppe()
    {
        return $this->BAD_Abgabengruppe;
    }

    /**
     * Set BAE_Anzeigeflag
     *
     * @param string $bAEAnzeigeflag
     * @return N30000
     */
    public function setBAEAnzeigeflag($bAEAnzeigeflag)
    {
        $this->BAE_Anzeigeflag = $bAEAnzeigeflag;

        return $this;
    }

    /**
     * Get BAE_Anzeigeflag
     *
     * @return string 
     */
    public function getBAEAnzeigeflag()
    {
        return $this->BAE_Anzeigeflag;
    }

    /**
     * Set BAF_Maßnahmemerkmal
     *
     * @param string $bAFMaßnahmemerkmal
     * @return N30000
     */
    public function setBAFMaßnahmemerkmal($bAFMaßnahmemerkmal)
    {
        $this->BAF_Maßnahmemerkmal = $bAFMaßnahmemerkmal;

        return $this;
    }

    /**
     * Get BAF_Maßnahmemerkmal
     *
     * @return string 
     */
    public function getBAFMaßnahmemerkmal()
    {
        return $this->BAF_Maßnahmemerkmal;
    }
}
