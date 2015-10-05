<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T41000
 */
class T41000
{
    /**
     * @var integer
     */
    private $APD_SID_für_die_Ausfuhrerstattungsnomenklatur;

    /**
     * @var string
     */
    private $APE_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $APF_Zusatzcodeart;

    /**
     * @var string
     */
    private $APG_Ausfuhrerstattungscode;

    /**
     * @var string
     */
    private $APH_Warenliniensuffix;

    /**
     * @var \DateTime
     */
    private $API_Datum_des_Gültigkeitsbeginn_der_Ausfuhrerstattungsnomenklat;

    /**
     * @var \DateTime
     */
    private $APJ_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklatur;

    /**
     * @var integer
     */
    private $APK_SID_der_Warennomenklatur;


    /**
     * Set APD_SID_für_die_Ausfuhrerstattungsnomenklatur
     *
     * @param integer $aPDSIDFürDieAusfuhrerstattungsnomenklatur
     * @return T41000
     */
    public function setAPDSIDFürDieAusfuhrerstattungsnomenklatur($aPDSIDFürDieAusfuhrerstattungsnomenklatur)
    {
        $this->APD_SID_für_die_Ausfuhrerstattungsnomenklatur = $aPDSIDFürDieAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get APD_SID_für_die_Ausfuhrerstattungsnomenklatur
     *
     * @return integer 
     */
    public function getAPDSIDFürDieAusfuhrerstattungsnomenklatur()
    {
        return $this->APD_SID_für_die_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set APE_Warennomenklatur_ID
     *
     * @param string $aPEWarennomenklaturID
     * @return T41000
     */
    public function setAPEWarennomenklaturID($aPEWarennomenklaturID)
    {
        $this->APE_Warennomenklatur_ID = $aPEWarennomenklaturID;

        return $this;
    }

    /**
     * Get APE_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAPEWarennomenklaturID()
    {
        return $this->APE_Warennomenklatur_ID;
    }

    /**
     * Set APF_Zusatzcodeart
     *
     * @param string $aPFZusatzcodeart
     * @return T41000
     */
    public function setAPFZusatzcodeart($aPFZusatzcodeart)
    {
        $this->APF_Zusatzcodeart = $aPFZusatzcodeart;

        return $this;
    }

    /**
     * Get APF_Zusatzcodeart
     *
     * @return string 
     */
    public function getAPFZusatzcodeart()
    {
        return $this->APF_Zusatzcodeart;
    }

    /**
     * Set APG_Ausfuhrerstattungscode
     *
     * @param string $aPGAusfuhrerstattungscode
     * @return T41000
     */
    public function setAPGAusfuhrerstattungscode($aPGAusfuhrerstattungscode)
    {
        $this->APG_Ausfuhrerstattungscode = $aPGAusfuhrerstattungscode;

        return $this;
    }

    /**
     * Get APG_Ausfuhrerstattungscode
     *
     * @return string 
     */
    public function getAPGAusfuhrerstattungscode()
    {
        return $this->APG_Ausfuhrerstattungscode;
    }

    /**
     * Set APH_Warenliniensuffix
     *
     * @param string $aPHWarenliniensuffix
     * @return T41000
     */
    public function setAPHWarenliniensuffix($aPHWarenliniensuffix)
    {
        $this->APH_Warenliniensuffix = $aPHWarenliniensuffix;

        return $this;
    }

    /**
     * Get APH_Warenliniensuffix
     *
     * @return string 
     */
    public function getAPHWarenliniensuffix()
    {
        return $this->APH_Warenliniensuffix;
    }

    /**
     * Set API_Datum_des_Gültigkeitsbeginn_der_Ausfuhrerstattungsnomenklat
     *
     * @param \DateTime $aPIDatumDesGültigkeitsbeginnDerAusfuhrerstattungsnomenklat
     * @return T41000
     */
    public function setAPIDatumDesGültigkeitsbeginnDerAusfuhrerstattungsnomenklat($aPIDatumDesGültigkeitsbeginnDerAusfuhrerstattungsnomenklat)
    {
        $this->API_Datum_des_Gültigkeitsbeginn_der_Ausfuhrerstattungsnomenklat = $aPIDatumDesGültigkeitsbeginnDerAusfuhrerstattungsnomenklat;

        return $this;
    }

    /**
     * Get API_Datum_des_Gültigkeitsbeginn_der_Ausfuhrerstattungsnomenklat
     *
     * @return \DateTime 
     */
    public function getAPIDatumDesGültigkeitsbeginnDerAusfuhrerstattungsnomenklat()
    {
        return $this->API_Datum_des_Gültigkeitsbeginn_der_Ausfuhrerstattungsnomenklat;
    }

    /**
     * Set APJ_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklatur
     *
     * @param \DateTime $aPJGültigkeitsendedatumDerAusfuhrerstattungsnomenklatur
     * @return T41000
     */
    public function setAPJGültigkeitsendedatumDerAusfuhrerstattungsnomenklatur($aPJGültigkeitsendedatumDerAusfuhrerstattungsnomenklatur)
    {
        $this->APJ_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklatur = $aPJGültigkeitsendedatumDerAusfuhrerstattungsnomenklatur;

        return $this;
    }

    /**
     * Get APJ_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklatur
     *
     * @return \DateTime 
     */
    public function getAPJGültigkeitsendedatumDerAusfuhrerstattungsnomenklatur()
    {
        return $this->APJ_Gültigkeitsendedatum_der_Ausfuhrerstattungsnomenklatur;
    }

    /**
     * Set APK_SID_der_Warennomenklatur
     *
     * @param integer $aPKSIDDerWarennomenklatur
     * @return T41000
     */
    public function setAPKSIDDerWarennomenklatur($aPKSIDDerWarennomenklatur)
    {
        $this->APK_SID_der_Warennomenklatur = $aPKSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get APK_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getAPKSIDDerWarennomenklatur()
    {
        return $this->APK_SID_der_Warennomenklatur;
    }
}
