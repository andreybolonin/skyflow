<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N50200
 */
class N50200
{
    /**
     * @var integer
     */
    private $BGV_SID_der_nationalen_AE_Nomenklatur;

    /**
     * @var \DateTime
     */
    private $BGW_Beginndatum;

    /**
     * @var string
     */
    private $BGY_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BGZ_Fußnote;

    /**
     * @var \DateTime
     */
    private $BGX_Endedatum;


    /**
     * Set BGV_SID_der_nationalen_AE_Nomenklatur
     *
     * @param integer $bGVSIDDerNationalenAENomenklatur
     * @return N50200
     */
    public function setBGVSIDDerNationalenAENomenklatur($bGVSIDDerNationalenAENomenklatur)
    {
        $this->BGV_SID_der_nationalen_AE_Nomenklatur = $bGVSIDDerNationalenAENomenklatur;

        return $this;
    }

    /**
     * Get BGV_SID_der_nationalen_AE_Nomenklatur
     *
     * @return integer 
     */
    public function getBGVSIDDerNationalenAENomenklatur()
    {
        return $this->BGV_SID_der_nationalen_AE_Nomenklatur;
    }

    /**
     * Set BGW_Beginndatum
     *
     * @param \DateTime $bGWBeginndatum
     * @return N50200
     */
    public function setBGWBeginndatum($bGWBeginndatum)
    {
        $this->BGW_Beginndatum = $bGWBeginndatum;

        return $this;
    }

    /**
     * Get BGW_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBGWBeginndatum()
    {
        return $this->BGW_Beginndatum;
    }

    /**
     * Set BGY_Fußnotenart_ID
     *
     * @param string $bGYFußnotenartID
     * @return N50200
     */
    public function setBGYFußnotenartID($bGYFußnotenartID)
    {
        $this->BGY_Fußnotenart_ID = $bGYFußnotenartID;

        return $this;
    }

    /**
     * Get BGY_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBGYFußnotenartID()
    {
        return $this->BGY_Fußnotenart_ID;
    }

    /**
     * Set BGZ_Fußnote
     *
     * @param string $bGZFußnote
     * @return N50200
     */
    public function setBGZFußnote($bGZFußnote)
    {
        $this->BGZ_Fußnote = $bGZFußnote;

        return $this;
    }

    /**
     * Get BGZ_Fußnote
     *
     * @return string 
     */
    public function getBGZFußnote()
    {
        return $this->BGZ_Fußnote;
    }

    /**
     * Set BGX_Endedatum
     *
     * @param \DateTime $bGXEndedatum
     * @return N50200
     */
    public function setBGXEndedatum($bGXEndedatum)
    {
        $this->BGX_Endedatum = $bGXEndedatum;

        return $this;
    }

    /**
     * Get BGX_Endedatum
     *
     * @return \DateTime 
     */
    public function getBGXEndedatum()
    {
        return $this->BGX_Endedatum;
    }
}
