<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T44000
 */
class T44000
{
    /**
     * @var integer
     */
    private $AST_SID_für_den_Umrechnungszeitraum;

    /**
     * @var string
     */
    private $ASU_Code_der_Währungseinheit_des_Vaters;

    /**
     * @var \DateTime
     */
    private $ASV_Anfangsdatum_vom_Umrechnungszeitraum;

    /**
     * @var \DateTime
     */
    private $ASW_Endedatum_vom_Umrechnungszeitraum;


    /**
     * Set AST_SID_für_den_Umrechnungszeitraum
     *
     * @param integer $aSTSIDFürDenUmrechnungszeitraum
     * @return T44000
     */
    public function setASTSIDFürDenUmrechnungszeitraum($aSTSIDFürDenUmrechnungszeitraum)
    {
        $this->AST_SID_für_den_Umrechnungszeitraum = $aSTSIDFürDenUmrechnungszeitraum;

        return $this;
    }

    /**
     * Get AST_SID_für_den_Umrechnungszeitraum
     *
     * @return integer 
     */
    public function getASTSIDFürDenUmrechnungszeitraum()
    {
        return $this->AST_SID_für_den_Umrechnungszeitraum;
    }

    /**
     * Set ASU_Code_der_Währungseinheit_des_Vaters
     *
     * @param string $aSUCodeDerWährungseinheitDesVaters
     * @return T44000
     */
    public function setASUCodeDerWährungseinheitDesVaters($aSUCodeDerWährungseinheitDesVaters)
    {
        $this->ASU_Code_der_Währungseinheit_des_Vaters = $aSUCodeDerWährungseinheitDesVaters;

        return $this;
    }

    /**
     * Get ASU_Code_der_Währungseinheit_des_Vaters
     *
     * @return string 
     */
    public function getASUCodeDerWährungseinheitDesVaters()
    {
        return $this->ASU_Code_der_Währungseinheit_des_Vaters;
    }

    /**
     * Set ASV_Anfangsdatum_vom_Umrechnungszeitraum
     *
     * @param \DateTime $aSVAnfangsdatumVomUmrechnungszeitraum
     * @return T44000
     */
    public function setASVAnfangsdatumVomUmrechnungszeitraum($aSVAnfangsdatumVomUmrechnungszeitraum)
    {
        $this->ASV_Anfangsdatum_vom_Umrechnungszeitraum = $aSVAnfangsdatumVomUmrechnungszeitraum;

        return $this;
    }

    /**
     * Get ASV_Anfangsdatum_vom_Umrechnungszeitraum
     *
     * @return \DateTime 
     */
    public function getASVAnfangsdatumVomUmrechnungszeitraum()
    {
        return $this->ASV_Anfangsdatum_vom_Umrechnungszeitraum;
    }

    /**
     * Set ASW_Endedatum_vom_Umrechnungszeitraum
     *
     * @param \DateTime $aSWEndedatumVomUmrechnungszeitraum
     * @return T44000
     */
    public function setASWEndedatumVomUmrechnungszeitraum($aSWEndedatumVomUmrechnungszeitraum)
    {
        $this->ASW_Endedatum_vom_Umrechnungszeitraum = $aSWEndedatumVomUmrechnungszeitraum;

        return $this;
    }

    /**
     * Get ASW_Endedatum_vom_Umrechnungszeitraum
     *
     * @return \DateTime 
     */
    public function getASWEndedatumVomUmrechnungszeitraum()
    {
        return $this->ASW_Endedatum_vom_Umrechnungszeitraum;
    }
}
