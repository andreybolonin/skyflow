<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N30005
 */
class N30005
{
    /**
     * @var string
     */
    private $BAG_Maßnahmeart;

    /**
     * @var string
     */
    private $BAH_Herkunft_der_Maßnahmeart_TARIC__national;

    /**
     * @var string
     */
    private $BAI_Buchungsschlüssel;

    /**
     * @var \DateTime
     */
    private $BAJ_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BAK_Endedatum;

    /**
     * @var string
     */
    private $BAL_Sicherheitsart;

    /**
     * @var string
     */
    private $BAM_Bereich;


    /**
     * Set BAG_Maßnahmeart
     *
     * @param string $bAGMaßnahmeart
     * @return N30005
     */
    public function setBAGMaßnahmeart($bAGMaßnahmeart)
    {
        $this->BAG_Maßnahmeart = $bAGMaßnahmeart;

        return $this;
    }

    /**
     * Get BAG_Maßnahmeart
     *
     * @return string 
     */
    public function getBAGMaßnahmeart()
    {
        return $this->BAG_Maßnahmeart;
    }

    /**
     * Set BAH_Herkunft_der_Maßnahmeart_TARIC__national
     *
     * @param string $bAHHerkunftDerMaßnahmeartTARICNational
     * @return N30005
     */
    public function setBAHHerkunftDerMaßnahmeartTARICNational($bAHHerkunftDerMaßnahmeartTARICNational)
    {
        $this->BAH_Herkunft_der_Maßnahmeart_TARIC__national = $bAHHerkunftDerMaßnahmeartTARICNational;

        return $this;
    }

    /**
     * Get BAH_Herkunft_der_Maßnahmeart_TARIC__national
     *
     * @return string 
     */
    public function getBAHHerkunftDerMaßnahmeartTARICNational()
    {
        return $this->BAH_Herkunft_der_Maßnahmeart_TARIC__national;
    }

    /**
     * Set BAI_Buchungsschlüssel
     *
     * @param string $bAIBuchungsschlüssel
     * @return N30005
     */
    public function setBAIBuchungsschlüssel($bAIBuchungsschlüssel)
    {
        $this->BAI_Buchungsschlüssel = $bAIBuchungsschlüssel;

        return $this;
    }

    /**
     * Get BAI_Buchungsschlüssel
     *
     * @return string 
     */
    public function getBAIBuchungsschlüssel()
    {
        return $this->BAI_Buchungsschlüssel;
    }

    /**
     * Set BAJ_Beginndatum
     *
     * @param \DateTime $bAJBeginndatum
     * @return N30005
     */
    public function setBAJBeginndatum($bAJBeginndatum)
    {
        $this->BAJ_Beginndatum = $bAJBeginndatum;

        return $this;
    }

    /**
     * Get BAJ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBAJBeginndatum()
    {
        return $this->BAJ_Beginndatum;
    }

    /**
     * Set BAK_Endedatum
     *
     * @param \DateTime $bAKEndedatum
     * @return N30005
     */
    public function setBAKEndedatum($bAKEndedatum)
    {
        $this->BAK_Endedatum = $bAKEndedatum;

        return $this;
    }

    /**
     * Get BAK_Endedatum
     *
     * @return \DateTime 
     */
    public function getBAKEndedatum()
    {
        return $this->BAK_Endedatum;
    }

    /**
     * Set BAL_Sicherheitsart
     *
     * @param string $bALSicherheitsart
     * @return N30005
     */
    public function setBALSicherheitsart($bALSicherheitsart)
    {
        $this->BAL_Sicherheitsart = $bALSicherheitsart;

        return $this;
    }

    /**
     * Get BAL_Sicherheitsart
     *
     * @return string 
     */
    public function getBALSicherheitsart()
    {
        return $this->BAL_Sicherheitsart;
    }

    /**
     * Set BAM_Bereich
     *
     * @param string $bAMBereich
     * @return N30005
     */
    public function setBAMBereich($bAMBereich)
    {
        $this->BAM_Bereich = $bAMBereich;

        return $this;
    }

    /**
     * Get BAM_Bereich
     *
     * @return string 
     */
    public function getBAMBereich()
    {
        return $this->BAM_Bereich;
    }
}
