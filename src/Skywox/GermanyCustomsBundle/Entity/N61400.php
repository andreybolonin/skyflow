<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61400
 */
class N61400
{
    /**
     * @var integer
     */
    private $BIQ_SID;

    /**
     * @var \DateTime
     */
    private $BIT_Beginndatum;

    /**
     * @var string
     */
    private $BIR_Stichwort;

    /**
     * @var string
     */
    private $BIS_Ausfuhrlistennummer;

    /**
     * @var \DateTime
     */
    private $BIU_Endedatum;


    /**
     * Set BIQ_SID
     *
     * @param integer $bIQSID
     * @return N61400
     */
    public function setBIQSID($bIQSID)
    {
        $this->BIQ_SID = $bIQSID;

        return $this;
    }

    /**
     * Get BIQ_SID
     *
     * @return integer 
     */
    public function getBIQSID()
    {
        return $this->BIQ_SID;
    }

    /**
     * Set BIT_Beginndatum
     *
     * @param \DateTime $bITBeginndatum
     * @return N61400
     */
    public function setBITBeginndatum($bITBeginndatum)
    {
        $this->BIT_Beginndatum = $bITBeginndatum;

        return $this;
    }

    /**
     * Get BIT_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBITBeginndatum()
    {
        return $this->BIT_Beginndatum;
    }

    /**
     * Set BIR_Stichwort
     *
     * @param string $bIRStichwort
     * @return N61400
     */
    public function setBIRStichwort($bIRStichwort)
    {
        $this->BIR_Stichwort = $bIRStichwort;

        return $this;
    }

    /**
     * Get BIR_Stichwort
     *
     * @return string 
     */
    public function getBIRStichwort()
    {
        return $this->BIR_Stichwort;
    }

    /**
     * Set BIS_Ausfuhrlistennummer
     *
     * @param string $bISAusfuhrlistennummer
     * @return N61400
     */
    public function setBISAusfuhrlistennummer($bISAusfuhrlistennummer)
    {
        $this->BIS_Ausfuhrlistennummer = $bISAusfuhrlistennummer;

        return $this;
    }

    /**
     * Get BIS_Ausfuhrlistennummer
     *
     * @return string 
     */
    public function getBISAusfuhrlistennummer()
    {
        return $this->BIS_Ausfuhrlistennummer;
    }

    /**
     * Set BIU_Endedatum
     *
     * @param \DateTime $bIUEndedatum
     * @return N61400
     */
    public function setBIUEndedatum($bIUEndedatum)
    {
        $this->BIU_Endedatum = $bIUEndedatum;

        return $this;
    }

    /**
     * Get BIU_Endedatum
     *
     * @return \DateTime 
     */
    public function getBIUEndedatum()
    {
        return $this->BIU_Endedatum;
    }
}
