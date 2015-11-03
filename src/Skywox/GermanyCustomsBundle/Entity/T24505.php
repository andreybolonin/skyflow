<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T24505
 */
class T24505
{
    /**
     * @var integer
     */
    private $AEB_SID_der_Zusatzcodebeschreibung;

    /**
     * @var integer
     */
    private $AEC_SID_des_Zusatzcodes;

    /**
     * @var string
     */
    private $AED_Zusatzcodeart_ID;

    /**
     * @var string
     */
    private $AEE_Zusatzcode;

    /**
     * @var \DateTime
     */
    private $AEF_Datum_des_Gültigkeitsbeginns_der_Zusatzcodebeschreibung;

    /**
     * @var \DateTime
     */
    private $AEG_Datum_des_Gültigkeitsende_der_Zusatzcodebeschreibung;

    /**
     * @var string
     */
    private $AEH_Beschreibung_des_Zusatzcodes;


    /**
     * Set AEB_SID_der_Zusatzcodebeschreibung
     *
     * @param integer $aEBSIDDerZusatzcodebeschreibung
     * @return T24505
     */
    public function setAEBSIDDerZusatzcodebeschreibung($aEBSIDDerZusatzcodebeschreibung)
    {
        $this->AEB_SID_der_Zusatzcodebeschreibung = $aEBSIDDerZusatzcodebeschreibung;

        return $this;
    }

    /**
     * Get AEB_SID_der_Zusatzcodebeschreibung
     *
     * @return integer 
     */
    public function getAEBSIDDerZusatzcodebeschreibung()
    {
        return $this->AEB_SID_der_Zusatzcodebeschreibung;
    }

    /**
     * Set AEC_SID_des_Zusatzcodes
     *
     * @param integer $aECSIDDesZusatzcodes
     * @return T24505
     */
    public function setAECSIDDesZusatzcodes($aECSIDDesZusatzcodes)
    {
        $this->AEC_SID_des_Zusatzcodes = $aECSIDDesZusatzcodes;

        return $this;
    }

    /**
     * Get AEC_SID_des_Zusatzcodes
     *
     * @return integer 
     */
    public function getAECSIDDesZusatzcodes()
    {
        return $this->AEC_SID_des_Zusatzcodes;
    }

    /**
     * Set AED_Zusatzcodeart_ID
     *
     * @param string $aEDZusatzcodeartID
     * @return T24505
     */
    public function setAEDZusatzcodeartID($aEDZusatzcodeartID)
    {
        $this->AED_Zusatzcodeart_ID = $aEDZusatzcodeartID;

        return $this;
    }

    /**
     * Get AED_Zusatzcodeart_ID
     *
     * @return string 
     */
    public function getAEDZusatzcodeartID()
    {
        return $this->AED_Zusatzcodeart_ID;
    }

    /**
     * Set AEE_Zusatzcode
     *
     * @param string $aEEZusatzcode
     * @return T24505
     */
    public function setAEEZusatzcode($aEEZusatzcode)
    {
        $this->AEE_Zusatzcode = $aEEZusatzcode;

        return $this;
    }

    /**
     * Get AEE_Zusatzcode
     *
     * @return string 
     */
    public function getAEEZusatzcode()
    {
        return $this->AEE_Zusatzcode;
    }

    /**
     * Set AEF_Datum_des_Gültigkeitsbeginns_der_Zusatzcodebeschreibung
     *
     * @param \DateTime $aEFDatumDesGültigkeitsbeginnsDerZusatzcodebeschreibung
     * @return T24505
     */
    public function setAEFDatumDesGültigkeitsbeginnsDerZusatzcodebeschreibung($aEFDatumDesGültigkeitsbeginnsDerZusatzcodebeschreibung)
    {
        $this->AEF_Datum_des_Gültigkeitsbeginns_der_Zusatzcodebeschreibung = $aEFDatumDesGültigkeitsbeginnsDerZusatzcodebeschreibung;

        return $this;
    }

    /**
     * Get AEF_Datum_des_Gültigkeitsbeginns_der_Zusatzcodebeschreibung
     *
     * @return \DateTime 
     */
    public function getAEFDatumDesGültigkeitsbeginnsDerZusatzcodebeschreibung()
    {
        return $this->AEF_Datum_des_Gültigkeitsbeginns_der_Zusatzcodebeschreibung;
    }

    /**
     * Set AEG_Datum_des_Gültigkeitsende_der_Zusatzcodebeschreibung
     *
     * @param \DateTime $aEGDatumDesGültigkeitsendeDerZusatzcodebeschreibung
     * @return T24505
     */
    public function setAEGDatumDesGültigkeitsendeDerZusatzcodebeschreibung($aEGDatumDesGültigkeitsendeDerZusatzcodebeschreibung)
    {
        $this->AEG_Datum_des_Gültigkeitsende_der_Zusatzcodebeschreibung = $aEGDatumDesGültigkeitsendeDerZusatzcodebeschreibung;

        return $this;
    }

    /**
     * Get AEG_Datum_des_Gültigkeitsende_der_Zusatzcodebeschreibung
     *
     * @return \DateTime 
     */
    public function getAEGDatumDesGültigkeitsendeDerZusatzcodebeschreibung()
    {
        return $this->AEG_Datum_des_Gültigkeitsende_der_Zusatzcodebeschreibung;
    }

    /**
     * Set AEH_Beschreibung_des_Zusatzcodes
     *
     * @param string $aEHBeschreibungDesZusatzcodes
     * @return T24505
     */
    public function setAEHBeschreibungDesZusatzcodes($aEHBeschreibungDesZusatzcodes)
    {
        $this->AEH_Beschreibung_des_Zusatzcodes = $aEHBeschreibungDesZusatzcodes;

        return $this;
    }

    /**
     * Get AEH_Beschreibung_des_Zusatzcodes
     *
     * @return string 
     */
    public function getAEHBeschreibungDesZusatzcodes()
    {
        return $this->AEH_Beschreibung_des_Zusatzcodes;
    }
}
