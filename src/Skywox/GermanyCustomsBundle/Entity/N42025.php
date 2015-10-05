<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N42025
 */
class N42025
{
    /**
     * @var integer
     */
    private $BFQ_SID_der_Zuordnung_nationale_Warennomenklatur_nationaler_Hinw;

    /**
     * @var string
     */
    private $BFR_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BFS_Fußnote;

    /**
     * @var \DateTime
     */
    private $BFT_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BFU_Endedatum;


    /**
     * Set BFQ_SID_der_Zuordnung_nationale_Warennomenklatur_nationaler_Hinw
     *
     * @param integer $bFQSIDDerZuordnungNationaleWarennomenklaturNationalerHinw
     * @return N42025
     */
    public function setBFQSIDDerZuordnungNationaleWarennomenklaturNationalerHinw($bFQSIDDerZuordnungNationaleWarennomenklaturNationalerHinw)
    {
        $this->BFQ_SID_der_Zuordnung_nationale_Warennomenklatur_nationaler_Hinw = $bFQSIDDerZuordnungNationaleWarennomenklaturNationalerHinw;

        return $this;
    }

    /**
     * Get BFQ_SID_der_Zuordnung_nationale_Warennomenklatur_nationaler_Hinw
     *
     * @return integer 
     */
    public function getBFQSIDDerZuordnungNationaleWarennomenklaturNationalerHinw()
    {
        return $this->BFQ_SID_der_Zuordnung_nationale_Warennomenklatur_nationaler_Hinw;
    }

    /**
     * Set BFR_Fußnotenart_ID
     *
     * @param string $bFRFußnotenartID
     * @return N42025
     */
    public function setBFRFußnotenartID($bFRFußnotenartID)
    {
        $this->BFR_Fußnotenart_ID = $bFRFußnotenartID;

        return $this;
    }

    /**
     * Get BFR_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBFRFußnotenartID()
    {
        return $this->BFR_Fußnotenart_ID;
    }

    /**
     * Set BFS_Fußnote
     *
     * @param string $bFSFußnote
     * @return N42025
     */
    public function setBFSFußnote($bFSFußnote)
    {
        $this->BFS_Fußnote = $bFSFußnote;

        return $this;
    }

    /**
     * Get BFS_Fußnote
     *
     * @return string 
     */
    public function getBFSFußnote()
    {
        return $this->BFS_Fußnote;
    }

    /**
     * Set BFT_Beginndatum
     *
     * @param \DateTime $bFTBeginndatum
     * @return N42025
     */
    public function setBFTBeginndatum($bFTBeginndatum)
    {
        $this->BFT_Beginndatum = $bFTBeginndatum;

        return $this;
    }

    /**
     * Get BFT_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBFTBeginndatum()
    {
        return $this->BFT_Beginndatum;
    }

    /**
     * Set BFU_Endedatum
     *
     * @param \DateTime $bFUEndedatum
     * @return N42025
     */
    public function setBFUEndedatum($bFUEndedatum)
    {
        $this->BFU_Endedatum = $bFUEndedatum;

        return $this;
    }

    /**
     * Get BFU_Endedatum
     *
     * @return \DateTime 
     */
    public function getBFUEndedatum()
    {
        return $this->BFU_Endedatum;
    }
}
