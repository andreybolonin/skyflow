<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T32500
 */
class T32500
{
    /**
     * @var string
     */
    private $AJE_ID_des_Meursing_Tabellenplans;

    /**
     * @var string
     */
    private $AJF_Meursing_Positionsnummer;

    /**
     * @var string
     */
    private $AJG_Meursing_Reihen__Spaltencode;

    /**
     * @var \DateTime
     */
    private $AJH_Datum_des_Gültigkeitsbeginns_der_Meursing_Position;

    /**
     * @var \DateTime
     */
    private $AJI_Gültigkeitsendedatum_der_Meursing__Position;

    /**
     * @var string
     */
    private $AJJ_Beschreibung_der_Meursing_Position;


    /**
     * Set AJE_ID_des_Meursing_Tabellenplans
     *
     * @param string $aJEIDDesMeursingTabellenplans
     * @return T32500
     */
    public function setAJEIDDesMeursingTabellenplans($aJEIDDesMeursingTabellenplans)
    {
        $this->AJE_ID_des_Meursing_Tabellenplans = $aJEIDDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AJE_ID_des_Meursing_Tabellenplans
     *
     * @return string 
     */
    public function getAJEIDDesMeursingTabellenplans()
    {
        return $this->AJE_ID_des_Meursing_Tabellenplans;
    }

    /**
     * Set AJF_Meursing_Positionsnummer
     *
     * @param string $aJFMeursingPositionsnummer
     * @return T32500
     */
    public function setAJFMeursingPositionsnummer($aJFMeursingPositionsnummer)
    {
        $this->AJF_Meursing_Positionsnummer = $aJFMeursingPositionsnummer;

        return $this;
    }

    /**
     * Get AJF_Meursing_Positionsnummer
     *
     * @return string 
     */
    public function getAJFMeursingPositionsnummer()
    {
        return $this->AJF_Meursing_Positionsnummer;
    }

    /**
     * Set AJG_Meursing_Reihen__Spaltencode
     *
     * @param string $aJGMeursingReihenSpaltencode
     * @return T32500
     */
    public function setAJGMeursingReihenSpaltencode($aJGMeursingReihenSpaltencode)
    {
        $this->AJG_Meursing_Reihen__Spaltencode = $aJGMeursingReihenSpaltencode;

        return $this;
    }

    /**
     * Get AJG_Meursing_Reihen__Spaltencode
     *
     * @return string 
     */
    public function getAJGMeursingReihenSpaltencode()
    {
        return $this->AJG_Meursing_Reihen__Spaltencode;
    }

    /**
     * Set AJH_Datum_des_Gültigkeitsbeginns_der_Meursing_Position
     *
     * @param \DateTime $aJHDatumDesGültigkeitsbeginnsDerMeursingPosition
     * @return T32500
     */
    public function setAJHDatumDesGültigkeitsbeginnsDerMeursingPosition($aJHDatumDesGültigkeitsbeginnsDerMeursingPosition)
    {
        $this->AJH_Datum_des_Gültigkeitsbeginns_der_Meursing_Position = $aJHDatumDesGültigkeitsbeginnsDerMeursingPosition;

        return $this;
    }

    /**
     * Get AJH_Datum_des_Gültigkeitsbeginns_der_Meursing_Position
     *
     * @return \DateTime 
     */
    public function getAJHDatumDesGültigkeitsbeginnsDerMeursingPosition()
    {
        return $this->AJH_Datum_des_Gültigkeitsbeginns_der_Meursing_Position;
    }

    /**
     * Set AJI_Gültigkeitsendedatum_der_Meursing__Position
     *
     * @param \DateTime $aJIGültigkeitsendedatumDerMeursingPosition
     * @return T32500
     */
    public function setAJIGültigkeitsendedatumDerMeursingPosition($aJIGültigkeitsendedatumDerMeursingPosition)
    {
        $this->AJI_Gültigkeitsendedatum_der_Meursing__Position = $aJIGültigkeitsendedatumDerMeursingPosition;

        return $this;
    }

    /**
     * Get AJI_Gültigkeitsendedatum_der_Meursing__Position
     *
     * @return \DateTime 
     */
    public function getAJIGültigkeitsendedatumDerMeursingPosition()
    {
        return $this->AJI_Gültigkeitsendedatum_der_Meursing__Position;
    }

    /**
     * Set AJJ_Beschreibung_der_Meursing_Position
     *
     * @param string $aJJBeschreibungDerMeursingPosition
     * @return T32500
     */
    public function setAJJBeschreibungDerMeursingPosition($aJJBeschreibungDerMeursingPosition)
    {
        $this->AJJ_Beschreibung_der_Meursing_Position = $aJJBeschreibungDerMeursingPosition;

        return $this;
    }

    /**
     * Get AJJ_Beschreibung_der_Meursing_Position
     *
     * @return string 
     */
    public function getAJJBeschreibungDerMeursingPosition()
    {
        return $this->AJJ_Beschreibung_der_Meursing_Position;
    }
}
