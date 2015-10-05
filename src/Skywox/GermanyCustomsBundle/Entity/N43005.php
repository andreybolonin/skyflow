<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N43005
 */
class N43005
{
    /**
     * @var integer
     */
    private $BGA_SID_der_Maßnahme;

    /**
     * @var string
     */
    private $BGB_Buchungsschlüssel;

    /**
     * @var \DateTime
     */
    private $BGC_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BGD_Endedatum;


    /**
     * Set BGA_SID_der_Maßnahme
     *
     * @param integer $bGASIDDerMaßnahme
     * @return N43005
     */
    public function setBGASIDDerMaßnahme($bGASIDDerMaßnahme)
    {
        $this->BGA_SID_der_Maßnahme = $bGASIDDerMaßnahme;

        return $this;
    }

    /**
     * Get BGA_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getBGASIDDerMaßnahme()
    {
        return $this->BGA_SID_der_Maßnahme;
    }

    /**
     * Set BGB_Buchungsschlüssel
     *
     * @param string $bGBBuchungsschlüssel
     * @return N43005
     */
    public function setBGBBuchungsschlüssel($bGBBuchungsschlüssel)
    {
        $this->BGB_Buchungsschlüssel = $bGBBuchungsschlüssel;

        return $this;
    }

    /**
     * Get BGB_Buchungsschlüssel
     *
     * @return string 
     */
    public function getBGBBuchungsschlüssel()
    {
        return $this->BGB_Buchungsschlüssel;
    }

    /**
     * Set BGC_Beginndatum
     *
     * @param \DateTime $bGCBeginndatum
     * @return N43005
     */
    public function setBGCBeginndatum($bGCBeginndatum)
    {
        $this->BGC_Beginndatum = $bGCBeginndatum;

        return $this;
    }

    /**
     * Get BGC_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBGCBeginndatum()
    {
        return $this->BGC_Beginndatum;
    }

    /**
     * Set BGD_Endedatum
     *
     * @param \DateTime $bGDEndedatum
     * @return N43005
     */
    public function setBGDEndedatum($bGDEndedatum)
    {
        $this->BGD_Endedatum = $bGDEndedatum;

        return $this;
    }

    /**
     * Get BGD_Endedatum
     *
     * @return \DateTime 
     */
    public function getBGDEndedatum()
    {
        return $this->BGD_Endedatum;
    }
}
