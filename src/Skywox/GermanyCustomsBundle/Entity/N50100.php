<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N50100
 */
class N50100
{
    /**
     * @var integer
     */
    private $BGQ_SID_für_die_AE_Nomenklatur;

    /**
     * @var \DateTime
     */
    private $BGR_Beginndatum;

    /**
     * @var string
     */
    private $BGT_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BGU_Fußnote;

    /**
     * @var \DateTime
     */
    private $BGS_Endedatum;


    /**
     * Set BGQ_SID_für_die_AE_Nomenklatur
     *
     * @param integer $bGQSIDFürDieAENomenklatur
     * @return N50100
     */
    public function setBGQSIDFürDieAENomenklatur($bGQSIDFürDieAENomenklatur)
    {
        $this->BGQ_SID_für_die_AE_Nomenklatur = $bGQSIDFürDieAENomenklatur;

        return $this;
    }

    /**
     * Get BGQ_SID_für_die_AE_Nomenklatur
     *
     * @return integer 
     */
    public function getBGQSIDFürDieAENomenklatur()
    {
        return $this->BGQ_SID_für_die_AE_Nomenklatur;
    }

    /**
     * Set BGR_Beginndatum
     *
     * @param \DateTime $bGRBeginndatum
     * @return N50100
     */
    public function setBGRBeginndatum($bGRBeginndatum)
    {
        $this->BGR_Beginndatum = $bGRBeginndatum;

        return $this;
    }

    /**
     * Get BGR_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBGRBeginndatum()
    {
        return $this->BGR_Beginndatum;
    }

    /**
     * Set BGT_Fußnotenart_ID
     *
     * @param string $bGTFußnotenartID
     * @return N50100
     */
    public function setBGTFußnotenartID($bGTFußnotenartID)
    {
        $this->BGT_Fußnotenart_ID = $bGTFußnotenartID;

        return $this;
    }

    /**
     * Get BGT_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBGTFußnotenartID()
    {
        return $this->BGT_Fußnotenart_ID;
    }

    /**
     * Set BGU_Fußnote
     *
     * @param string $bGUFußnote
     * @return N50100
     */
    public function setBGUFußnote($bGUFußnote)
    {
        $this->BGU_Fußnote = $bGUFußnote;

        return $this;
    }

    /**
     * Get BGU_Fußnote
     *
     * @return string 
     */
    public function getBGUFußnote()
    {
        return $this->BGU_Fußnote;
    }

    /**
     * Set BGS_Endedatum
     *
     * @param \DateTime $bGSEndedatum
     * @return N50100
     */
    public function setBGSEndedatum($bGSEndedatum)
    {
        $this->BGS_Endedatum = $bGSEndedatum;

        return $this;
    }

    /**
     * Get BGS_Endedatum
     *
     * @return \DateTime 
     */
    public function getBGSEndedatum()
    {
        return $this->BGS_Endedatum;
    }
}
