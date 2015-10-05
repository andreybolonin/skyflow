<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T35000
 */
class T35000
{
    /**
     * @var string
     */
    private $AKK_Bedingungscode;

    /**
     * @var \DateTime
     */
    private $AKL_Datum_des_Gültigkeitsbeginns_der_Maßnahmebedingung;

    /**
     * @var \DateTime
     */
    private $AKM_Gültigkeitsendedatum_der_Maßnahmebedingung;

    /**
     * @var string
     */
    private $AKN_Beschreibung_der_Maßnahmebedingung;


    /**
     * Set AKK_Bedingungscode
     *
     * @param string $aKKBedingungscode
     * @return T35000
     */
    public function setAKKBedingungscode($aKKBedingungscode)
    {
        $this->AKK_Bedingungscode = $aKKBedingungscode;

        return $this;
    }

    /**
     * Get AKK_Bedingungscode
     *
     * @return string 
     */
    public function getAKKBedingungscode()
    {
        return $this->AKK_Bedingungscode;
    }

    /**
     * Set AKL_Datum_des_Gültigkeitsbeginns_der_Maßnahmebedingung
     *
     * @param \DateTime $aKLDatumDesGültigkeitsbeginnsDerMaßnahmebedingung
     * @return T35000
     */
    public function setAKLDatumDesGültigkeitsbeginnsDerMaßnahmebedingung($aKLDatumDesGültigkeitsbeginnsDerMaßnahmebedingung)
    {
        $this->AKL_Datum_des_Gültigkeitsbeginns_der_Maßnahmebedingung = $aKLDatumDesGültigkeitsbeginnsDerMaßnahmebedingung;

        return $this;
    }

    /**
     * Get AKL_Datum_des_Gültigkeitsbeginns_der_Maßnahmebedingung
     *
     * @return \DateTime 
     */
    public function getAKLDatumDesGültigkeitsbeginnsDerMaßnahmebedingung()
    {
        return $this->AKL_Datum_des_Gültigkeitsbeginns_der_Maßnahmebedingung;
    }

    /**
     * Set AKM_Gültigkeitsendedatum_der_Maßnahmebedingung
     *
     * @param \DateTime $aKMGültigkeitsendedatumDerMaßnahmebedingung
     * @return T35000
     */
    public function setAKMGültigkeitsendedatumDerMaßnahmebedingung($aKMGültigkeitsendedatumDerMaßnahmebedingung)
    {
        $this->AKM_Gültigkeitsendedatum_der_Maßnahmebedingung = $aKMGültigkeitsendedatumDerMaßnahmebedingung;

        return $this;
    }

    /**
     * Get AKM_Gültigkeitsendedatum_der_Maßnahmebedingung
     *
     * @return \DateTime 
     */
    public function getAKMGültigkeitsendedatumDerMaßnahmebedingung()
    {
        return $this->AKM_Gültigkeitsendedatum_der_Maßnahmebedingung;
    }

    /**
     * Set AKN_Beschreibung_der_Maßnahmebedingung
     *
     * @param string $aKNBeschreibungDerMaßnahmebedingung
     * @return T35000
     */
    public function setAKNBeschreibungDerMaßnahmebedingung($aKNBeschreibungDerMaßnahmebedingung)
    {
        $this->AKN_Beschreibung_der_Maßnahmebedingung = $aKNBeschreibungDerMaßnahmebedingung;

        return $this;
    }

    /**
     * Get AKN_Beschreibung_der_Maßnahmebedingung
     *
     * @return string 
     */
    public function getAKNBeschreibungDerMaßnahmebedingung()
    {
        return $this->AKN_Beschreibung_der_Maßnahmebedingung;
    }
}
