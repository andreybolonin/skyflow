<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N16000
 */
class N16000
{
    /**
     * @var string
     */
    private $ATQ_Kreditierungsart;

    /**
     * @var string
     */
    private $ATR_Beschreibung_der_Kreditierungsart;


    /**
     * Set ATQ_Kreditierungsart
     *
     * @param string $aTQKreditierungsart
     * @return N16000
     */
    public function setATQKreditierungsart($aTQKreditierungsart)
    {
        $this->ATQ_Kreditierungsart = $aTQKreditierungsart;

        return $this;
    }

    /**
     * Get ATQ_Kreditierungsart
     *
     * @return string 
     */
    public function getATQKreditierungsart()
    {
        return $this->ATQ_Kreditierungsart;
    }

    /**
     * Set ATR_Beschreibung_der_Kreditierungsart
     *
     * @param string $aTRBeschreibungDerKreditierungsart
     * @return N16000
     */
    public function setATRBeschreibungDerKreditierungsart($aTRBeschreibungDerKreditierungsart)
    {
        $this->ATR_Beschreibung_der_Kreditierungsart = $aTRBeschreibungDerKreditierungsart;

        return $this;
    }

    /**
     * Get ATR_Beschreibung_der_Kreditierungsart
     *
     * @return string 
     */
    public function getATRBeschreibungDerKreditierungsart()
    {
        return $this->ATR_Beschreibung_der_Kreditierungsart;
    }
}
