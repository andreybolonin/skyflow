<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T32510
 */
class T32510
{
    /**
     * @var string
     */
    private $AJK_ID_des_Meursing_Tabellenplans;

    /**
     * @var string
     */
    private $AJL_Meursing_Positionsnummer;

    /**
     * @var string
     */
    private $AJM_Meursing_Reihen__Spaltencode;

    /**
     * @var string
     */
    private $AJN_Fußnotenart_ID;

    /**
     * @var string
     */
    private $AJO_Fußnoten_ID;

    /**
     * @var \DateTime
     */
    private $AJP_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Meursi;

    /**
     * @var \DateTime
     */
    private $AJQ_Gültigkeitsendedatum_der_Verbindung_zwischen_Meursing_Posit;


    /**
     * Set AJK_ID_des_Meursing_Tabellenplans
     *
     * @param string $aJKIDDesMeursingTabellenplans
     * @return T32510
     */
    public function setAJKIDDesMeursingTabellenplans($aJKIDDesMeursingTabellenplans)
    {
        $this->AJK_ID_des_Meursing_Tabellenplans = $aJKIDDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AJK_ID_des_Meursing_Tabellenplans
     *
     * @return string 
     */
    public function getAJKIDDesMeursingTabellenplans()
    {
        return $this->AJK_ID_des_Meursing_Tabellenplans;
    }

    /**
     * Set AJL_Meursing_Positionsnummer
     *
     * @param string $aJLMeursingPositionsnummer
     * @return T32510
     */
    public function setAJLMeursingPositionsnummer($aJLMeursingPositionsnummer)
    {
        $this->AJL_Meursing_Positionsnummer = $aJLMeursingPositionsnummer;

        return $this;
    }

    /**
     * Get AJL_Meursing_Positionsnummer
     *
     * @return string 
     */
    public function getAJLMeursingPositionsnummer()
    {
        return $this->AJL_Meursing_Positionsnummer;
    }

    /**
     * Set AJM_Meursing_Reihen__Spaltencode
     *
     * @param string $aJMMeursingReihenSpaltencode
     * @return T32510
     */
    public function setAJMMeursingReihenSpaltencode($aJMMeursingReihenSpaltencode)
    {
        $this->AJM_Meursing_Reihen__Spaltencode = $aJMMeursingReihenSpaltencode;

        return $this;
    }

    /**
     * Get AJM_Meursing_Reihen__Spaltencode
     *
     * @return string 
     */
    public function getAJMMeursingReihenSpaltencode()
    {
        return $this->AJM_Meursing_Reihen__Spaltencode;
    }

    /**
     * Set AJN_Fußnotenart_ID
     *
     * @param string $aJNFußnotenartID
     * @return T32510
     */
    public function setAJNFußnotenartID($aJNFußnotenartID)
    {
        $this->AJN_Fußnotenart_ID = $aJNFußnotenartID;

        return $this;
    }

    /**
     * Get AJN_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAJNFußnotenartID()
    {
        return $this->AJN_Fußnotenart_ID;
    }

    /**
     * Set AJO_Fußnoten_ID
     *
     * @param string $aJOFußnotenID
     * @return T32510
     */
    public function setAJOFußnotenID($aJOFußnotenID)
    {
        $this->AJO_Fußnoten_ID = $aJOFußnotenID;

        return $this;
    }

    /**
     * Get AJO_Fußnoten_ID
     *
     * @return string 
     */
    public function getAJOFußnotenID()
    {
        return $this->AJO_Fußnoten_ID;
    }

    /**
     * Set AJP_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Meursi
     *
     * @param \DateTime $aJPDatumDesGültigkeitsbeginnsDerVerbindungZwischenMeursi
     * @return T32510
     */
    public function setAJPDatumDesGültigkeitsbeginnsDerVerbindungZwischenMeursi($aJPDatumDesGültigkeitsbeginnsDerVerbindungZwischenMeursi)
    {
        $this->AJP_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Meursi = $aJPDatumDesGültigkeitsbeginnsDerVerbindungZwischenMeursi;

        return $this;
    }

    /**
     * Get AJP_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Meursi
     *
     * @return \DateTime 
     */
    public function getAJPDatumDesGültigkeitsbeginnsDerVerbindungZwischenMeursi()
    {
        return $this->AJP_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Meursi;
    }

    /**
     * Set AJQ_Gültigkeitsendedatum_der_Verbindung_zwischen_Meursing_Posit
     *
     * @param \DateTime $aJQGültigkeitsendedatumDerVerbindungZwischenMeursingPosit
     * @return T32510
     */
    public function setAJQGültigkeitsendedatumDerVerbindungZwischenMeursingPosit($aJQGültigkeitsendedatumDerVerbindungZwischenMeursingPosit)
    {
        $this->AJQ_Gültigkeitsendedatum_der_Verbindung_zwischen_Meursing_Posit = $aJQGültigkeitsendedatumDerVerbindungZwischenMeursingPosit;

        return $this;
    }

    /**
     * Get AJQ_Gültigkeitsendedatum_der_Verbindung_zwischen_Meursing_Posit
     *
     * @return \DateTime 
     */
    public function getAJQGültigkeitsendedatumDerVerbindungZwischenMeursingPosit()
    {
        return $this->AJQ_Gültigkeitsendedatum_der_Verbindung_zwischen_Meursing_Posit;
    }
}
