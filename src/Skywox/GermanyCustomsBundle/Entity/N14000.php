<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N14000
 */
class N14000
{
    /**
     * @var string
     */
    private $ATL_Hinweisart;

    /**
     * @var string
     */
    private $ATM_Beschreibung_der_Hinweisart;

    /**
     * @var string
     */
    private $ATN_Handelsbewegungscode;


    /**
     * Set ATL_Hinweisart
     *
     * @param string $aTLHinweisart
     * @return N14000
     */
    public function setATLHinweisart($aTLHinweisart)
    {
        $this->ATL_Hinweisart = $aTLHinweisart;

        return $this;
    }

    /**
     * Get ATL_Hinweisart
     *
     * @return string 
     */
    public function getATLHinweisart()
    {
        return $this->ATL_Hinweisart;
    }

    /**
     * Set ATM_Beschreibung_der_Hinweisart
     *
     * @param string $aTMBeschreibungDerHinweisart
     * @return N14000
     */
    public function setATMBeschreibungDerHinweisart($aTMBeschreibungDerHinweisart)
    {
        $this->ATM_Beschreibung_der_Hinweisart = $aTMBeschreibungDerHinweisart;

        return $this;
    }

    /**
     * Get ATM_Beschreibung_der_Hinweisart
     *
     * @return string 
     */
    public function getATMBeschreibungDerHinweisart()
    {
        return $this->ATM_Beschreibung_der_Hinweisart;
    }

    /**
     * Set ATN_Handelsbewegungscode
     *
     * @param string $aTNHandelsbewegungscode
     * @return N14000
     */
    public function setATNHandelsbewegungscode($aTNHandelsbewegungscode)
    {
        $this->ATN_Handelsbewegungscode = $aTNHandelsbewegungscode;

        return $this;
    }

    /**
     * Get ATN_Handelsbewegungscode
     *
     * @return string 
     */
    public function getATNHandelsbewegungscode()
    {
        return $this->ATN_Handelsbewegungscode;
    }
}
