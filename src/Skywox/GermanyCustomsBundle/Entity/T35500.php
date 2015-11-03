<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T35500
 */
class T35500
{
    /**
     * @var string
     */
    private $AKO_Aktionscode;

    /**
     * @var \DateTime
     */
    private $AKP_Gültigkeitsbeginn_des_Aktionscode;

    /**
     * @var \DateTime
     */
    private $AKQ_Gültigkeitsende_des_Aktionscode;

    /**
     * @var string
     */
    private $AKR_Beschreibung_der_Maßnahmeaktion;


    /**
     * Set AKO_Aktionscode
     *
     * @param string $aKOAktionscode
     * @return T35500
     */
    public function setAKOAktionscode($aKOAktionscode)
    {
        $this->AKO_Aktionscode = $aKOAktionscode;

        return $this;
    }

    /**
     * Get AKO_Aktionscode
     *
     * @return string 
     */
    public function getAKOAktionscode()
    {
        return $this->AKO_Aktionscode;
    }

    /**
     * Set AKP_Gültigkeitsbeginn_des_Aktionscode
     *
     * @param \DateTime $aKPGültigkeitsbeginnDesAktionscode
     * @return T35500
     */
    public function setAKPGültigkeitsbeginnDesAktionscode($aKPGültigkeitsbeginnDesAktionscode)
    {
        $this->AKP_Gültigkeitsbeginn_des_Aktionscode = $aKPGültigkeitsbeginnDesAktionscode;

        return $this;
    }

    /**
     * Get AKP_Gültigkeitsbeginn_des_Aktionscode
     *
     * @return \DateTime 
     */
    public function getAKPGültigkeitsbeginnDesAktionscode()
    {
        return $this->AKP_Gültigkeitsbeginn_des_Aktionscode;
    }

    /**
     * Set AKQ_Gültigkeitsende_des_Aktionscode
     *
     * @param \DateTime $aKQGültigkeitsendeDesAktionscode
     * @return T35500
     */
    public function setAKQGültigkeitsendeDesAktionscode($aKQGültigkeitsendeDesAktionscode)
    {
        $this->AKQ_Gültigkeitsende_des_Aktionscode = $aKQGültigkeitsendeDesAktionscode;

        return $this;
    }

    /**
     * Get AKQ_Gültigkeitsende_des_Aktionscode
     *
     * @return \DateTime 
     */
    public function getAKQGültigkeitsendeDesAktionscode()
    {
        return $this->AKQ_Gültigkeitsende_des_Aktionscode;
    }

    /**
     * Set AKR_Beschreibung_der_Maßnahmeaktion
     *
     * @param string $aKRBeschreibungDerMaßnahmeaktion
     * @return T35500
     */
    public function setAKRBeschreibungDerMaßnahmeaktion($aKRBeschreibungDerMaßnahmeaktion)
    {
        $this->AKR_Beschreibung_der_Maßnahmeaktion = $aKRBeschreibungDerMaßnahmeaktion;

        return $this;
    }

    /**
     * Get AKR_Beschreibung_der_Maßnahmeaktion
     *
     * @return string 
     */
    public function getAKRBeschreibungDerMaßnahmeaktion()
    {
        return $this->AKR_Beschreibung_der_Maßnahmeaktion;
    }
}
