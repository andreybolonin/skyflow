<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T20000
 */
class T20000
{
    /**
     * @var string
     */
    private $ABQ_Fußnotenart_ID;

    /**
     * @var string
     */
    private $ABR_Fußnoten_ID;

    /**
     * @var \DateTime
     */
    private $ABS_Datum_des_Gültigkeitsbeginns_des_Fußnotencodes;

    /**
     * @var \DateTime
     */
    private $ABT_Gültigkeitsendedatum_des_Fußnotencodes;


    /**
     * Set ABQ_Fußnotenart_ID
     *
     * @param string $aBQFußnotenartID
     * @return T20000
     */
    public function setABQFußnotenartID($aBQFußnotenartID)
    {
        $this->ABQ_Fußnotenart_ID = $aBQFußnotenartID;

        return $this;
    }

    /**
     * Get ABQ_Fußnotenart_ID
     *
     * @return string 
     */
    public function getABQFußnotenartID()
    {
        return $this->ABQ_Fußnotenart_ID;
    }

    /**
     * Set ABR_Fußnoten_ID
     *
     * @param string $aBRFußnotenID
     * @return T20000
     */
    public function setABRFußnotenID($aBRFußnotenID)
    {
        $this->ABR_Fußnoten_ID = $aBRFußnotenID;

        return $this;
    }

    /**
     * Get ABR_Fußnoten_ID
     *
     * @return string 
     */
    public function getABRFußnotenID()
    {
        return $this->ABR_Fußnoten_ID;
    }

    /**
     * Set ABS_Datum_des_Gültigkeitsbeginns_des_Fußnotencodes
     *
     * @param \DateTime $aBSDatumDesGültigkeitsbeginnsDesFußnotencodes
     * @return T20000
     */
    public function setABSDatumDesGültigkeitsbeginnsDesFußnotencodes($aBSDatumDesGültigkeitsbeginnsDesFußnotencodes)
    {
        $this->ABS_Datum_des_Gültigkeitsbeginns_des_Fußnotencodes = $aBSDatumDesGültigkeitsbeginnsDesFußnotencodes;

        return $this;
    }

    /**
     * Get ABS_Datum_des_Gültigkeitsbeginns_des_Fußnotencodes
     *
     * @return \DateTime 
     */
    public function getABSDatumDesGültigkeitsbeginnsDesFußnotencodes()
    {
        return $this->ABS_Datum_des_Gültigkeitsbeginns_des_Fußnotencodes;
    }

    /**
     * Set ABT_Gültigkeitsendedatum_des_Fußnotencodes
     *
     * @param \DateTime $aBTGültigkeitsendedatumDesFußnotencodes
     * @return T20000
     */
    public function setABTGültigkeitsendedatumDesFußnotencodes($aBTGültigkeitsendedatumDesFußnotencodes)
    {
        $this->ABT_Gültigkeitsendedatum_des_Fußnotencodes = $aBTGültigkeitsendedatumDesFußnotencodes;

        return $this;
    }

    /**
     * Get ABT_Gültigkeitsendedatum_des_Fußnotencodes
     *
     * @return \DateTime 
     */
    public function getABTGültigkeitsendedatumDesFußnotencodes()
    {
        return $this->ABT_Gültigkeitsendedatum_des_Fußnotencodes;
    }
}
