<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T33000
 */
class T33000
{
    /**
     * @var string
     */
    private $AJR_ID_des_Meursing_Tabellenplans;

    /**
     * @var string
     */
    private $AJS_Meursing_Positionsnummer;

    /**
     * @var string
     */
    private $AJT_Meursing_Reihen__Spaltencode;

    /**
     * @var string
     */
    private $AJU_Sequentielle_Nummer_der_Meursing_Unterposition;

    /**
     * @var \DateTime
     */
    private $AJV_Datum_des_Gültigkeitsbeginns_der_Meursing_Unterposition;

    /**
     * @var \DateTime
     */
    private $AJW_Gültigkeitsendedatum_der_Meursing_Unterposition;

    /**
     * @var string
     */
    private $AJX_Kurztext_der_Meursing_Unterposition;


    /**
     * Set AJR_ID_des_Meursing_Tabellenplans
     *
     * @param string $aJRIDDesMeursingTabellenplans
     * @return T33000
     */
    public function setAJRIDDesMeursingTabellenplans($aJRIDDesMeursingTabellenplans)
    {
        $this->AJR_ID_des_Meursing_Tabellenplans = $aJRIDDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AJR_ID_des_Meursing_Tabellenplans
     *
     * @return string 
     */
    public function getAJRIDDesMeursingTabellenplans()
    {
        return $this->AJR_ID_des_Meursing_Tabellenplans;
    }

    /**
     * Set AJS_Meursing_Positionsnummer
     *
     * @param string $aJSMeursingPositionsnummer
     * @return T33000
     */
    public function setAJSMeursingPositionsnummer($aJSMeursingPositionsnummer)
    {
        $this->AJS_Meursing_Positionsnummer = $aJSMeursingPositionsnummer;

        return $this;
    }

    /**
     * Get AJS_Meursing_Positionsnummer
     *
     * @return string 
     */
    public function getAJSMeursingPositionsnummer()
    {
        return $this->AJS_Meursing_Positionsnummer;
    }

    /**
     * Set AJT_Meursing_Reihen__Spaltencode
     *
     * @param string $aJTMeursingReihenSpaltencode
     * @return T33000
     */
    public function setAJTMeursingReihenSpaltencode($aJTMeursingReihenSpaltencode)
    {
        $this->AJT_Meursing_Reihen__Spaltencode = $aJTMeursingReihenSpaltencode;

        return $this;
    }

    /**
     * Get AJT_Meursing_Reihen__Spaltencode
     *
     * @return string 
     */
    public function getAJTMeursingReihenSpaltencode()
    {
        return $this->AJT_Meursing_Reihen__Spaltencode;
    }

    /**
     * Set AJU_Sequentielle_Nummer_der_Meursing_Unterposition
     *
     * @param string $aJUSequentielleNummerDerMeursingUnterposition
     * @return T33000
     */
    public function setAJUSequentielleNummerDerMeursingUnterposition($aJUSequentielleNummerDerMeursingUnterposition)
    {
        $this->AJU_Sequentielle_Nummer_der_Meursing_Unterposition = $aJUSequentielleNummerDerMeursingUnterposition;

        return $this;
    }

    /**
     * Get AJU_Sequentielle_Nummer_der_Meursing_Unterposition
     *
     * @return string 
     */
    public function getAJUSequentielleNummerDerMeursingUnterposition()
    {
        return $this->AJU_Sequentielle_Nummer_der_Meursing_Unterposition;
    }

    /**
     * Set AJV_Datum_des_Gültigkeitsbeginns_der_Meursing_Unterposition
     *
     * @param \DateTime $aJVDatumDesGültigkeitsbeginnsDerMeursingUnterposition
     * @return T33000
     */
    public function setAJVDatumDesGültigkeitsbeginnsDerMeursingUnterposition($aJVDatumDesGültigkeitsbeginnsDerMeursingUnterposition)
    {
        $this->AJV_Datum_des_Gültigkeitsbeginns_der_Meursing_Unterposition = $aJVDatumDesGültigkeitsbeginnsDerMeursingUnterposition;

        return $this;
    }

    /**
     * Get AJV_Datum_des_Gültigkeitsbeginns_der_Meursing_Unterposition
     *
     * @return \DateTime 
     */
    public function getAJVDatumDesGültigkeitsbeginnsDerMeursingUnterposition()
    {
        return $this->AJV_Datum_des_Gültigkeitsbeginns_der_Meursing_Unterposition;
    }

    /**
     * Set AJW_Gültigkeitsendedatum_der_Meursing_Unterposition
     *
     * @param \DateTime $aJWGültigkeitsendedatumDerMeursingUnterposition
     * @return T33000
     */
    public function setAJWGültigkeitsendedatumDerMeursingUnterposition($aJWGültigkeitsendedatumDerMeursingUnterposition)
    {
        $this->AJW_Gültigkeitsendedatum_der_Meursing_Unterposition = $aJWGültigkeitsendedatumDerMeursingUnterposition;

        return $this;
    }

    /**
     * Get AJW_Gültigkeitsendedatum_der_Meursing_Unterposition
     *
     * @return \DateTime 
     */
    public function getAJWGültigkeitsendedatumDerMeursingUnterposition()
    {
        return $this->AJW_Gültigkeitsendedatum_der_Meursing_Unterposition;
    }

    /**
     * Set AJX_Kurztext_der_Meursing_Unterposition
     *
     * @param string $aJXKurztextDerMeursingUnterposition
     * @return T33000
     */
    public function setAJXKurztextDerMeursingUnterposition($aJXKurztextDerMeursingUnterposition)
    {
        $this->AJX_Kurztext_der_Meursing_Unterposition = $aJXKurztextDerMeursingUnterposition;

        return $this;
    }

    /**
     * Get AJX_Kurztext_der_Meursing_Unterposition
     *
     * @return string 
     */
    public function getAJXKurztextDerMeursingUnterposition()
    {
        return $this->AJX_Kurztext_der_Meursing_Unterposition;
    }
}
