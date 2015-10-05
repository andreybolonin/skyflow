<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40020
 */
class T40020
{
    /**
     * @var integer
     */
    private $AOF_SID_der_Warennomenklatur;

    /**
     * @var string
     */
    private $AOG_Fußnotenart_ID;

    /**
     * @var string
     */
    private $AOH_Fußnoten_ID;

    /**
     * @var \DateTime
     */
    private $AOI_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Fußno;

    /**
     * @var \DateTime
     */
    private $AOJ_Gültigkeitsendedatum_der_Verbindung_zwischen_Fußnote_und_W;

    /**
     * @var string
     */
    private $AOK_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AOL_Warenliniensuffix;


    /**
     * Set AOF_SID_der_Warennomenklatur
     *
     * @param integer $aOFSIDDerWarennomenklatur
     * @return T40020
     */
    public function setAOFSIDDerWarennomenklatur($aOFSIDDerWarennomenklatur)
    {
        $this->AOF_SID_der_Warennomenklatur = $aOFSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get AOF_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getAOFSIDDerWarennomenklatur()
    {
        return $this->AOF_SID_der_Warennomenklatur;
    }

    /**
     * Set AOG_Fußnotenart_ID
     *
     * @param string $aOGFußnotenartID
     * @return T40020
     */
    public function setAOGFußnotenartID($aOGFußnotenartID)
    {
        $this->AOG_Fußnotenart_ID = $aOGFußnotenartID;

        return $this;
    }

    /**
     * Get AOG_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAOGFußnotenartID()
    {
        return $this->AOG_Fußnotenart_ID;
    }

    /**
     * Set AOH_Fußnoten_ID
     *
     * @param string $aOHFußnotenID
     * @return T40020
     */
    public function setAOHFußnotenID($aOHFußnotenID)
    {
        $this->AOH_Fußnoten_ID = $aOHFußnotenID;

        return $this;
    }

    /**
     * Get AOH_Fußnoten_ID
     *
     * @return string 
     */
    public function getAOHFußnotenID()
    {
        return $this->AOH_Fußnoten_ID;
    }

    /**
     * Set AOI_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Fußno
     *
     * @param \DateTime $aOIDatumDesGültigkeitsbeginnsDerVerbindungZwischenFußno
     * @return T40020
     */
    public function setAOIDatumDesGültigkeitsbeginnsDerVerbindungZwischenFußno($aOIDatumDesGültigkeitsbeginnsDerVerbindungZwischenFußno)
    {
        $this->AOI_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Fußno = $aOIDatumDesGültigkeitsbeginnsDerVerbindungZwischenFußno;

        return $this;
    }

    /**
     * Get AOI_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Fußno
     *
     * @return \DateTime 
     */
    public function getAOIDatumDesGültigkeitsbeginnsDerVerbindungZwischenFußno()
    {
        return $this->AOI_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Fußno;
    }

    /**
     * Set AOJ_Gültigkeitsendedatum_der_Verbindung_zwischen_Fußnote_und_W
     *
     * @param \DateTime $aOJGültigkeitsendedatumDerVerbindungZwischenFußnoteUndW
     * @return T40020
     */
    public function setAOJGültigkeitsendedatumDerVerbindungZwischenFußnoteUndW($aOJGültigkeitsendedatumDerVerbindungZwischenFußnoteUndW)
    {
        $this->AOJ_Gültigkeitsendedatum_der_Verbindung_zwischen_Fußnote_und_W = $aOJGültigkeitsendedatumDerVerbindungZwischenFußnoteUndW;

        return $this;
    }

    /**
     * Get AOJ_Gültigkeitsendedatum_der_Verbindung_zwischen_Fußnote_und_W
     *
     * @return \DateTime 
     */
    public function getAOJGültigkeitsendedatumDerVerbindungZwischenFußnoteUndW()
    {
        return $this->AOJ_Gültigkeitsendedatum_der_Verbindung_zwischen_Fußnote_und_W;
    }

    /**
     * Set AOK_Warennomenklatur_ID
     *
     * @param string $aOKWarennomenklaturID
     * @return T40020
     */
    public function setAOKWarennomenklaturID($aOKWarennomenklaturID)
    {
        $this->AOK_Warennomenklatur_ID = $aOKWarennomenklaturID;

        return $this;
    }

    /**
     * Get AOK_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAOKWarennomenklaturID()
    {
        return $this->AOK_Warennomenklatur_ID;
    }

    /**
     * Set AOL_Warenliniensuffix
     *
     * @param string $aOLWarenliniensuffix
     * @return T40020
     */
    public function setAOLWarenliniensuffix($aOLWarenliniensuffix)
    {
        $this->AOL_Warenliniensuffix = $aOLWarenliniensuffix;

        return $this;
    }

    /**
     * Get AOL_Warenliniensuffix
     *
     * @return string 
     */
    public function getAOLWarenliniensuffix()
    {
        return $this->AOL_Warenliniensuffix;
    }
}
