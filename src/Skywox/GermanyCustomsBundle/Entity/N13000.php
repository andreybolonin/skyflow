<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N13000
 */
class N13000
{
    /**
     * @var string
     */
    private $ATH_Fußnotenart_ID;

    /**
     * @var \DateTime
     */
    private $ATI_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ATJ_Endedatum;

    /**
     * @var string
     */
    private $ATK_Beschreibung_der_Fußnotenart_ID;


    /**
     * Set ATH_Fußnotenart_ID
     *
     * @param string $aTHFußnotenartID
     * @return N13000
     */
    public function setATHFußnotenartID($aTHFußnotenartID)
    {
        $this->ATH_Fußnotenart_ID = $aTHFußnotenartID;

        return $this;
    }

    /**
     * Get ATH_Fußnotenart_ID
     *
     * @return string 
     */
    public function getATHFußnotenartID()
    {
        return $this->ATH_Fußnotenart_ID;
    }

    /**
     * Set ATI_Beginndatum
     *
     * @param \DateTime $aTIBeginndatum
     * @return N13000
     */
    public function setATIBeginndatum($aTIBeginndatum)
    {
        $this->ATI_Beginndatum = $aTIBeginndatum;

        return $this;
    }

    /**
     * Get ATI_Beginndatum
     *
     * @return \DateTime 
     */
    public function getATIBeginndatum()
    {
        return $this->ATI_Beginndatum;
    }

    /**
     * Set ATJ_Endedatum
     *
     * @param \DateTime $aTJEndedatum
     * @return N13000
     */
    public function setATJEndedatum($aTJEndedatum)
    {
        $this->ATJ_Endedatum = $aTJEndedatum;

        return $this;
    }

    /**
     * Get ATJ_Endedatum
     *
     * @return \DateTime 
     */
    public function getATJEndedatum()
    {
        return $this->ATJ_Endedatum;
    }

    /**
     * Set ATK_Beschreibung_der_Fußnotenart_ID
     *
     * @param string $aTKBeschreibungDerFußnotenartID
     * @return N13000
     */
    public function setATKBeschreibungDerFußnotenartID($aTKBeschreibungDerFußnotenartID)
    {
        $this->ATK_Beschreibung_der_Fußnotenart_ID = $aTKBeschreibungDerFußnotenartID;

        return $this;
    }

    /**
     * Get ATK_Beschreibung_der_Fußnotenart_ID
     *
     * @return string 
     */
    public function getATKBeschreibungDerFußnotenartID()
    {
        return $this->ATK_Beschreibung_der_Fußnotenart_ID;
    }
}
