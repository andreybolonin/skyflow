<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37515
 */
class T37515
{
    /**
     * @var integer
     */
    private $AMT_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AMU_Datum_und_Uhrzeit;

    /**
     * @var \DateTime
     */
    private $AMV_Datum_der_Erschöpfung;


    /**
     * Set AMT_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMTSIDDerQUOTABeschreibung
     * @return T37515
     */
    public function setAMTSIDDerQUOTABeschreibung($aMTSIDDerQUOTABeschreibung)
    {
        $this->AMT_SID_der_QUOTA_Beschreibung = $aMTSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMT_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMTSIDDerQUOTABeschreibung()
    {
        return $this->AMT_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AMU_Datum_und_Uhrzeit
     *
     * @param \DateTime $aMUDatumUndUhrzeit
     * @return T37515
     */
    public function setAMUDatumUndUhrzeit($aMUDatumUndUhrzeit)
    {
        $this->AMU_Datum_und_Uhrzeit = $aMUDatumUndUhrzeit;

        return $this;
    }

    /**
     * Get AMU_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getAMUDatumUndUhrzeit()
    {
        return $this->AMU_Datum_und_Uhrzeit;
    }

    /**
     * Set AMV_Datum_der_Erschöpfung
     *
     * @param \DateTime $aMVDatumDerErschöpfung
     * @return T37515
     */
    public function setAMVDatumDerErschöpfung($aMVDatumDerErschöpfung)
    {
        $this->AMV_Datum_der_Erschöpfung = $aMVDatumDerErschöpfung;

        return $this;
    }

    /**
     * Get AMV_Datum_der_Erschöpfung
     *
     * @return \DateTime 
     */
    public function getAMVDatumDerErschöpfung()
    {
        return $this->AMV_Datum_der_Erschöpfung;
    }
}
