<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T21500
 */
class T21500
{
    /**
     * @var string
     */
    private $ACO_Code;

    /**
     * @var \DateTime
     */
    private $ACP_Datum_des_Gültigkeitsbeginns_des_Codes_des_Maßeinheitsqual;

    /**
     * @var \DateTime
     */
    private $ACQ_Gültigkeitsendedatum_des_Codes_des_Maßeinheitsqualifikator;

    /**
     * @var string
     */
    private $ACR_Beschreibung_des_Maßeinheitsqualifikators;


    /**
     * Set ACO_Code
     *
     * @param string $aCOCode
     * @return T21500
     */
    public function setACOCode($aCOCode)
    {
        $this->ACO_Code = $aCOCode;

        return $this;
    }

    /**
     * Get ACO_Code
     *
     * @return string 
     */
    public function getACOCode()
    {
        return $this->ACO_Code;
    }

    /**
     * Set ACP_Datum_des_Gültigkeitsbeginns_des_Codes_des_Maßeinheitsqual
     *
     * @param \DateTime $aCPDatumDesGültigkeitsbeginnsDesCodesDesMaßeinheitsqual
     * @return T21500
     */
    public function setACPDatumDesGültigkeitsbeginnsDesCodesDesMaßeinheitsqual($aCPDatumDesGültigkeitsbeginnsDesCodesDesMaßeinheitsqual)
    {
        $this->ACP_Datum_des_Gültigkeitsbeginns_des_Codes_des_Maßeinheitsqual = $aCPDatumDesGültigkeitsbeginnsDesCodesDesMaßeinheitsqual;

        return $this;
    }

    /**
     * Get ACP_Datum_des_Gültigkeitsbeginns_des_Codes_des_Maßeinheitsqual
     *
     * @return \DateTime 
     */
    public function getACPDatumDesGültigkeitsbeginnsDesCodesDesMaßeinheitsqual()
    {
        return $this->ACP_Datum_des_Gültigkeitsbeginns_des_Codes_des_Maßeinheitsqual;
    }

    /**
     * Set ACQ_Gültigkeitsendedatum_des_Codes_des_Maßeinheitsqualifikator
     *
     * @param \DateTime $aCQGültigkeitsendedatumDesCodesDesMaßeinheitsqualifikator
     * @return T21500
     */
    public function setACQGültigkeitsendedatumDesCodesDesMaßeinheitsqualifikator($aCQGültigkeitsendedatumDesCodesDesMaßeinheitsqualifikator)
    {
        $this->ACQ_Gültigkeitsendedatum_des_Codes_des_Maßeinheitsqualifikator = $aCQGültigkeitsendedatumDesCodesDesMaßeinheitsqualifikator;

        return $this;
    }

    /**
     * Get ACQ_Gültigkeitsendedatum_des_Codes_des_Maßeinheitsqualifikator
     *
     * @return \DateTime 
     */
    public function getACQGültigkeitsendedatumDesCodesDesMaßeinheitsqualifikator()
    {
        return $this->ACQ_Gültigkeitsendedatum_des_Codes_des_Maßeinheitsqualifikator;
    }

    /**
     * Set ACR_Beschreibung_des_Maßeinheitsqualifikators
     *
     * @param string $aCRBeschreibungDesMaßeinheitsqualifikators
     * @return T21500
     */
    public function setACRBeschreibungDesMaßeinheitsqualifikators($aCRBeschreibungDesMaßeinheitsqualifikators)
    {
        $this->ACR_Beschreibung_des_Maßeinheitsqualifikators = $aCRBeschreibungDesMaßeinheitsqualifikators;

        return $this;
    }

    /**
     * Get ACR_Beschreibung_des_Maßeinheitsqualifikators
     *
     * @return string 
     */
    public function getACRBeschreibungDesMaßeinheitsqualifikators()
    {
        return $this->ACR_Beschreibung_des_Maßeinheitsqualifikators;
    }
}
