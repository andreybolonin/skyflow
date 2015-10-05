<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T22500
 */
class T22500
{
    /**
     * @var string
     */
    private $ACW_Code_der_Währungseinheit;

    /**
     * @var \DateTime
     */
    private $ACX_Datum_des_Gültigkeitsbeginns_des_Codes_der_Währungseinheit;

    /**
     * @var \DateTime
     */
    private $ACY_Gültigkeitsendedatum_des_Codes_der_Währungseinheit;

    /**
     * @var string
     */
    private $ACZ_Beschreibung_der_Währungseinheit;


    /**
     * Set ACW_Code_der_Währungseinheit
     *
     * @param string $aCWCodeDerWährungseinheit
     * @return T22500
     */
    public function setACWCodeDerWährungseinheit($aCWCodeDerWährungseinheit)
    {
        $this->ACW_Code_der_Währungseinheit = $aCWCodeDerWährungseinheit;

        return $this;
    }

    /**
     * Get ACW_Code_der_Währungseinheit
     *
     * @return string 
     */
    public function getACWCodeDerWährungseinheit()
    {
        return $this->ACW_Code_der_Währungseinheit;
    }

    /**
     * Set ACX_Datum_des_Gültigkeitsbeginns_des_Codes_der_Währungseinheit
     *
     * @param \DateTime $aCXDatumDesGültigkeitsbeginnsDesCodesDerWährungseinheit
     * @return T22500
     */
    public function setACXDatumDesGültigkeitsbeginnsDesCodesDerWährungseinheit($aCXDatumDesGültigkeitsbeginnsDesCodesDerWährungseinheit)
    {
        $this->ACX_Datum_des_Gültigkeitsbeginns_des_Codes_der_Währungseinheit = $aCXDatumDesGültigkeitsbeginnsDesCodesDerWährungseinheit;

        return $this;
    }

    /**
     * Get ACX_Datum_des_Gültigkeitsbeginns_des_Codes_der_Währungseinheit
     *
     * @return \DateTime 
     */
    public function getACXDatumDesGültigkeitsbeginnsDesCodesDerWährungseinheit()
    {
        return $this->ACX_Datum_des_Gültigkeitsbeginns_des_Codes_der_Währungseinheit;
    }

    /**
     * Set ACY_Gültigkeitsendedatum_des_Codes_der_Währungseinheit
     *
     * @param \DateTime $aCYGültigkeitsendedatumDesCodesDerWährungseinheit
     * @return T22500
     */
    public function setACYGültigkeitsendedatumDesCodesDerWährungseinheit($aCYGültigkeitsendedatumDesCodesDerWährungseinheit)
    {
        $this->ACY_Gültigkeitsendedatum_des_Codes_der_Währungseinheit = $aCYGültigkeitsendedatumDesCodesDerWährungseinheit;

        return $this;
    }

    /**
     * Get ACY_Gültigkeitsendedatum_des_Codes_der_Währungseinheit
     *
     * @return \DateTime 
     */
    public function getACYGültigkeitsendedatumDesCodesDerWährungseinheit()
    {
        return $this->ACY_Gültigkeitsendedatum_des_Codes_der_Währungseinheit;
    }

    /**
     * Set ACZ_Beschreibung_der_Währungseinheit
     *
     * @param string $aCZBeschreibungDerWährungseinheit
     * @return T22500
     */
    public function setACZBeschreibungDerWährungseinheit($aCZBeschreibungDerWährungseinheit)
    {
        $this->ACZ_Beschreibung_der_Währungseinheit = $aCZBeschreibungDerWährungseinheit;

        return $this;
    }

    /**
     * Get ACZ_Beschreibung_der_Währungseinheit
     *
     * @return string 
     */
    public function getACZBeschreibungDerWährungseinheit()
    {
        return $this->ACZ_Beschreibung_der_Währungseinheit;
    }
}
