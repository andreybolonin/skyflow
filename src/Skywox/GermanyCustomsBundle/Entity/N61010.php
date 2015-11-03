<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61010
 */
class N61010
{
    /**
     * @var string
     */
    private $BHT_Beschränkungsgrund;

    /**
     * @var string
     */
    private $BHU_Verweis_auf_weitere_Beschränkungen;

    /**
     * @var \DateTime
     */
    private $BHV_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BHW_Endedatum;


    /**
     * Set BHT_Beschränkungsgrund
     *
     * @param string $bHTBeschränkungsgrund
     * @return N61010
     */
    public function setBHTBeschränkungsgrund($bHTBeschränkungsgrund)
    {
        $this->BHT_Beschränkungsgrund = $bHTBeschränkungsgrund;

        return $this;
    }

    /**
     * Get BHT_Beschränkungsgrund
     *
     * @return string 
     */
    public function getBHTBeschränkungsgrund()
    {
        return $this->BHT_Beschränkungsgrund;
    }

    /**
     * Set BHU_Verweis_auf_weitere_Beschränkungen
     *
     * @param string $bHUVerweisAufWeitereBeschränkungen
     * @return N61010
     */
    public function setBHUVerweisAufWeitereBeschränkungen($bHUVerweisAufWeitereBeschränkungen)
    {
        $this->BHU_Verweis_auf_weitere_Beschränkungen = $bHUVerweisAufWeitereBeschränkungen;

        return $this;
    }

    /**
     * Get BHU_Verweis_auf_weitere_Beschränkungen
     *
     * @return string 
     */
    public function getBHUVerweisAufWeitereBeschränkungen()
    {
        return $this->BHU_Verweis_auf_weitere_Beschränkungen;
    }

    /**
     * Set BHV_Beginndatum
     *
     * @param \DateTime $bHVBeginndatum
     * @return N61010
     */
    public function setBHVBeginndatum($bHVBeginndatum)
    {
        $this->BHV_Beginndatum = $bHVBeginndatum;

        return $this;
    }

    /**
     * Get BHV_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBHVBeginndatum()
    {
        return $this->BHV_Beginndatum;
    }

    /**
     * Set BHW_Endedatum
     *
     * @param \DateTime $bHWEndedatum
     * @return N61010
     */
    public function setBHWEndedatum($bHWEndedatum)
    {
        $this->BHW_Endedatum = $bHWEndedatum;

        return $this;
    }

    /**
     * Get BHW_Endedatum
     *
     * @return \DateTime 
     */
    public function getBHWEndedatum()
    {
        return $this->BHW_Endedatum;
    }
}
