<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N30700
 */
class N30700
{
    /**
     * @var string
     */
    private $BAT_Verbrauchsteuerart_ID;

    /**
     * @var string
     */
    private $BAU_Kreditierungsart_ID;

    /**
     * @var \DateTime
     */
    private $BAV_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BAW_Endedatum;


    /**
     * Set BAT_Verbrauchsteuerart_ID
     *
     * @param string $bATVerbrauchsteuerartID
     * @return N30700
     */
    public function setBATVerbrauchsteuerartID($bATVerbrauchsteuerartID)
    {
        $this->BAT_Verbrauchsteuerart_ID = $bATVerbrauchsteuerartID;

        return $this;
    }

    /**
     * Get BAT_Verbrauchsteuerart_ID
     *
     * @return string 
     */
    public function getBATVerbrauchsteuerartID()
    {
        return $this->BAT_Verbrauchsteuerart_ID;
    }

    /**
     * Set BAU_Kreditierungsart_ID
     *
     * @param string $bAUKreditierungsartID
     * @return N30700
     */
    public function setBAUKreditierungsartID($bAUKreditierungsartID)
    {
        $this->BAU_Kreditierungsart_ID = $bAUKreditierungsartID;

        return $this;
    }

    /**
     * Get BAU_Kreditierungsart_ID
     *
     * @return string 
     */
    public function getBAUKreditierungsartID()
    {
        return $this->BAU_Kreditierungsart_ID;
    }

    /**
     * Set BAV_Beginndatum
     *
     * @param \DateTime $bAVBeginndatum
     * @return N30700
     */
    public function setBAVBeginndatum($bAVBeginndatum)
    {
        $this->BAV_Beginndatum = $bAVBeginndatum;

        return $this;
    }

    /**
     * Get BAV_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBAVBeginndatum()
    {
        return $this->BAV_Beginndatum;
    }

    /**
     * Set BAW_Endedatum
     *
     * @param \DateTime $bAWEndedatum
     * @return N30700
     */
    public function setBAWEndedatum($bAWEndedatum)
    {
        $this->BAW_Endedatum = $bAWEndedatum;

        return $this;
    }

    /**
     * Get BAW_Endedatum
     *
     * @return \DateTime 
     */
    public function getBAWEndedatum()
    {
        return $this->BAW_Endedatum;
    }
}
