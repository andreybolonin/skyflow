<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T44005
 */
class T44005
{
    /**
     * @var integer
     */
    private $ASX_SID_für_den_Umrechnungszeitraum;

    /**
     * @var string
     */
    private $ASY_Code_der_Währungseinheit_des_Kindes;

    /**
     * @var string
     */
    private $ASZ_Umrechnungskurs;


    /**
     * Set ASX_SID_für_den_Umrechnungszeitraum
     *
     * @param integer $aSXSIDFürDenUmrechnungszeitraum
     * @return T44005
     */
    public function setASXSIDFürDenUmrechnungszeitraum($aSXSIDFürDenUmrechnungszeitraum)
    {
        $this->ASX_SID_für_den_Umrechnungszeitraum = $aSXSIDFürDenUmrechnungszeitraum;

        return $this;
    }

    /**
     * Get ASX_SID_für_den_Umrechnungszeitraum
     *
     * @return integer 
     */
    public function getASXSIDFürDenUmrechnungszeitraum()
    {
        return $this->ASX_SID_für_den_Umrechnungszeitraum;
    }

    /**
     * Set ASY_Code_der_Währungseinheit_des_Kindes
     *
     * @param string $aSYCodeDerWährungseinheitDesKindes
     * @return T44005
     */
    public function setASYCodeDerWährungseinheitDesKindes($aSYCodeDerWährungseinheitDesKindes)
    {
        $this->ASY_Code_der_Währungseinheit_des_Kindes = $aSYCodeDerWährungseinheitDesKindes;

        return $this;
    }

    /**
     * Get ASY_Code_der_Währungseinheit_des_Kindes
     *
     * @return string 
     */
    public function getASYCodeDerWährungseinheitDesKindes()
    {
        return $this->ASY_Code_der_Währungseinheit_des_Kindes;
    }

    /**
     * Set ASZ_Umrechnungskurs
     *
     * @param string $aSZUmrechnungskurs
     * @return T44005
     */
    public function setASZUmrechnungskurs($aSZUmrechnungskurs)
    {
        $this->ASZ_Umrechnungskurs = $aSZUmrechnungskurs;

        return $this;
    }

    /**
     * Get ASZ_Umrechnungskurs
     *
     * @return string 
     */
    public function getASZUmrechnungskurs()
    {
        return $this->ASZ_Umrechnungskurs;
    }
}
