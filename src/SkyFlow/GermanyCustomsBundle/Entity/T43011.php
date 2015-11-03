<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43011
 */
class T43011
{
    /**
     * @var integer
     */
    private $ARY_SID_der_Maßnahmebedingung;

    /**
     * @var string
     */
    private $ARZ_ID_der_Abgabenart;

    /**
     * @var string
     */
    private $ASA_Abgabenbetrag;

    /**
     * @var string
     */
    private $ASB_Code_der_Währungseinheit;

    /**
     * @var string
     */
    private $ASC_Maßeinheitscode;

    /**
     * @var string
     */
    private $ASD_Code_des_Maßeinheitsqualifikators;


    /**
     * Set ARY_SID_der_Maßnahmebedingung
     *
     * @param integer $aRYSIDDerMaßnahmebedingung
     * @return T43011
     */
    public function setARYSIDDerMaßnahmebedingung($aRYSIDDerMaßnahmebedingung)
    {
        $this->ARY_SID_der_Maßnahmebedingung = $aRYSIDDerMaßnahmebedingung;

        return $this;
    }

    /**
     * Get ARY_SID_der_Maßnahmebedingung
     *
     * @return integer 
     */
    public function getARYSIDDerMaßnahmebedingung()
    {
        return $this->ARY_SID_der_Maßnahmebedingung;
    }

    /**
     * Set ARZ_ID_der_Abgabenart
     *
     * @param string $aRZIDDerAbgabenart
     * @return T43011
     */
    public function setARZIDDerAbgabenart($aRZIDDerAbgabenart)
    {
        $this->ARZ_ID_der_Abgabenart = $aRZIDDerAbgabenart;

        return $this;
    }

    /**
     * Get ARZ_ID_der_Abgabenart
     *
     * @return string 
     */
    public function getARZIDDerAbgabenart()
    {
        return $this->ARZ_ID_der_Abgabenart;
    }

    /**
     * Set ASA_Abgabenbetrag
     *
     * @param string $aSAAbgabenbetrag
     * @return T43011
     */
    public function setASAAbgabenbetrag($aSAAbgabenbetrag)
    {
        $this->ASA_Abgabenbetrag = $aSAAbgabenbetrag;

        return $this;
    }

    /**
     * Get ASA_Abgabenbetrag
     *
     * @return string 
     */
    public function getASAAbgabenbetrag()
    {
        return $this->ASA_Abgabenbetrag;
    }

    /**
     * Set ASB_Code_der_Währungseinheit
     *
     * @param string $aSBCodeDerWährungseinheit
     * @return T43011
     */
    public function setASBCodeDerWährungseinheit($aSBCodeDerWährungseinheit)
    {
        $this->ASB_Code_der_Währungseinheit = $aSBCodeDerWährungseinheit;

        return $this;
    }

    /**
     * Get ASB_Code_der_Währungseinheit
     *
     * @return string 
     */
    public function getASBCodeDerWährungseinheit()
    {
        return $this->ASB_Code_der_Währungseinheit;
    }

    /**
     * Set ASC_Maßeinheitscode
     *
     * @param string $aSCMaßeinheitscode
     * @return T43011
     */
    public function setASCMaßeinheitscode($aSCMaßeinheitscode)
    {
        $this->ASC_Maßeinheitscode = $aSCMaßeinheitscode;

        return $this;
    }

    /**
     * Get ASC_Maßeinheitscode
     *
     * @return string 
     */
    public function getASCMaßeinheitscode()
    {
        return $this->ASC_Maßeinheitscode;
    }

    /**
     * Set ASD_Code_des_Maßeinheitsqualifikators
     *
     * @param string $aSDCodeDesMaßeinheitsqualifikators
     * @return T43011
     */
    public function setASDCodeDesMaßeinheitsqualifikators($aSDCodeDesMaßeinheitsqualifikators)
    {
        $this->ASD_Code_des_Maßeinheitsqualifikators = $aSDCodeDesMaßeinheitsqualifikators;

        return $this;
    }

    /**
     * Get ASD_Code_des_Maßeinheitsqualifikators
     *
     * @return string 
     */
    public function getASDCodeDesMaßeinheitsqualifikators()
    {
        return $this->ASD_Code_des_Maßeinheitsqualifikators;
    }
}
