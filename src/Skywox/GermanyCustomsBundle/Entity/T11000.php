<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T11000
 */
class T11000
{
    /**
     * @var string
     */
    private $AAH_Code_der_Bescheinigungsart;

    /**
     * @var \DateTime
     */
    private $AAI_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AAJ_Endedatum;

    /**
     * @var string
     */
    private $AAK_Beschreibung_der_Bescheinigungsart;


    /**
     * Set AAH_Code_der_Bescheinigungsart
     *
     * @param string $aAHCodeDerBescheinigungsart
     * @return T11000
     */
    public function setAAHCodeDerBescheinigungsart($aAHCodeDerBescheinigungsart)
    {
        $this->AAH_Code_der_Bescheinigungsart = $aAHCodeDerBescheinigungsart;

        return $this;
    }

    /**
     * Get AAH_Code_der_Bescheinigungsart
     *
     * @return string 
     */
    public function getAAHCodeDerBescheinigungsart()
    {
        return $this->AAH_Code_der_Bescheinigungsart;
    }

    /**
     * Set AAI_Beginndatum
     *
     * @param \DateTime $aAIBeginndatum
     * @return T11000
     */
    public function setAAIBeginndatum($aAIBeginndatum)
    {
        $this->AAI_Beginndatum = $aAIBeginndatum;

        return $this;
    }

    /**
     * Get AAI_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAAIBeginndatum()
    {
        return $this->AAI_Beginndatum;
    }

    /**
     * Set AAJ_Endedatum
     *
     * @param \DateTime $aAJEndedatum
     * @return T11000
     */
    public function setAAJEndedatum($aAJEndedatum)
    {
        $this->AAJ_Endedatum = $aAJEndedatum;

        return $this;
    }

    /**
     * Get AAJ_Endedatum
     *
     * @return \DateTime 
     */
    public function getAAJEndedatum()
    {
        return $this->AAJ_Endedatum;
    }

    /**
     * Set AAK_Beschreibung_der_Bescheinigungsart
     *
     * @param string $aAKBeschreibungDerBescheinigungsart
     * @return T11000
     */
    public function setAAKBeschreibungDerBescheinigungsart($aAKBeschreibungDerBescheinigungsart)
    {
        $this->AAK_Beschreibung_der_Bescheinigungsart = $aAKBeschreibungDerBescheinigungsart;

        return $this;
    }

    /**
     * Get AAK_Beschreibung_der_Bescheinigungsart
     *
     * @return string 
     */
    public function getAAKBeschreibungDerBescheinigungsart()
    {
        return $this->AAK_Beschreibung_der_Bescheinigungsart;
    }
}
