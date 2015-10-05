<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40035
 */
class T40035
{
    /**
     * @var integer
     */
    private $AOT_SID_der_Warennomenklatur;

    /**
     * @var string
     */
    private $AOU_stammt_aus_Warennomenklatur;

    /**
     * @var string
     */
    private $AOV_stammt_aus_Warenliniensuffix;

    /**
     * @var string
     */
    private $AOW_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AOX_Warenliniensuffix;


    /**
     * Set AOT_SID_der_Warennomenklatur
     *
     * @param integer $aOTSIDDerWarennomenklatur
     * @return T40035
     */
    public function setAOTSIDDerWarennomenklatur($aOTSIDDerWarennomenklatur)
    {
        $this->AOT_SID_der_Warennomenklatur = $aOTSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get AOT_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getAOTSIDDerWarennomenklatur()
    {
        return $this->AOT_SID_der_Warennomenklatur;
    }

    /**
     * Set AOU_stammt_aus_Warennomenklatur
     *
     * @param string $aOUStammtAusWarennomenklatur
     * @return T40035
     */
    public function setAOUStammtAusWarennomenklatur($aOUStammtAusWarennomenklatur)
    {
        $this->AOU_stammt_aus_Warennomenklatur = $aOUStammtAusWarennomenklatur;

        return $this;
    }

    /**
     * Get AOU_stammt_aus_Warennomenklatur
     *
     * @return string 
     */
    public function getAOUStammtAusWarennomenklatur()
    {
        return $this->AOU_stammt_aus_Warennomenklatur;
    }

    /**
     * Set AOV_stammt_aus_Warenliniensuffix
     *
     * @param string $aOVStammtAusWarenliniensuffix
     * @return T40035
     */
    public function setAOVStammtAusWarenliniensuffix($aOVStammtAusWarenliniensuffix)
    {
        $this->AOV_stammt_aus_Warenliniensuffix = $aOVStammtAusWarenliniensuffix;

        return $this;
    }

    /**
     * Get AOV_stammt_aus_Warenliniensuffix
     *
     * @return string 
     */
    public function getAOVStammtAusWarenliniensuffix()
    {
        return $this->AOV_stammt_aus_Warenliniensuffix;
    }

    /**
     * Set AOW_Warennomenklatur_ID
     *
     * @param string $aOWWarennomenklaturID
     * @return T40035
     */
    public function setAOWWarennomenklaturID($aOWWarennomenklaturID)
    {
        $this->AOW_Warennomenklatur_ID = $aOWWarennomenklaturID;

        return $this;
    }

    /**
     * Get AOW_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAOWWarennomenklaturID()
    {
        return $this->AOW_Warennomenklatur_ID;
    }

    /**
     * Set AOX_Warenliniensuffix
     *
     * @param string $aOXWarenliniensuffix
     * @return T40035
     */
    public function setAOXWarenliniensuffix($aOXWarenliniensuffix)
    {
        $this->AOX_Warenliniensuffix = $aOXWarenliniensuffix;

        return $this;
    }

    /**
     * Get AOX_Warenliniensuffix
     *
     * @return string 
     */
    public function getAOXWarenliniensuffix()
    {
        return $this->AOX_Warenliniensuffix;
    }
}
