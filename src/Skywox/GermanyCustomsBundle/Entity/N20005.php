<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N20005
 */
class N20005
{
    /**
     * @var string
     */
    private $AUE_Abgabenart_der_zZt_in_Prüfung_befindlichen_Maßnahme;

    /**
     * @var string
     */
    private $AUF_Maßnahmeart_der_zusätzlich_auszuwertenden_Maßnahme;

    /**
     * @var \DateTime
     */
    private $AUG_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AUH_Endedatum;


    /**
     * Set AUE_Abgabenart_der_zZt_in_Prüfung_befindlichen_Maßnahme
     *
     * @param string $aUEAbgabenartDerZZtInPrüfungBefindlichenMaßnahme
     * @return N20005
     */
    public function setAUEAbgabenartDerZZtInPrüfungBefindlichenMaßnahme($aUEAbgabenartDerZZtInPrüfungBefindlichenMaßnahme)
    {
        $this->AUE_Abgabenart_der_zZt_in_Prüfung_befindlichen_Maßnahme = $aUEAbgabenartDerZZtInPrüfungBefindlichenMaßnahme;

        return $this;
    }

    /**
     * Get AUE_Abgabenart_der_zZt_in_Prüfung_befindlichen_Maßnahme
     *
     * @return string 
     */
    public function getAUEAbgabenartDerZZtInPrüfungBefindlichenMaßnahme()
    {
        return $this->AUE_Abgabenart_der_zZt_in_Prüfung_befindlichen_Maßnahme;
    }

    /**
     * Set AUF_Maßnahmeart_der_zusätzlich_auszuwertenden_Maßnahme
     *
     * @param string $aUFMaßnahmeartDerZusätzlichAuszuwertendenMaßnahme
     * @return N20005
     */
    public function setAUFMaßnahmeartDerZusätzlichAuszuwertendenMaßnahme($aUFMaßnahmeartDerZusätzlichAuszuwertendenMaßnahme)
    {
        $this->AUF_Maßnahmeart_der_zusätzlich_auszuwertenden_Maßnahme = $aUFMaßnahmeartDerZusätzlichAuszuwertendenMaßnahme;

        return $this;
    }

    /**
     * Get AUF_Maßnahmeart_der_zusätzlich_auszuwertenden_Maßnahme
     *
     * @return string 
     */
    public function getAUFMaßnahmeartDerZusätzlichAuszuwertendenMaßnahme()
    {
        return $this->AUF_Maßnahmeart_der_zusätzlich_auszuwertenden_Maßnahme;
    }

    /**
     * Set AUG_Beginndatum
     *
     * @param \DateTime $aUGBeginndatum
     * @return N20005
     */
    public function setAUGBeginndatum($aUGBeginndatum)
    {
        $this->AUG_Beginndatum = $aUGBeginndatum;

        return $this;
    }

    /**
     * Get AUG_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAUGBeginndatum()
    {
        return $this->AUG_Beginndatum;
    }

    /**
     * Set AUH_Endedatum
     *
     * @param \DateTime $aUHEndedatum
     * @return N20005
     */
    public function setAUHEndedatum($aUHEndedatum)
    {
        $this->AUH_Endedatum = $aUHEndedatum;

        return $this;
    }

    /**
     * Get AUH_Endedatum
     *
     * @return \DateTime 
     */
    public function getAUHEndedatum()
    {
        return $this->AUH_Endedatum;
    }
}
