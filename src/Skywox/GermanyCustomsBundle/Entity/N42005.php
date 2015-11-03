<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N42005
 */
class N42005
{
    /**
     * @var integer
     */
    private $BER_SID;

    /**
     * @var integer
     */
    private $BES_SID_der_nationalen_Warennomenklatur;

    /**
     * @var string
     */
    private $BET_Geographisches_Gebiet;

    /**
     * @var string
     */
    private $BEU_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BEV_Fußnote;

    /**
     * @var \DateTime
     */
    private $BEW_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BEX_Endedatum;

    /**
     * @var string
     */
    private $BEY_Verfahrensbeschränkung;


    /**
     * Set BER_SID
     *
     * @param integer $bERSID
     * @return N42005
     */
    public function setBERSID($bERSID)
    {
        $this->BER_SID = $bERSID;

        return $this;
    }

    /**
     * Get BER_SID
     *
     * @return integer 
     */
    public function getBERSID()
    {
        return $this->BER_SID;
    }

    /**
     * Set BES_SID_der_nationalen_Warennomenklatur
     *
     * @param integer $bESSIDDerNationalenWarennomenklatur
     * @return N42005
     */
    public function setBESSIDDerNationalenWarennomenklatur($bESSIDDerNationalenWarennomenklatur)
    {
        $this->BES_SID_der_nationalen_Warennomenklatur = $bESSIDDerNationalenWarennomenklatur;

        return $this;
    }

    /**
     * Get BES_SID_der_nationalen_Warennomenklatur
     *
     * @return integer 
     */
    public function getBESSIDDerNationalenWarennomenklatur()
    {
        return $this->BES_SID_der_nationalen_Warennomenklatur;
    }

    /**
     * Set BET_Geographisches_Gebiet
     *
     * @param string $bETGeographischesGebiet
     * @return N42005
     */
    public function setBETGeographischesGebiet($bETGeographischesGebiet)
    {
        $this->BET_Geographisches_Gebiet = $bETGeographischesGebiet;

        return $this;
    }

    /**
     * Get BET_Geographisches_Gebiet
     *
     * @return string 
     */
    public function getBETGeographischesGebiet()
    {
        return $this->BET_Geographisches_Gebiet;
    }

    /**
     * Set BEU_Fußnotenart_ID
     *
     * @param string $bEUFußnotenartID
     * @return N42005
     */
    public function setBEUFußnotenartID($bEUFußnotenartID)
    {
        $this->BEU_Fußnotenart_ID = $bEUFußnotenartID;

        return $this;
    }

    /**
     * Get BEU_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBEUFußnotenartID()
    {
        return $this->BEU_Fußnotenart_ID;
    }

    /**
     * Set BEV_Fußnote
     *
     * @param string $bEVFußnote
     * @return N42005
     */
    public function setBEVFußnote($bEVFußnote)
    {
        $this->BEV_Fußnote = $bEVFußnote;

        return $this;
    }

    /**
     * Get BEV_Fußnote
     *
     * @return string 
     */
    public function getBEVFußnote()
    {
        return $this->BEV_Fußnote;
    }

    /**
     * Set BEW_Beginndatum
     *
     * @param \DateTime $bEWBeginndatum
     * @return N42005
     */
    public function setBEWBeginndatum($bEWBeginndatum)
    {
        $this->BEW_Beginndatum = $bEWBeginndatum;

        return $this;
    }

    /**
     * Get BEW_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBEWBeginndatum()
    {
        return $this->BEW_Beginndatum;
    }

    /**
     * Set BEX_Endedatum
     *
     * @param \DateTime $bEXEndedatum
     * @return N42005
     */
    public function setBEXEndedatum($bEXEndedatum)
    {
        $this->BEX_Endedatum = $bEXEndedatum;

        return $this;
    }

    /**
     * Get BEX_Endedatum
     *
     * @return \DateTime 
     */
    public function getBEXEndedatum()
    {
        return $this->BEX_Endedatum;
    }

    /**
     * Set BEY_Verfahrensbeschränkung
     *
     * @param string $bEYVerfahrensbeschränkung
     * @return N42005
     */
    public function setBEYVerfahrensbeschränkung($bEYVerfahrensbeschränkung)
    {
        $this->BEY_Verfahrensbeschränkung = $bEYVerfahrensbeschränkung;

        return $this;
    }

    /**
     * Get BEY_Verfahrensbeschränkung
     *
     * @return string 
     */
    public function getBEYVerfahrensbeschränkung()
    {
        return $this->BEY_Verfahrensbeschränkung;
    }
}
