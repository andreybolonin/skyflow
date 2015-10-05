<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N42020
 */
class N42020
{
    /**
     * @var integer
     */
    private $BFG_SID;

    /**
     * @var integer
     */
    private $BFH_SID_der_nationalen_Warennomenklatur;

    /**
     * @var string
     */
    private $BFI_Hinweisart_ID;

    /**
     * @var string
     */
    private $BFJ_Hinweis;

    /**
     * @var \DateTime
     */
    private $BFK_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BFL_Endedatum;

    /**
     * @var string
     */
    private $BFM_ID_des_geographischen_Gebiets;

    /**
     * @var string
     */
    private $BFN_ID_der_Maßnahmeart;

    /**
     * @var string
     */
    private $BFO_Zusatzcode;

    /**
     * @var string
     */
    private $BFP_Zusatzcodeart;


    /**
     * Set BFG_SID
     *
     * @param integer $bFGSID
     * @return N42020
     */
    public function setBFGSID($bFGSID)
    {
        $this->BFG_SID = $bFGSID;

        return $this;
    }

    /**
     * Get BFG_SID
     *
     * @return integer 
     */
    public function getBFGSID()
    {
        return $this->BFG_SID;
    }

    /**
     * Set BFH_SID_der_nationalen_Warennomenklatur
     *
     * @param integer $bFHSIDDerNationalenWarennomenklatur
     * @return N42020
     */
    public function setBFHSIDDerNationalenWarennomenklatur($bFHSIDDerNationalenWarennomenklatur)
    {
        $this->BFH_SID_der_nationalen_Warennomenklatur = $bFHSIDDerNationalenWarennomenklatur;

        return $this;
    }

    /**
     * Get BFH_SID_der_nationalen_Warennomenklatur
     *
     * @return integer 
     */
    public function getBFHSIDDerNationalenWarennomenklatur()
    {
        return $this->BFH_SID_der_nationalen_Warennomenklatur;
    }

    /**
     * Set BFI_Hinweisart_ID
     *
     * @param string $bFIHinweisartID
     * @return N42020
     */
    public function setBFIHinweisartID($bFIHinweisartID)
    {
        $this->BFI_Hinweisart_ID = $bFIHinweisartID;

        return $this;
    }

    /**
     * Get BFI_Hinweisart_ID
     *
     * @return string 
     */
    public function getBFIHinweisartID()
    {
        return $this->BFI_Hinweisart_ID;
    }

    /**
     * Set BFJ_Hinweis
     *
     * @param string $bFJHinweis
     * @return N42020
     */
    public function setBFJHinweis($bFJHinweis)
    {
        $this->BFJ_Hinweis = $bFJHinweis;

        return $this;
    }

    /**
     * Get BFJ_Hinweis
     *
     * @return string 
     */
    public function getBFJHinweis()
    {
        return $this->BFJ_Hinweis;
    }

    /**
     * Set BFK_Beginndatum
     *
     * @param \DateTime $bFKBeginndatum
     * @return N42020
     */
    public function setBFKBeginndatum($bFKBeginndatum)
    {
        $this->BFK_Beginndatum = $bFKBeginndatum;

        return $this;
    }

    /**
     * Get BFK_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBFKBeginndatum()
    {
        return $this->BFK_Beginndatum;
    }

    /**
     * Set BFL_Endedatum
     *
     * @param \DateTime $bFLEndedatum
     * @return N42020
     */
    public function setBFLEndedatum($bFLEndedatum)
    {
        $this->BFL_Endedatum = $bFLEndedatum;

        return $this;
    }

    /**
     * Get BFL_Endedatum
     *
     * @return \DateTime 
     */
    public function getBFLEndedatum()
    {
        return $this->BFL_Endedatum;
    }

    /**
     * Set BFM_ID_des_geographischen_Gebiets
     *
     * @param string $bFMIDDesGeographischenGebiets
     * @return N42020
     */
    public function setBFMIDDesGeographischenGebiets($bFMIDDesGeographischenGebiets)
    {
        $this->BFM_ID_des_geographischen_Gebiets = $bFMIDDesGeographischenGebiets;

        return $this;
    }

    /**
     * Get BFM_ID_des_geographischen_Gebiets
     *
     * @return string 
     */
    public function getBFMIDDesGeographischenGebiets()
    {
        return $this->BFM_ID_des_geographischen_Gebiets;
    }

    /**
     * Set BFN_ID_der_Maßnahmeart
     *
     * @param string $bFNIDDerMaßnahmeart
     * @return N42020
     */
    public function setBFNIDDerMaßnahmeart($bFNIDDerMaßnahmeart)
    {
        $this->BFN_ID_der_Maßnahmeart = $bFNIDDerMaßnahmeart;

        return $this;
    }

    /**
     * Get BFN_ID_der_Maßnahmeart
     *
     * @return string 
     */
    public function getBFNIDDerMaßnahmeart()
    {
        return $this->BFN_ID_der_Maßnahmeart;
    }

    /**
     * Set BFO_Zusatzcode
     *
     * @param string $bFOZusatzcode
     * @return N42020
     */
    public function setBFOZusatzcode($bFOZusatzcode)
    {
        $this->BFO_Zusatzcode = $bFOZusatzcode;

        return $this;
    }

    /**
     * Get BFO_Zusatzcode
     *
     * @return string 
     */
    public function getBFOZusatzcode()
    {
        return $this->BFO_Zusatzcode;
    }

    /**
     * Set BFP_Zusatzcodeart
     *
     * @param string $bFPZusatzcodeart
     * @return N42020
     */
    public function setBFPZusatzcodeart($bFPZusatzcodeart)
    {
        $this->BFP_Zusatzcodeart = $bFPZusatzcodeart;

        return $this;
    }

    /**
     * Get BFP_Zusatzcodeart
     *
     * @return string 
     */
    public function getBFPZusatzcodeart()
    {
        return $this->BFP_Zusatzcodeart;
    }
}
