<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61000
 */
class N61000
{
    /**
     * @var string
     */
    private $BHK_Beschränkungsgrund;

    /**
     * @var \DateTime
     */
    private $BHL_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BHM_Endedatum;

    /**
     * @var string
     */
    private $BHN_Langbeschreibung;

    /**
     * @var string
     */
    private $BHO_zusätzliche_Informationen;


    /**
     * Set BHK_Beschränkungsgrund
     *
     * @param string $bHKBeschränkungsgrund
     * @return N61000
     */
    public function setBHKBeschränkungsgrund($bHKBeschränkungsgrund)
    {
        $this->BHK_Beschränkungsgrund = $bHKBeschränkungsgrund;

        return $this;
    }

    /**
     * Get BHK_Beschränkungsgrund
     *
     * @return string 
     */
    public function getBHKBeschränkungsgrund()
    {
        return $this->BHK_Beschränkungsgrund;
    }

    /**
     * Set BHL_Beginndatum
     *
     * @param \DateTime $bHLBeginndatum
     * @return N61000
     */
    public function setBHLBeginndatum($bHLBeginndatum)
    {
        $this->BHL_Beginndatum = $bHLBeginndatum;

        return $this;
    }

    /**
     * Get BHL_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBHLBeginndatum()
    {
        return $this->BHL_Beginndatum;
    }

    /**
     * Set BHM_Endedatum
     *
     * @param \DateTime $bHMEndedatum
     * @return N61000
     */
    public function setBHMEndedatum($bHMEndedatum)
    {
        $this->BHM_Endedatum = $bHMEndedatum;

        return $this;
    }

    /**
     * Get BHM_Endedatum
     *
     * @return \DateTime 
     */
    public function getBHMEndedatum()
    {
        return $this->BHM_Endedatum;
    }

    /**
     * Set BHN_Langbeschreibung
     *
     * @param string $bHNLangbeschreibung
     * @return N61000
     */
    public function setBHNLangbeschreibung($bHNLangbeschreibung)
    {
        $this->BHN_Langbeschreibung = $bHNLangbeschreibung;

        return $this;
    }

    /**
     * Get BHN_Langbeschreibung
     *
     * @return string 
     */
    public function getBHNLangbeschreibung()
    {
        return $this->BHN_Langbeschreibung;
    }

    /**
     * Set BHO_zusätzliche_Informationen
     *
     * @param string $bHOZusätzlicheInformationen
     * @return N61000
     */
    public function setBHOZusätzlicheInformationen($bHOZusätzlicheInformationen)
    {
        $this->BHO_zusätzliche_Informationen = $bHOZusätzlicheInformationen;

        return $this;
    }

    /**
     * Get BHO_zusätzliche_Informationen
     *
     * @return string 
     */
    public function getBHOZusätzlicheInformationen()
    {
        return $this->BHO_zusätzliche_Informationen;
    }
}
