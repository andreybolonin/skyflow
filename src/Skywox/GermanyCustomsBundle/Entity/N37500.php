<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N37500
 */
class N37500
{
    /**
     * @var string
     */
    private $BBQ_Zweite_und_dritte_Stelle_des_Antragscodes;

    /**
     * @var string
     */
    private $BBR_Art_der_TARIC_Maßnahme;

    /**
     * @var string
     */
    private $BBT_Art_der_Bescheinigung;

    /**
     * @var string
     */
    private $BBU_Schlüssel_der_Bescheinigung;

    /**
     * @var string
     */
    private $BBV_Schlüssel_der_Bedingung;

    /**
     * @var \DateTime
     */
    private $BBW_Beginndatum;

    /**
     * @var string
     */
    private $BBS_Art_der_TARIC_Maßnahme_2;

    /**
     * @var \DateTime
     */
    private $BBX_Endedatum;


    /**
     * Set BBQ_Zweite_und_dritte_Stelle_des_Antragscodes
     *
     * @param string $bBQZweiteUndDritteStelleDesAntragscodes
     * @return N37500
     */
    public function setBBQZweiteUndDritteStelleDesAntragscodes($bBQZweiteUndDritteStelleDesAntragscodes)
    {
        $this->BBQ_Zweite_und_dritte_Stelle_des_Antragscodes = $bBQZweiteUndDritteStelleDesAntragscodes;

        return $this;
    }

    /**
     * Get BBQ_Zweite_und_dritte_Stelle_des_Antragscodes
     *
     * @return string 
     */
    public function getBBQZweiteUndDritteStelleDesAntragscodes()
    {
        return $this->BBQ_Zweite_und_dritte_Stelle_des_Antragscodes;
    }

    /**
     * Set BBR_Art_der_TARIC_Maßnahme
     *
     * @param string $bBRArtDerTARICMaßnahme
     * @return N37500
     */
    public function setBBRArtDerTARICMaßnahme($bBRArtDerTARICMaßnahme)
    {
        $this->BBR_Art_der_TARIC_Maßnahme = $bBRArtDerTARICMaßnahme;

        return $this;
    }

    /**
     * Get BBR_Art_der_TARIC_Maßnahme
     *
     * @return string 
     */
    public function getBBRArtDerTARICMaßnahme()
    {
        return $this->BBR_Art_der_TARIC_Maßnahme;
    }

    /**
     * Set BBT_Art_der_Bescheinigung
     *
     * @param string $bBTArtDerBescheinigung
     * @return N37500
     */
    public function setBBTArtDerBescheinigung($bBTArtDerBescheinigung)
    {
        $this->BBT_Art_der_Bescheinigung = $bBTArtDerBescheinigung;

        return $this;
    }

    /**
     * Get BBT_Art_der_Bescheinigung
     *
     * @return string 
     */
    public function getBBTArtDerBescheinigung()
    {
        return $this->BBT_Art_der_Bescheinigung;
    }

    /**
     * Set BBU_Schlüssel_der_Bescheinigung
     *
     * @param string $bBUSchlüsselDerBescheinigung
     * @return N37500
     */
    public function setBBUSchlüsselDerBescheinigung($bBUSchlüsselDerBescheinigung)
    {
        $this->BBU_Schlüssel_der_Bescheinigung = $bBUSchlüsselDerBescheinigung;

        return $this;
    }

    /**
     * Get BBU_Schlüssel_der_Bescheinigung
     *
     * @return string 
     */
    public function getBBUSchlüsselDerBescheinigung()
    {
        return $this->BBU_Schlüssel_der_Bescheinigung;
    }

    /**
     * Set BBV_Schlüssel_der_Bedingung
     *
     * @param string $bBVSchlüsselDerBedingung
     * @return N37500
     */
    public function setBBVSchlüsselDerBedingung($bBVSchlüsselDerBedingung)
    {
        $this->BBV_Schlüssel_der_Bedingung = $bBVSchlüsselDerBedingung;

        return $this;
    }

    /**
     * Get BBV_Schlüssel_der_Bedingung
     *
     * @return string 
     */
    public function getBBVSchlüsselDerBedingung()
    {
        return $this->BBV_Schlüssel_der_Bedingung;
    }

    /**
     * Set BBW_Beginndatum
     *
     * @param \DateTime $bBWBeginndatum
     * @return N37500
     */
    public function setBBWBeginndatum($bBWBeginndatum)
    {
        $this->BBW_Beginndatum = $bBWBeginndatum;

        return $this;
    }

    /**
     * Get BBW_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBBWBeginndatum()
    {
        return $this->BBW_Beginndatum;
    }

    /**
     * Set BBS_Art_der_TARIC_Maßnahme_2
     *
     * @param string $bBSArtDerTARICMaßnahme2
     * @return N37500
     */
    public function setBBSArtDerTARICMaßnahme2($bBSArtDerTARICMaßnahme2)
    {
        $this->BBS_Art_der_TARIC_Maßnahme_2 = $bBSArtDerTARICMaßnahme2;

        return $this;
    }

    /**
     * Get BBS_Art_der_TARIC_Maßnahme_2
     *
     * @return string 
     */
    public function getBBSArtDerTARICMaßnahme2()
    {
        return $this->BBS_Art_der_TARIC_Maßnahme_2;
    }

    /**
     * Set BBX_Endedatum
     *
     * @param \DateTime $bBXEndedatum
     * @return N37500
     */
    public function setBBXEndedatum($bBXEndedatum)
    {
        $this->BBX_Endedatum = $bBXEndedatum;

        return $this;
    }

    /**
     * Get BBX_Endedatum
     *
     * @return \DateTime 
     */
    public function getBBXEndedatum()
    {
        return $this->BBX_Endedatum;
    }
}
