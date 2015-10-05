<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N42015
 */
class N42015
{
    /**
     * @var integer
     */
    private $BEZ_SID_der_nationalen_Warennomenklatur;

    /**
     * @var string
     */
    private $BFA_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BFB_Fußnote;

    /**
     * @var \DateTime
     */
    private $BFC_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BFD_Endedatum;

    /**
     * @var string
     */
    private $BFE_nationaler_Warennomenklaturcode;

    /**
     * @var string
     */
    private $BFF_Warenliniensuffix;


    /**
     * Set BEZ_SID_der_nationalen_Warennomenklatur
     *
     * @param integer $bEZSIDDerNationalenWarennomenklatur
     * @return N42015
     */
    public function setBEZSIDDerNationalenWarennomenklatur($bEZSIDDerNationalenWarennomenklatur)
    {
        $this->BEZ_SID_der_nationalen_Warennomenklatur = $bEZSIDDerNationalenWarennomenklatur;

        return $this;
    }

    /**
     * Get BEZ_SID_der_nationalen_Warennomenklatur
     *
     * @return integer 
     */
    public function getBEZSIDDerNationalenWarennomenklatur()
    {
        return $this->BEZ_SID_der_nationalen_Warennomenklatur;
    }

    /**
     * Set BFA_Fußnotenart_ID
     *
     * @param string $bFAFußnotenartID
     * @return N42015
     */
    public function setBFAFußnotenartID($bFAFußnotenartID)
    {
        $this->BFA_Fußnotenart_ID = $bFAFußnotenartID;

        return $this;
    }

    /**
     * Get BFA_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBFAFußnotenartID()
    {
        return $this->BFA_Fußnotenart_ID;
    }

    /**
     * Set BFB_Fußnote
     *
     * @param string $bFBFußnote
     * @return N42015
     */
    public function setBFBFußnote($bFBFußnote)
    {
        $this->BFB_Fußnote = $bFBFußnote;

        return $this;
    }

    /**
     * Get BFB_Fußnote
     *
     * @return string 
     */
    public function getBFBFußnote()
    {
        return $this->BFB_Fußnote;
    }

    /**
     * Set BFC_Beginndatum
     *
     * @param \DateTime $bFCBeginndatum
     * @return N42015
     */
    public function setBFCBeginndatum($bFCBeginndatum)
    {
        $this->BFC_Beginndatum = $bFCBeginndatum;

        return $this;
    }

    /**
     * Get BFC_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBFCBeginndatum()
    {
        return $this->BFC_Beginndatum;
    }

    /**
     * Set BFD_Endedatum
     *
     * @param \DateTime $bFDEndedatum
     * @return N42015
     */
    public function setBFDEndedatum($bFDEndedatum)
    {
        $this->BFD_Endedatum = $bFDEndedatum;

        return $this;
    }

    /**
     * Get BFD_Endedatum
     *
     * @return \DateTime 
     */
    public function getBFDEndedatum()
    {
        return $this->BFD_Endedatum;
    }

    /**
     * Set BFE_nationaler_Warennomenklaturcode
     *
     * @param string $bFENationalerWarennomenklaturcode
     * @return N42015
     */
    public function setBFENationalerWarennomenklaturcode($bFENationalerWarennomenklaturcode)
    {
        $this->BFE_nationaler_Warennomenklaturcode = $bFENationalerWarennomenklaturcode;

        return $this;
    }

    /**
     * Get BFE_nationaler_Warennomenklaturcode
     *
     * @return string 
     */
    public function getBFENationalerWarennomenklaturcode()
    {
        return $this->BFE_nationaler_Warennomenklaturcode;
    }

    /**
     * Set BFF_Warenliniensuffix
     *
     * @param string $bFFWarenliniensuffix
     * @return N42015
     */
    public function setBFFWarenliniensuffix($bFFWarenliniensuffix)
    {
        $this->BFF_Warenliniensuffix = $bFFWarenliniensuffix;

        return $this;
    }

    /**
     * Get BFF_Warenliniensuffix
     *
     * @return string 
     */
    public function getBFFWarenliniensuffix()
    {
        return $this->BFF_Warenliniensuffix;
    }
}
