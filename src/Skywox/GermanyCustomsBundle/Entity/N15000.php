<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N15000
 */
class N15000
{
    /**
     * @var string
     */
    private $ATO_Schlüssel_der_Überwachungsart;

    /**
     * @var string
     */
    private $ATP_Beschreibung_der_Überwachungsart;


    /**
     * Set ATO_Schlüssel_der_Überwachungsart
     *
     * @param string $aTOSchlüsselDerÜberwachungsart
     * @return N15000
     */
    public function setATOSchlüsselDerÜberwachungsart($aTOSchlüsselDerÜberwachungsart)
    {
        $this->ATO_Schlüssel_der_Überwachungsart = $aTOSchlüsselDerÜberwachungsart;

        return $this;
    }

    /**
     * Get ATO_Schlüssel_der_Überwachungsart
     *
     * @return string 
     */
    public function getATOSchlüsselDerÜberwachungsart()
    {
        return $this->ATO_Schlüssel_der_Überwachungsart;
    }

    /**
     * Set ATP_Beschreibung_der_Überwachungsart
     *
     * @param string $aTPBeschreibungDerÜberwachungsart
     * @return N15000
     */
    public function setATPBeschreibungDerÜberwachungsart($aTPBeschreibungDerÜberwachungsart)
    {
        $this->ATP_Beschreibung_der_Überwachungsart = $aTPBeschreibungDerÜberwachungsart;

        return $this;
    }

    /**
     * Get ATP_Beschreibung_der_Überwachungsart
     *
     * @return string 
     */
    public function getATPBeschreibungDerÜberwachungsart()
    {
        return $this->ATP_Beschreibung_der_Überwachungsart;
    }
}
