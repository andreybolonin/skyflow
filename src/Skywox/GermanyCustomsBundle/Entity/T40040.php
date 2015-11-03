<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40040
 */
class T40040
{
    /**
     * @var integer
     */
    private $AOY_SID_der_Warennomenklatur;

    /**
     * @var string
     */
    private $AOZ_Absorbiert_aus_Warennomenklatur;

    /**
     * @var string
     */
    private $APA_Absorbiert_aus_Warenliniensuffix;

    /**
     * @var string
     */
    private $APB_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $APC_Warenliniensuffix;


    /**
     * Set AOY_SID_der_Warennomenklatur
     *
     * @param integer $aOYSIDDerWarennomenklatur
     * @return T40040
     */
    public function setAOYSIDDerWarennomenklatur($aOYSIDDerWarennomenklatur)
    {
        $this->AOY_SID_der_Warennomenklatur = $aOYSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get AOY_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getAOYSIDDerWarennomenklatur()
    {
        return $this->AOY_SID_der_Warennomenklatur;
    }

    /**
     * Set AOZ_Absorbiert_aus_Warennomenklatur
     *
     * @param string $aOZAbsorbiertAusWarennomenklatur
     * @return T40040
     */
    public function setAOZAbsorbiertAusWarennomenklatur($aOZAbsorbiertAusWarennomenklatur)
    {
        $this->AOZ_Absorbiert_aus_Warennomenklatur = $aOZAbsorbiertAusWarennomenklatur;

        return $this;
    }

    /**
     * Get AOZ_Absorbiert_aus_Warennomenklatur
     *
     * @return string 
     */
    public function getAOZAbsorbiertAusWarennomenklatur()
    {
        return $this->AOZ_Absorbiert_aus_Warennomenklatur;
    }

    /**
     * Set APA_Absorbiert_aus_Warenliniensuffix
     *
     * @param string $aPAAbsorbiertAusWarenliniensuffix
     * @return T40040
     */
    public function setAPAAbsorbiertAusWarenliniensuffix($aPAAbsorbiertAusWarenliniensuffix)
    {
        $this->APA_Absorbiert_aus_Warenliniensuffix = $aPAAbsorbiertAusWarenliniensuffix;

        return $this;
    }

    /**
     * Get APA_Absorbiert_aus_Warenliniensuffix
     *
     * @return string 
     */
    public function getAPAAbsorbiertAusWarenliniensuffix()
    {
        return $this->APA_Absorbiert_aus_Warenliniensuffix;
    }

    /**
     * Set APB_Warennomenklatur_ID
     *
     * @param string $aPBWarennomenklaturID
     * @return T40040
     */
    public function setAPBWarennomenklaturID($aPBWarennomenklaturID)
    {
        $this->APB_Warennomenklatur_ID = $aPBWarennomenklaturID;

        return $this;
    }

    /**
     * Get APB_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAPBWarennomenklaturID()
    {
        return $this->APB_Warennomenklatur_ID;
    }

    /**
     * Set APC_Warenliniensuffix
     *
     * @param string $aPCWarenliniensuffix
     * @return T40040
     */
    public function setAPCWarenliniensuffix($aPCWarenliniensuffix)
    {
        $this->APC_Warenliniensuffix = $aPCWarenliniensuffix;

        return $this;
    }

    /**
     * Get APC_Warenliniensuffix
     *
     * @return string 
     */
    public function getAPCWarenliniensuffix()
    {
        return $this->APC_Warenliniensuffix;
    }
}
