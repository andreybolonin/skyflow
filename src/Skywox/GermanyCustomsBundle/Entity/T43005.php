<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43005
 */
class T43005
{
    /**
     * @var integer
     */
    private $ARH_SID_der_Maßnahme;

    /**
     * @var string
     */
    private $ARI_ID_der_Abgabenart;

    /**
     * @var string
     */
    private $ARJ_Abgabenbetrag;

    /**
     * @var string
     */
    private $ARK_Code_der_Währungseinheit;

    /**
     * @var string
     */
    private $ARL_Maßeinheitscode;

    /**
     * @var string
     */
    private $ARM_Code_des_Maßeinheitsqualifikators;


    /**
     * Set ARH_SID_der_Maßnahme
     *
     * @param integer $aRHSIDDerMaßnahme
     * @return T43005
     */
    public function setARHSIDDerMaßnahme($aRHSIDDerMaßnahme)
    {
        $this->ARH_SID_der_Maßnahme = $aRHSIDDerMaßnahme;

        return $this;
    }

    /**
     * Get ARH_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getARHSIDDerMaßnahme()
    {
        return $this->ARH_SID_der_Maßnahme;
    }

    /**
     * Set ARI_ID_der_Abgabenart
     *
     * @param string $aRIIDDerAbgabenart
     * @return T43005
     */
    public function setARIIDDerAbgabenart($aRIIDDerAbgabenart)
    {
        $this->ARI_ID_der_Abgabenart = $aRIIDDerAbgabenart;

        return $this;
    }

    /**
     * Get ARI_ID_der_Abgabenart
     *
     * @return string 
     */
    public function getARIIDDerAbgabenart()
    {
        return $this->ARI_ID_der_Abgabenart;
    }

    /**
     * Set ARJ_Abgabenbetrag
     *
     * @param string $aRJAbgabenbetrag
     * @return T43005
     */
    public function setARJAbgabenbetrag($aRJAbgabenbetrag)
    {
        $this->ARJ_Abgabenbetrag = $aRJAbgabenbetrag;

        return $this;
    }

    /**
     * Get ARJ_Abgabenbetrag
     *
     * @return string 
     */
    public function getARJAbgabenbetrag()
    {
        return $this->ARJ_Abgabenbetrag;
    }

    /**
     * Set ARK_Code_der_Währungseinheit
     *
     * @param string $aRKCodeDerWährungseinheit
     * @return T43005
     */
    public function setARKCodeDerWährungseinheit($aRKCodeDerWährungseinheit)
    {
        $this->ARK_Code_der_Währungseinheit = $aRKCodeDerWährungseinheit;

        return $this;
    }

    /**
     * Get ARK_Code_der_Währungseinheit
     *
     * @return string 
     */
    public function getARKCodeDerWährungseinheit()
    {
        return $this->ARK_Code_der_Währungseinheit;
    }

    /**
     * Set ARL_Maßeinheitscode
     *
     * @param string $aRLMaßeinheitscode
     * @return T43005
     */
    public function setARLMaßeinheitscode($aRLMaßeinheitscode)
    {
        $this->ARL_Maßeinheitscode = $aRLMaßeinheitscode;

        return $this;
    }

    /**
     * Get ARL_Maßeinheitscode
     *
     * @return string 
     */
    public function getARLMaßeinheitscode()
    {
        return $this->ARL_Maßeinheitscode;
    }

    /**
     * Set ARM_Code_des_Maßeinheitsqualifikators
     *
     * @param string $aRMCodeDesMaßeinheitsqualifikators
     * @return T43005
     */
    public function setARMCodeDesMaßeinheitsqualifikators($aRMCodeDesMaßeinheitsqualifikators)
    {
        $this->ARM_Code_des_Maßeinheitsqualifikators = $aRMCodeDesMaßeinheitsqualifikators;

        return $this;
    }

    /**
     * Get ARM_Code_des_Maßeinheitsqualifikators
     *
     * @return string 
     */
    public function getARMCodeDesMaßeinheitsqualifikators()
    {
        return $this->ARM_Code_des_Maßeinheitsqualifikators;
    }
}
