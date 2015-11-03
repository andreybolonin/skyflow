<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T10000
 */
class T10000
{
    /**
     * @var string
     */
    private $AAC_Fußnotenart_ID;

    /**
     * @var \DateTime
     */
    private $AAD_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AAE_Endedatum;

    /**
     * @var string
     */
    private $AAF_Anwendungscode_der_Fußnotenart_ID;

    /**
     * @var string
     */
    private $AAG_Beschreibung_der_Fußnotenart_ID;


    /**
     * Set AAC_Fußnotenart_ID
     *
     * @param string $aACFußnotenartID
     * @return T10000
     */
    public function setAACFußnotenartID($aACFußnotenartID)
    {
        $this->AAC_Fußnotenart_ID = $aACFußnotenartID;

        return $this;
    }

    /**
     * Get AAC_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAACFußnotenartID()
    {
        return $this->AAC_Fußnotenart_ID;
    }

    /**
     * Set AAD_Beginndatum
     *
     * @param \DateTime $aADBeginndatum
     * @return T10000
     */
    public function setAADBeginndatum($aADBeginndatum)
    {
        $this->AAD_Beginndatum = $aADBeginndatum;

        return $this;
    }

    /**
     * Get AAD_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAADBeginndatum()
    {
        return $this->AAD_Beginndatum;
    }

    /**
     * Set AAE_Endedatum
     *
     * @param \DateTime $aAEEndedatum
     * @return T10000
     */
    public function setAAEEndedatum($aAEEndedatum)
    {
        $this->AAE_Endedatum = $aAEEndedatum;

        return $this;
    }

    /**
     * Get AAE_Endedatum
     *
     * @return \DateTime 
     */
    public function getAAEEndedatum()
    {
        return $this->AAE_Endedatum;
    }

    /**
     * Set AAF_Anwendungscode_der_Fußnotenart_ID
     *
     * @param string $aAFAnwendungscodeDerFußnotenartID
     * @return T10000
     */
    public function setAAFAnwendungscodeDerFußnotenartID($aAFAnwendungscodeDerFußnotenartID)
    {
        $this->AAF_Anwendungscode_der_Fußnotenart_ID = $aAFAnwendungscodeDerFußnotenartID;

        return $this;
    }

    /**
     * Get AAF_Anwendungscode_der_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAAFAnwendungscodeDerFußnotenartID()
    {
        return $this->AAF_Anwendungscode_der_Fußnotenart_ID;
    }

    /**
     * Set AAG_Beschreibung_der_Fußnotenart_ID
     *
     * @param string $aAGBeschreibungDerFußnotenartID
     * @return T10000
     */
    public function setAAGBeschreibungDerFußnotenartID($aAGBeschreibungDerFußnotenartID)
    {
        $this->AAG_Beschreibung_der_Fußnotenart_ID = $aAGBeschreibungDerFußnotenartID;

        return $this;
    }

    /**
     * Get AAG_Beschreibung_der_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAAGBeschreibungDerFußnotenartID()
    {
        return $this->AAG_Beschreibung_der_Fußnotenart_ID;
    }
}
