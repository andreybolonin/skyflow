<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N24000
 */
class N24000
{
    /**
     * @var string
     */
    private $AWC_Bescheinigungsart;

    /**
     * @var string
     */
    private $AWD_Schlüssel_der_Bescheinigung;

    /**
     * @var \DateTime
     */
    private $AWE_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AWF_Endedatum;

    /**
     * @var string
     */
    private $AWG_Beschreibung_der_Bescheinigung;


    /**
     * Set AWC_Bescheinigungsart
     *
     * @param string $aWCBescheinigungsart
     * @return N24000
     */
    public function setAWCBescheinigungsart($aWCBescheinigungsart)
    {
        $this->AWC_Bescheinigungsart = $aWCBescheinigungsart;

        return $this;
    }

    /**
     * Get AWC_Bescheinigungsart
     *
     * @return string 
     */
    public function getAWCBescheinigungsart()
    {
        return $this->AWC_Bescheinigungsart;
    }

    /**
     * Set AWD_Schlüssel_der_Bescheinigung
     *
     * @param string $aWDSchlüsselDerBescheinigung
     * @return N24000
     */
    public function setAWDSchlüsselDerBescheinigung($aWDSchlüsselDerBescheinigung)
    {
        $this->AWD_Schlüssel_der_Bescheinigung = $aWDSchlüsselDerBescheinigung;

        return $this;
    }

    /**
     * Get AWD_Schlüssel_der_Bescheinigung
     *
     * @return string 
     */
    public function getAWDSchlüsselDerBescheinigung()
    {
        return $this->AWD_Schlüssel_der_Bescheinigung;
    }

    /**
     * Set AWE_Beginndatum
     *
     * @param \DateTime $aWEBeginndatum
     * @return N24000
     */
    public function setAWEBeginndatum($aWEBeginndatum)
    {
        $this->AWE_Beginndatum = $aWEBeginndatum;

        return $this;
    }

    /**
     * Get AWE_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAWEBeginndatum()
    {
        return $this->AWE_Beginndatum;
    }

    /**
     * Set AWF_Endedatum
     *
     * @param \DateTime $aWFEndedatum
     * @return N24000
     */
    public function setAWFEndedatum($aWFEndedatum)
    {
        $this->AWF_Endedatum = $aWFEndedatum;

        return $this;
    }

    /**
     * Get AWF_Endedatum
     *
     * @return \DateTime 
     */
    public function getAWFEndedatum()
    {
        return $this->AWF_Endedatum;
    }

    /**
     * Set AWG_Beschreibung_der_Bescheinigung
     *
     * @param string $aWGBeschreibungDerBescheinigung
     * @return N24000
     */
    public function setAWGBeschreibungDerBescheinigung($aWGBeschreibungDerBescheinigung)
    {
        $this->AWG_Beschreibung_der_Bescheinigung = $aWGBeschreibungDerBescheinigung;

        return $this;
    }

    /**
     * Get AWG_Beschreibung_der_Bescheinigung
     *
     * @return string 
     */
    public function getAWGBeschreibungDerBescheinigung()
    {
        return $this->AWG_Beschreibung_der_Bescheinigung;
    }
}
