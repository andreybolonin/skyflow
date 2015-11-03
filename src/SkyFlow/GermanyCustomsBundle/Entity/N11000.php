<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N11000
 */
class N11000
{
    /**
     * @var string
     */
    private $ATA_Art_der_Bescheinigung;

    /**
     * @var \DateTime
     */
    private $ATB_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ATC_Endedatum;

    /**
     * @var string
     */
    private $ATD_Beschreibung_der_Bescheinigungsart;


    /**
     * Set ATA_Art_der_Bescheinigung
     *
     * @param string $aTAArtDerBescheinigung
     * @return N11000
     */
    public function setATAArtDerBescheinigung($aTAArtDerBescheinigung)
    {
        $this->ATA_Art_der_Bescheinigung = $aTAArtDerBescheinigung;

        return $this;
    }

    /**
     * Get ATA_Art_der_Bescheinigung
     *
     * @return string 
     */
    public function getATAArtDerBescheinigung()
    {
        return $this->ATA_Art_der_Bescheinigung;
    }

    /**
     * Set ATB_Beginndatum
     *
     * @param \DateTime $aTBBeginndatum
     * @return N11000
     */
    public function setATBBeginndatum($aTBBeginndatum)
    {
        $this->ATB_Beginndatum = $aTBBeginndatum;

        return $this;
    }

    /**
     * Get ATB_Beginndatum
     *
     * @return \DateTime 
     */
    public function getATBBeginndatum()
    {
        return $this->ATB_Beginndatum;
    }

    /**
     * Set ATC_Endedatum
     *
     * @param \DateTime $aTCEndedatum
     * @return N11000
     */
    public function setATCEndedatum($aTCEndedatum)
    {
        $this->ATC_Endedatum = $aTCEndedatum;

        return $this;
    }

    /**
     * Get ATC_Endedatum
     *
     * @return \DateTime 
     */
    public function getATCEndedatum()
    {
        return $this->ATC_Endedatum;
    }

    /**
     * Set ATD_Beschreibung_der_Bescheinigungsart
     *
     * @param string $aTDBeschreibungDerBescheinigungsart
     * @return N11000
     */
    public function setATDBeschreibungDerBescheinigungsart($aTDBeschreibungDerBescheinigungsart)
    {
        $this->ATD_Beschreibung_der_Bescheinigungsart = $aTDBeschreibungDerBescheinigungsart;

        return $this;
    }

    /**
     * Get ATD_Beschreibung_der_Bescheinigungsart
     *
     * @return string 
     */
    public function getATDBeschreibungDerBescheinigungsart()
    {
        return $this->ATD_Beschreibung_der_Bescheinigungsart;
    }
}
