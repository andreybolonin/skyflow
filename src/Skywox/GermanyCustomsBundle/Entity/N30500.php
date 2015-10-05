<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N30500
 */
class N30500
{
    /**
     * @var integer
     */
    private $BAN_SID_für_Stichwort;

    /**
     * @var \DateTime
     */
    private $BAQ_Beginndatum;

    /**
     * @var string
     */
    private $BAO_Stichwort;

    /**
     * @var string
     */
    private $BAP_Fundstelle;

    /**
     * @var \DateTime
     */
    private $BAR_Endedatum;

    /**
     * @var string
     */
    private $BAS_Teil_der_Erläuterungen;


    /**
     * Set BAN_SID_für_Stichwort
     *
     * @param integer $bANSIDFürStichwort
     * @return N30500
     */
    public function setBANSIDFürStichwort($bANSIDFürStichwort)
    {
        $this->BAN_SID_für_Stichwort = $bANSIDFürStichwort;

        return $this;
    }

    /**
     * Get BAN_SID_für_Stichwort
     *
     * @return integer 
     */
    public function getBANSIDFürStichwort()
    {
        return $this->BAN_SID_für_Stichwort;
    }

    /**
     * Set BAQ_Beginndatum
     *
     * @param \DateTime $bAQBeginndatum
     * @return N30500
     */
    public function setBAQBeginndatum($bAQBeginndatum)
    {
        $this->BAQ_Beginndatum = $bAQBeginndatum;

        return $this;
    }

    /**
     * Get BAQ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBAQBeginndatum()
    {
        return $this->BAQ_Beginndatum;
    }

    /**
     * Set BAO_Stichwort
     *
     * @param string $bAOStichwort
     * @return N30500
     */
    public function setBAOStichwort($bAOStichwort)
    {
        $this->BAO_Stichwort = $bAOStichwort;

        return $this;
    }

    /**
     * Get BAO_Stichwort
     *
     * @return string 
     */
    public function getBAOStichwort()
    {
        return $this->BAO_Stichwort;
    }

    /**
     * Set BAP_Fundstelle
     *
     * @param string $bAPFundstelle
     * @return N30500
     */
    public function setBAPFundstelle($bAPFundstelle)
    {
        $this->BAP_Fundstelle = $bAPFundstelle;

        return $this;
    }

    /**
     * Get BAP_Fundstelle
     *
     * @return string 
     */
    public function getBAPFundstelle()
    {
        return $this->BAP_Fundstelle;
    }

    /**
     * Set BAR_Endedatum
     *
     * @param \DateTime $bAREndedatum
     * @return N30500
     */
    public function setBAREndedatum($bAREndedatum)
    {
        $this->BAR_Endedatum = $bAREndedatum;

        return $this;
    }

    /**
     * Get BAR_Endedatum
     *
     * @return \DateTime 
     */
    public function getBAREndedatum()
    {
        return $this->BAR_Endedatum;
    }

    /**
     * Set BAS_Teil_der_Erläuterungen
     *
     * @param string $bASTeilDerErläuterungen
     * @return N30500
     */
    public function setBASTeilDerErläuterungen($bASTeilDerErläuterungen)
    {
        $this->BAS_Teil_der_Erläuterungen = $bASTeilDerErläuterungen;

        return $this;
    }

    /**
     * Get BAS_Teil_der_Erläuterungen
     *
     * @return string 
     */
    public function getBASTeilDerErläuterungen()
    {
        return $this->BAS_Teil_der_Erläuterungen;
    }
}
