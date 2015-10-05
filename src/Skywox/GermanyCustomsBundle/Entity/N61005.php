<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61005
 */
class N61005
{
    /**
     * @var string
     */
    private $BHP_Beschränkungsgrund;

    /**
     * @var string
     */
    private $BHQ_Warennummer;

    /**
     * @var \DateTime
     */
    private $BHR_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BHS_Endedatum;


    /**
     * Set BHP_Beschränkungsgrund
     *
     * @param string $bHPBeschränkungsgrund
     * @return N61005
     */
    public function setBHPBeschränkungsgrund($bHPBeschränkungsgrund)
    {
        $this->BHP_Beschränkungsgrund = $bHPBeschränkungsgrund;

        return $this;
    }

    /**
     * Get BHP_Beschränkungsgrund
     *
     * @return string 
     */
    public function getBHPBeschränkungsgrund()
    {
        return $this->BHP_Beschränkungsgrund;
    }

    /**
     * Set BHQ_Warennummer
     *
     * @param string $bHQWarennummer
     * @return N61005
     */
    public function setBHQWarennummer($bHQWarennummer)
    {
        $this->BHQ_Warennummer = $bHQWarennummer;

        return $this;
    }

    /**
     * Get BHQ_Warennummer
     *
     * @return string 
     */
    public function getBHQWarennummer()
    {
        return $this->BHQ_Warennummer;
    }

    /**
     * Set BHR_Beginndatum
     *
     * @param \DateTime $bHRBeginndatum
     * @return N61005
     */
    public function setBHRBeginndatum($bHRBeginndatum)
    {
        $this->BHR_Beginndatum = $bHRBeginndatum;

        return $this;
    }

    /**
     * Get BHR_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBHRBeginndatum()
    {
        return $this->BHR_Beginndatum;
    }

    /**
     * Set BHS_Endedatum
     *
     * @param \DateTime $bHSEndedatum
     * @return N61005
     */
    public function setBHSEndedatum($bHSEndedatum)
    {
        $this->BHS_Endedatum = $bHSEndedatum;

        return $this;
    }

    /**
     * Get BHS_Endedatum
     *
     * @return \DateTime 
     */
    public function getBHSEndedatum()
    {
        return $this->BHS_Endedatum;
    }
}
