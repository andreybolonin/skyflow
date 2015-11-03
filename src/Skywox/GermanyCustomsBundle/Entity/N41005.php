<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N41005
 */
class N41005
{
    /**
     * @var integer
     */
    private $BED_SID_der_Verbrauchsteuer;

    /**
     * @var string
     */
    private $BEE_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BEF_Fußnote;

    /**
     * @var \DateTime
     */
    private $BEG_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BEH_Endedatum;


    /**
     * Set BED_SID_der_Verbrauchsteuer
     *
     * @param integer $bEDSIDDerVerbrauchsteuer
     * @return N41005
     */
    public function setBEDSIDDerVerbrauchsteuer($bEDSIDDerVerbrauchsteuer)
    {
        $this->BED_SID_der_Verbrauchsteuer = $bEDSIDDerVerbrauchsteuer;

        return $this;
    }

    /**
     * Get BED_SID_der_Verbrauchsteuer
     *
     * @return integer 
     */
    public function getBEDSIDDerVerbrauchsteuer()
    {
        return $this->BED_SID_der_Verbrauchsteuer;
    }

    /**
     * Set BEE_Fußnotenart_ID
     *
     * @param string $bEEFußnotenartID
     * @return N41005
     */
    public function setBEEFußnotenartID($bEEFußnotenartID)
    {
        $this->BEE_Fußnotenart_ID = $bEEFußnotenartID;

        return $this;
    }

    /**
     * Get BEE_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBEEFußnotenartID()
    {
        return $this->BEE_Fußnotenart_ID;
    }

    /**
     * Set BEF_Fußnote
     *
     * @param string $bEFFußnote
     * @return N41005
     */
    public function setBEFFußnote($bEFFußnote)
    {
        $this->BEF_Fußnote = $bEFFußnote;

        return $this;
    }

    /**
     * Get BEF_Fußnote
     *
     * @return string 
     */
    public function getBEFFußnote()
    {
        return $this->BEF_Fußnote;
    }

    /**
     * Set BEG_Beginndatum
     *
     * @param \DateTime $bEGBeginndatum
     * @return N41005
     */
    public function setBEGBeginndatum($bEGBeginndatum)
    {
        $this->BEG_Beginndatum = $bEGBeginndatum;

        return $this;
    }

    /**
     * Get BEG_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBEGBeginndatum()
    {
        return $this->BEG_Beginndatum;
    }

    /**
     * Set BEH_Endedatum
     *
     * @param \DateTime $bEHEndedatum
     * @return N41005
     */
    public function setBEHEndedatum($bEHEndedatum)
    {
        $this->BEH_Endedatum = $bEHEndedatum;

        return $this;
    }

    /**
     * Get BEH_Endedatum
     *
     * @return \DateTime 
     */
    public function getBEHEndedatum()
    {
        return $this->BEH_Endedatum;
    }
}
