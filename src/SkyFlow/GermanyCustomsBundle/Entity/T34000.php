<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T34000
 */
class T34000
{
    /**
     * @var integer
     */
    private $AJY_SID_für_Zusatzcode_Meursing;

    /**
     * @var \DateTime
     */
    private $AJZ_Gültigkeitsendedatum_des_Zusatzcode_Meursing;

    /**
     * @var string
     */
    private $AKA_Zusatzcode_Meursing;

    /**
     * @var \DateTime
     */
    private $AKB_Datum_des_Gültigkeitsbeginns_des_Zusatzcode_Meursing;


    /**
     * Set AJY_SID_für_Zusatzcode_Meursing
     *
     * @param integer $aJYSIDFürZusatzcodeMeursing
     * @return T34000
     */
    public function setAJYSIDFürZusatzcodeMeursing($aJYSIDFürZusatzcodeMeursing)
    {
        $this->AJY_SID_für_Zusatzcode_Meursing = $aJYSIDFürZusatzcodeMeursing;

        return $this;
    }

    /**
     * Get AJY_SID_für_Zusatzcode_Meursing
     *
     * @return integer 
     */
    public function getAJYSIDFürZusatzcodeMeursing()
    {
        return $this->AJY_SID_für_Zusatzcode_Meursing;
    }

    /**
     * Set AJZ_Gültigkeitsendedatum_des_Zusatzcode_Meursing
     *
     * @param \DateTime $aJZGültigkeitsendedatumDesZusatzcodeMeursing
     * @return T34000
     */
    public function setAJZGültigkeitsendedatumDesZusatzcodeMeursing($aJZGültigkeitsendedatumDesZusatzcodeMeursing)
    {
        $this->AJZ_Gültigkeitsendedatum_des_Zusatzcode_Meursing = $aJZGültigkeitsendedatumDesZusatzcodeMeursing;

        return $this;
    }

    /**
     * Get AJZ_Gültigkeitsendedatum_des_Zusatzcode_Meursing
     *
     * @return \DateTime 
     */
    public function getAJZGültigkeitsendedatumDesZusatzcodeMeursing()
    {
        return $this->AJZ_Gültigkeitsendedatum_des_Zusatzcode_Meursing;
    }

    /**
     * Set AKA_Zusatzcode_Meursing
     *
     * @param string $aKAZusatzcodeMeursing
     * @return T34000
     */
    public function setAKAZusatzcodeMeursing($aKAZusatzcodeMeursing)
    {
        $this->AKA_Zusatzcode_Meursing = $aKAZusatzcodeMeursing;

        return $this;
    }

    /**
     * Get AKA_Zusatzcode_Meursing
     *
     * @return string 
     */
    public function getAKAZusatzcodeMeursing()
    {
        return $this->AKA_Zusatzcode_Meursing;
    }

    /**
     * Set AKB_Datum_des_Gültigkeitsbeginns_des_Zusatzcode_Meursing
     *
     * @param \DateTime $aKBDatumDesGültigkeitsbeginnsDesZusatzcodeMeursing
     * @return T34000
     */
    public function setAKBDatumDesGültigkeitsbeginnsDesZusatzcodeMeursing($aKBDatumDesGültigkeitsbeginnsDesZusatzcodeMeursing)
    {
        $this->AKB_Datum_des_Gültigkeitsbeginns_des_Zusatzcode_Meursing = $aKBDatumDesGültigkeitsbeginnsDesZusatzcodeMeursing;

        return $this;
    }

    /**
     * Get AKB_Datum_des_Gültigkeitsbeginns_des_Zusatzcode_Meursing
     *
     * @return \DateTime 
     */
    public function getAKBDatumDesGültigkeitsbeginnsDesZusatzcodeMeursing()
    {
        return $this->AKB_Datum_des_Gültigkeitsbeginns_des_Zusatzcode_Meursing;
    }
}
