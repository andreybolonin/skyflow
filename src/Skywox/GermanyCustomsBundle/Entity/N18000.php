<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N18000
 */
class N18000
{
    /**
     * @var string
     */
    private $ATS_Verbrauchsteuerart_ID;

    /**
     * @var \DateTime
     */
    private $ATT_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ATU_Endedatum;

    /**
     * @var string
     */
    private $ATV_Beschreibung;


    /**
     * Set ATS_Verbrauchsteuerart_ID
     *
     * @param string $aTSVerbrauchsteuerartID
     * @return N18000
     */
    public function setATSVerbrauchsteuerartID($aTSVerbrauchsteuerartID)
    {
        $this->ATS_Verbrauchsteuerart_ID = $aTSVerbrauchsteuerartID;

        return $this;
    }

    /**
     * Get ATS_Verbrauchsteuerart_ID
     *
     * @return string 
     */
    public function getATSVerbrauchsteuerartID()
    {
        return $this->ATS_Verbrauchsteuerart_ID;
    }

    /**
     * Set ATT_Beginndatum
     *
     * @param \DateTime $aTTBeginndatum
     * @return N18000
     */
    public function setATTBeginndatum($aTTBeginndatum)
    {
        $this->ATT_Beginndatum = $aTTBeginndatum;

        return $this;
    }

    /**
     * Get ATT_Beginndatum
     *
     * @return \DateTime 
     */
    public function getATTBeginndatum()
    {
        return $this->ATT_Beginndatum;
    }

    /**
     * Set ATU_Endedatum
     *
     * @param \DateTime $aTUEndedatum
     * @return N18000
     */
    public function setATUEndedatum($aTUEndedatum)
    {
        $this->ATU_Endedatum = $aTUEndedatum;

        return $this;
    }

    /**
     * Get ATU_Endedatum
     *
     * @return \DateTime 
     */
    public function getATUEndedatum()
    {
        return $this->ATU_Endedatum;
    }

    /**
     * Set ATV_Beschreibung
     *
     * @param string $aTVBeschreibung
     * @return N18000
     */
    public function setATVBeschreibung($aTVBeschreibung)
    {
        $this->ATV_Beschreibung = $aTVBeschreibung;

        return $this;
    }

    /**
     * Get ATV_Beschreibung
     *
     * @return string 
     */
    public function getATVBeschreibung()
    {
        return $this->ATV_Beschreibung;
    }
}
