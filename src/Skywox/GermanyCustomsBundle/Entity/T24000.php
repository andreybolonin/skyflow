<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T24000
 */
class T24000
{
    /**
     * @var string
     */
    private $ADS_Maßnahmeart_ID;

    /**
     * @var string
     */
    private $ADT_Zusatzcodeart_ID;

    /**
     * @var \DateTime
     */
    private $ADU_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ADV_Endedatum;


    /**
     * Set ADS_Maßnahmeart_ID
     *
     * @param string $aDSMaßnahmeartID
     * @return T24000
     */
    public function setADSMaßnahmeartID($aDSMaßnahmeartID)
    {
        $this->ADS_Maßnahmeart_ID = $aDSMaßnahmeartID;

        return $this;
    }

    /**
     * Get ADS_Maßnahmeart_ID
     *
     * @return string 
     */
    public function getADSMaßnahmeartID()
    {
        return $this->ADS_Maßnahmeart_ID;
    }

    /**
     * Set ADT_Zusatzcodeart_ID
     *
     * @param string $aDTZusatzcodeartID
     * @return T24000
     */
    public function setADTZusatzcodeartID($aDTZusatzcodeartID)
    {
        $this->ADT_Zusatzcodeart_ID = $aDTZusatzcodeartID;

        return $this;
    }

    /**
     * Get ADT_Zusatzcodeart_ID
     *
     * @return string 
     */
    public function getADTZusatzcodeartID()
    {
        return $this->ADT_Zusatzcodeart_ID;
    }

    /**
     * Set ADU_Beginndatum
     *
     * @param \DateTime $aDUBeginndatum
     * @return T24000
     */
    public function setADUBeginndatum($aDUBeginndatum)
    {
        $this->ADU_Beginndatum = $aDUBeginndatum;

        return $this;
    }

    /**
     * Get ADU_Beginndatum
     *
     * @return \DateTime 
     */
    public function getADUBeginndatum()
    {
        return $this->ADU_Beginndatum;
    }

    /**
     * Set ADV_Endedatum
     *
     * @param \DateTime $aDVEndedatum
     * @return T24000
     */
    public function setADVEndedatum($aDVEndedatum)
    {
        $this->ADV_Endedatum = $aDVEndedatum;

        return $this;
    }

    /**
     * Get ADV_Endedatum
     *
     * @return \DateTime 
     */
    public function getADVEndedatum()
    {
        return $this->ADV_Endedatum;
    }
}
