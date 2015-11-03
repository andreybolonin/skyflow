<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T14000
 */
class T14000
{
    /**
     * @var string
     */
    private $AAV_Maßnahmeartserien_ID;

    /**
     * @var \DateTime
     */
    private $AAW_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AAX_Endedatum;

    /**
     * @var string
     */
    private $AAY_Maßnahmeartkombination;

    /**
     * @var string
     */
    private $AAZ_Beschreibung_der_Maßnahmeartserie;


    /**
     * Set AAV_Maßnahmeartserien_ID
     *
     * @param string $aAVMaßnahmeartserienID
     * @return T14000
     */
    public function setAAVMaßnahmeartserienID($aAVMaßnahmeartserienID)
    {
        $this->AAV_Maßnahmeartserien_ID = $aAVMaßnahmeartserienID;

        return $this;
    }

    /**
     * Get AAV_Maßnahmeartserien_ID
     *
     * @return string 
     */
    public function getAAVMaßnahmeartserienID()
    {
        return $this->AAV_Maßnahmeartserien_ID;
    }

    /**
     * Set AAW_Beginndatum
     *
     * @param \DateTime $aAWBeginndatum
     * @return T14000
     */
    public function setAAWBeginndatum($aAWBeginndatum)
    {
        $this->AAW_Beginndatum = $aAWBeginndatum;

        return $this;
    }

    /**
     * Get AAW_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAAWBeginndatum()
    {
        return $this->AAW_Beginndatum;
    }

    /**
     * Set AAX_Endedatum
     *
     * @param \DateTime $aAXEndedatum
     * @return T14000
     */
    public function setAAXEndedatum($aAXEndedatum)
    {
        $this->AAX_Endedatum = $aAXEndedatum;

        return $this;
    }

    /**
     * Get AAX_Endedatum
     *
     * @return \DateTime 
     */
    public function getAAXEndedatum()
    {
        return $this->AAX_Endedatum;
    }

    /**
     * Set AAY_Maßnahmeartkombination
     *
     * @param string $aAYMaßnahmeartkombination
     * @return T14000
     */
    public function setAAYMaßnahmeartkombination($aAYMaßnahmeartkombination)
    {
        $this->AAY_Maßnahmeartkombination = $aAYMaßnahmeartkombination;

        return $this;
    }

    /**
     * Get AAY_Maßnahmeartkombination
     *
     * @return string 
     */
    public function getAAYMaßnahmeartkombination()
    {
        return $this->AAY_Maßnahmeartkombination;
    }

    /**
     * Set AAZ_Beschreibung_der_Maßnahmeartserie
     *
     * @param string $aAZBeschreibungDerMaßnahmeartserie
     * @return T14000
     */
    public function setAAZBeschreibungDerMaßnahmeartserie($aAZBeschreibungDerMaßnahmeartserie)
    {
        $this->AAZ_Beschreibung_der_Maßnahmeartserie = $aAZBeschreibungDerMaßnahmeartserie;

        return $this;
    }

    /**
     * Get AAZ_Beschreibung_der_Maßnahmeartserie
     *
     * @return string 
     */
    public function getAAZBeschreibungDerMaßnahmeartserie()
    {
        return $this->AAZ_Beschreibung_der_Maßnahmeartserie;
    }
}
