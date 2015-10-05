<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37520
 */
class T37520
{
    /**
     * @var integer
     */
    private $AMW_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AMX_Datum_und_Uhrzeit;

    /**
     * @var \DateTime
     */
    private $AMY_Datum_der_Wiedereröffnung;


    /**
     * Set AMW_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMWSIDDerQUOTABeschreibung
     * @return T37520
     */
    public function setAMWSIDDerQUOTABeschreibung($aMWSIDDerQUOTABeschreibung)
    {
        $this->AMW_SID_der_QUOTA_Beschreibung = $aMWSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMW_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMWSIDDerQUOTABeschreibung()
    {
        return $this->AMW_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AMX_Datum_und_Uhrzeit
     *
     * @param \DateTime $aMXDatumUndUhrzeit
     * @return T37520
     */
    public function setAMXDatumUndUhrzeit($aMXDatumUndUhrzeit)
    {
        $this->AMX_Datum_und_Uhrzeit = $aMXDatumUndUhrzeit;

        return $this;
    }

    /**
     * Get AMX_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getAMXDatumUndUhrzeit()
    {
        return $this->AMX_Datum_und_Uhrzeit;
    }

    /**
     * Set AMY_Datum_der_Wiedereröffnung
     *
     * @param \DateTime $aMYDatumDerWiedereröffnung
     * @return T37520
     */
    public function setAMYDatumDerWiedereröffnung($aMYDatumDerWiedereröffnung)
    {
        $this->AMY_Datum_der_Wiedereröffnung = $aMYDatumDerWiedereröffnung;

        return $this;
    }

    /**
     * Get AMY_Datum_der_Wiedereröffnung
     *
     * @return \DateTime 
     */
    public function getAMYDatumDerWiedereröffnung()
    {
        return $this->AMY_Datum_der_Wiedereröffnung;
    }
}
