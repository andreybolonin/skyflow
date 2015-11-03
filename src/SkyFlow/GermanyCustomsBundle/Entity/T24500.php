<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T24500
 */
class T24500
{
    /**
     * @var integer
     */
    private $ADW_SID_des_Zusatzcodes;

    /**
     * @var string
     */
    private $ADX_Zusatzcodeart_ID;

    /**
     * @var string
     */
    private $ADY_Zusatzcode;

    /**
     * @var \DateTime
     */
    private $ADZ_Datum_des_Gültigkeitsbeginns_des_Zusatzcodes;

    /**
     * @var \DateTime
     */
    private $AEA_Gültigkeitsendedatum_des_Zusatzcodes;


    /**
     * Set ADW_SID_des_Zusatzcodes
     *
     * @param integer $aDWSIDDesZusatzcodes
     * @return T24500
     */
    public function setADWSIDDesZusatzcodes($aDWSIDDesZusatzcodes)
    {
        $this->ADW_SID_des_Zusatzcodes = $aDWSIDDesZusatzcodes;

        return $this;
    }

    /**
     * Get ADW_SID_des_Zusatzcodes
     *
     * @return integer 
     */
    public function getADWSIDDesZusatzcodes()
    {
        return $this->ADW_SID_des_Zusatzcodes;
    }

    /**
     * Set ADX_Zusatzcodeart_ID
     *
     * @param string $aDXZusatzcodeartID
     * @return T24500
     */
    public function setADXZusatzcodeartID($aDXZusatzcodeartID)
    {
        $this->ADX_Zusatzcodeart_ID = $aDXZusatzcodeartID;

        return $this;
    }

    /**
     * Get ADX_Zusatzcodeart_ID
     *
     * @return string 
     */
    public function getADXZusatzcodeartID()
    {
        return $this->ADX_Zusatzcodeart_ID;
    }

    /**
     * Set ADY_Zusatzcode
     *
     * @param string $aDYZusatzcode
     * @return T24500
     */
    public function setADYZusatzcode($aDYZusatzcode)
    {
        $this->ADY_Zusatzcode = $aDYZusatzcode;

        return $this;
    }

    /**
     * Get ADY_Zusatzcode
     *
     * @return string 
     */
    public function getADYZusatzcode()
    {
        return $this->ADY_Zusatzcode;
    }

    /**
     * Set ADZ_Datum_des_Gültigkeitsbeginns_des_Zusatzcodes
     *
     * @param \DateTime $aDZDatumDesGültigkeitsbeginnsDesZusatzcodes
     * @return T24500
     */
    public function setADZDatumDesGültigkeitsbeginnsDesZusatzcodes($aDZDatumDesGültigkeitsbeginnsDesZusatzcodes)
    {
        $this->ADZ_Datum_des_Gültigkeitsbeginns_des_Zusatzcodes = $aDZDatumDesGültigkeitsbeginnsDesZusatzcodes;

        return $this;
    }

    /**
     * Get ADZ_Datum_des_Gültigkeitsbeginns_des_Zusatzcodes
     *
     * @return \DateTime 
     */
    public function getADZDatumDesGültigkeitsbeginnsDesZusatzcodes()
    {
        return $this->ADZ_Datum_des_Gültigkeitsbeginns_des_Zusatzcodes;
    }

    /**
     * Set AEA_Gültigkeitsendedatum_des_Zusatzcodes
     *
     * @param \DateTime $aEAGültigkeitsendedatumDesZusatzcodes
     * @return T24500
     */
    public function setAEAGültigkeitsendedatumDesZusatzcodes($aEAGültigkeitsendedatumDesZusatzcodes)
    {
        $this->AEA_Gültigkeitsendedatum_des_Zusatzcodes = $aEAGültigkeitsendedatumDesZusatzcodes;

        return $this;
    }

    /**
     * Get AEA_Gültigkeitsendedatum_des_Zusatzcodes
     *
     * @return \DateTime 
     */
    public function getAEAGültigkeitsendedatumDesZusatzcodes()
    {
        return $this->AEA_Gültigkeitsendedatum_des_Zusatzcodes;
    }
}
