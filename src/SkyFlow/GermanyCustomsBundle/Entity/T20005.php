<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T20005
 */
class T20005
{
    /**
     * @var integer
     */
    private $ABU_SID_der_Fußnotenbeschreibung;

    /**
     * @var string
     */
    private $ABV_Fußnotenart_ID;

    /**
     * @var string
     */
    private $ABW_Fußnoten_ID;

    /**
     * @var \DateTime
     */
    private $ABX_Datum_des_Gültigkeitsbeginns_der_Fußnotenbeschreibung;

    /**
     * @var \DateTime
     */
    private $ABY_Gültigkeitsendedatum_der_Fußnotenbeschreibung;

    /**
     * @var string
     */
    private $ABZ_Beschreibung_der_Fußnote;


    /**
     * Set ABU_SID_der_Fußnotenbeschreibung
     *
     * @param integer $aBUSIDDerFußnotenbeschreibung
     * @return T20005
     */
    public function setABUSIDDerFußnotenbeschreibung($aBUSIDDerFußnotenbeschreibung)
    {
        $this->ABU_SID_der_Fußnotenbeschreibung = $aBUSIDDerFußnotenbeschreibung;

        return $this;
    }

    /**
     * Get ABU_SID_der_Fußnotenbeschreibung
     *
     * @return integer 
     */
    public function getABUSIDDerFußnotenbeschreibung()
    {
        return $this->ABU_SID_der_Fußnotenbeschreibung;
    }

    /**
     * Set ABV_Fußnotenart_ID
     *
     * @param string $aBVFußnotenartID
     * @return T20005
     */
    public function setABVFußnotenartID($aBVFußnotenartID)
    {
        $this->ABV_Fußnotenart_ID = $aBVFußnotenartID;

        return $this;
    }

    /**
     * Get ABV_Fußnotenart_ID
     *
     * @return string 
     */
    public function getABVFußnotenartID()
    {
        return $this->ABV_Fußnotenart_ID;
    }

    /**
     * Set ABW_Fußnoten_ID
     *
     * @param string $aBWFußnotenID
     * @return T20005
     */
    public function setABWFußnotenID($aBWFußnotenID)
    {
        $this->ABW_Fußnoten_ID = $aBWFußnotenID;

        return $this;
    }

    /**
     * Get ABW_Fußnoten_ID
     *
     * @return string 
     */
    public function getABWFußnotenID()
    {
        return $this->ABW_Fußnoten_ID;
    }

    /**
     * Set ABX_Datum_des_Gültigkeitsbeginns_der_Fußnotenbeschreibung
     *
     * @param \DateTime $aBXDatumDesGültigkeitsbeginnsDerFußnotenbeschreibung
     * @return T20005
     */
    public function setABXDatumDesGültigkeitsbeginnsDerFußnotenbeschreibung($aBXDatumDesGültigkeitsbeginnsDerFußnotenbeschreibung)
    {
        $this->ABX_Datum_des_Gültigkeitsbeginns_der_Fußnotenbeschreibung = $aBXDatumDesGültigkeitsbeginnsDerFußnotenbeschreibung;

        return $this;
    }

    /**
     * Get ABX_Datum_des_Gültigkeitsbeginns_der_Fußnotenbeschreibung
     *
     * @return \DateTime 
     */
    public function getABXDatumDesGültigkeitsbeginnsDerFußnotenbeschreibung()
    {
        return $this->ABX_Datum_des_Gültigkeitsbeginns_der_Fußnotenbeschreibung;
    }

    /**
     * Set ABY_Gültigkeitsendedatum_der_Fußnotenbeschreibung
     *
     * @param \DateTime $aBYGültigkeitsendedatumDerFußnotenbeschreibung
     * @return T20005
     */
    public function setABYGültigkeitsendedatumDerFußnotenbeschreibung($aBYGültigkeitsendedatumDerFußnotenbeschreibung)
    {
        $this->ABY_Gültigkeitsendedatum_der_Fußnotenbeschreibung = $aBYGültigkeitsendedatumDerFußnotenbeschreibung;

        return $this;
    }

    /**
     * Get ABY_Gültigkeitsendedatum_der_Fußnotenbeschreibung
     *
     * @return \DateTime 
     */
    public function getABYGültigkeitsendedatumDerFußnotenbeschreibung()
    {
        return $this->ABY_Gültigkeitsendedatum_der_Fußnotenbeschreibung;
    }

    /**
     * Set ABZ_Beschreibung_der_Fußnote
     *
     * @param string $aBZBeschreibungDerFußnote
     * @return T20005
     */
    public function setABZBeschreibungDerFußnote($aBZBeschreibungDerFußnote)
    {
        $this->ABZ_Beschreibung_der_Fußnote = $aBZBeschreibungDerFußnote;

        return $this;
    }

    /**
     * Get ABZ_Beschreibung_der_Fußnote
     *
     * @return string 
     */
    public function getABZBeschreibungDerFußnote()
    {
        return $this->ABZ_Beschreibung_der_Fußnote;
    }
}
