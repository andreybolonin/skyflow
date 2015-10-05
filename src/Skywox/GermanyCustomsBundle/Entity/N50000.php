<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N50000
 */
class N50000
{
    /**
     * @var integer
     */
    private $BGG_SID_für_die_nationale_AE_Nomenklatur;

    /**
     * @var \DateTime
     */
    private $BGH_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BGI_Endedatum;

    /**
     * @var string
     */
    private $BGJ_Warennomenklaturlinie;

    /**
     * @var string
     */
    private $BGK_Zusatzcodeart;

    /**
     * @var string
     */
    private $BGL_Zusatzcode;

    /**
     * @var string
     */
    private $BGM_Warenliniensuffix;

    /**
     * @var integer
     */
    private $BGN_SID_der_Warennomenklaturlinie;

    /**
     * @var string
     */
    private $BGO_Anzahl_der_Führungsstriche;

    /**
     * @var string
     */
    private $BGP_Ergänzende_Warenbeschreibung;


    /**
     * Set BGG_SID_für_die_nationale_AE_Nomenklatur
     *
     * @param integer $bGGSIDFürDieNationaleAENomenklatur
     * @return N50000
     */
    public function setBGGSIDFürDieNationaleAENomenklatur($bGGSIDFürDieNationaleAENomenklatur)
    {
        $this->BGG_SID_für_die_nationale_AE_Nomenklatur = $bGGSIDFürDieNationaleAENomenklatur;

        return $this;
    }

    /**
     * Get BGG_SID_für_die_nationale_AE_Nomenklatur
     *
     * @return integer 
     */
    public function getBGGSIDFürDieNationaleAENomenklatur()
    {
        return $this->BGG_SID_für_die_nationale_AE_Nomenklatur;
    }

    /**
     * Set BGH_Beginndatum
     *
     * @param \DateTime $bGHBeginndatum
     * @return N50000
     */
    public function setBGHBeginndatum($bGHBeginndatum)
    {
        $this->BGH_Beginndatum = $bGHBeginndatum;

        return $this;
    }

    /**
     * Get BGH_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBGHBeginndatum()
    {
        return $this->BGH_Beginndatum;
    }

    /**
     * Set BGI_Endedatum
     *
     * @param \DateTime $bGIEndedatum
     * @return N50000
     */
    public function setBGIEndedatum($bGIEndedatum)
    {
        $this->BGI_Endedatum = $bGIEndedatum;

        return $this;
    }

    /**
     * Get BGI_Endedatum
     *
     * @return \DateTime 
     */
    public function getBGIEndedatum()
    {
        return $this->BGI_Endedatum;
    }

    /**
     * Set BGJ_Warennomenklaturlinie
     *
     * @param string $bGJWarennomenklaturlinie
     * @return N50000
     */
    public function setBGJWarennomenklaturlinie($bGJWarennomenklaturlinie)
    {
        $this->BGJ_Warennomenklaturlinie = $bGJWarennomenklaturlinie;

        return $this;
    }

    /**
     * Get BGJ_Warennomenklaturlinie
     *
     * @return string 
     */
    public function getBGJWarennomenklaturlinie()
    {
        return $this->BGJ_Warennomenklaturlinie;
    }

    /**
     * Set BGK_Zusatzcodeart
     *
     * @param string $bGKZusatzcodeart
     * @return N50000
     */
    public function setBGKZusatzcodeart($bGKZusatzcodeart)
    {
        $this->BGK_Zusatzcodeart = $bGKZusatzcodeart;

        return $this;
    }

    /**
     * Get BGK_Zusatzcodeart
     *
     * @return string 
     */
    public function getBGKZusatzcodeart()
    {
        return $this->BGK_Zusatzcodeart;
    }

    /**
     * Set BGL_Zusatzcode
     *
     * @param string $bGLZusatzcode
     * @return N50000
     */
    public function setBGLZusatzcode($bGLZusatzcode)
    {
        $this->BGL_Zusatzcode = $bGLZusatzcode;

        return $this;
    }

    /**
     * Get BGL_Zusatzcode
     *
     * @return string 
     */
    public function getBGLZusatzcode()
    {
        return $this->BGL_Zusatzcode;
    }

    /**
     * Set BGM_Warenliniensuffix
     *
     * @param string $bGMWarenliniensuffix
     * @return N50000
     */
    public function setBGMWarenliniensuffix($bGMWarenliniensuffix)
    {
        $this->BGM_Warenliniensuffix = $bGMWarenliniensuffix;

        return $this;
    }

    /**
     * Get BGM_Warenliniensuffix
     *
     * @return string 
     */
    public function getBGMWarenliniensuffix()
    {
        return $this->BGM_Warenliniensuffix;
    }

    /**
     * Set BGN_SID_der_Warennomenklaturlinie
     *
     * @param integer $bGNSIDDerWarennomenklaturlinie
     * @return N50000
     */
    public function setBGNSIDDerWarennomenklaturlinie($bGNSIDDerWarennomenklaturlinie)
    {
        $this->BGN_SID_der_Warennomenklaturlinie = $bGNSIDDerWarennomenklaturlinie;

        return $this;
    }

    /**
     * Get BGN_SID_der_Warennomenklaturlinie
     *
     * @return integer 
     */
    public function getBGNSIDDerWarennomenklaturlinie()
    {
        return $this->BGN_SID_der_Warennomenklaturlinie;
    }

    /**
     * Set BGO_Anzahl_der_Führungsstriche
     *
     * @param string $bGOAnzahlDerFührungsstriche
     * @return N50000
     */
    public function setBGOAnzahlDerFührungsstriche($bGOAnzahlDerFührungsstriche)
    {
        $this->BGO_Anzahl_der_Führungsstriche = $bGOAnzahlDerFührungsstriche;

        return $this;
    }

    /**
     * Get BGO_Anzahl_der_Führungsstriche
     *
     * @return string 
     */
    public function getBGOAnzahlDerFührungsstriche()
    {
        return $this->BGO_Anzahl_der_Führungsstriche;
    }

    /**
     * Set BGP_Ergänzende_Warenbeschreibung
     *
     * @param string $bGPErgänzendeWarenbeschreibung
     * @return N50000
     */
    public function setBGPErgänzendeWarenbeschreibung($bGPErgänzendeWarenbeschreibung)
    {
        $this->BGP_Ergänzende_Warenbeschreibung = $bGPErgänzendeWarenbeschreibung;

        return $this;
    }

    /**
     * Get BGP_Ergänzende_Warenbeschreibung
     *
     * @return string 
     */
    public function getBGPErgänzendeWarenbeschreibung()
    {
        return $this->BGP_Ergänzende_Warenbeschreibung;
    }
}
