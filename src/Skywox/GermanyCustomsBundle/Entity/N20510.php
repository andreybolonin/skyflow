<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N20510
 */
class N20510
{
    /**
     * @var string
     */
    private $AUO_Art_der_Bescheinigung;

    /**
     * @var string
     */
    private $AUP_Bescheinigung;

    /**
     * @var string
     */
    private $AUQ_Bescheinigungsbereich;

    /**
     * @var \DateTime
     */
    private $AUR_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AUS_Endedatum;


    /**
     * Set AUO_Art_der_Bescheinigung
     *
     * @param string $aUOArtDerBescheinigung
     * @return N20510
     */
    public function setAUOArtDerBescheinigung($aUOArtDerBescheinigung)
    {
        $this->AUO_Art_der_Bescheinigung = $aUOArtDerBescheinigung;

        return $this;
    }

    /**
     * Get AUO_Art_der_Bescheinigung
     *
     * @return string 
     */
    public function getAUOArtDerBescheinigung()
    {
        return $this->AUO_Art_der_Bescheinigung;
    }

    /**
     * Set AUP_Bescheinigung
     *
     * @param string $aUPBescheinigung
     * @return N20510
     */
    public function setAUPBescheinigung($aUPBescheinigung)
    {
        $this->AUP_Bescheinigung = $aUPBescheinigung;

        return $this;
    }

    /**
     * Get AUP_Bescheinigung
     *
     * @return string 
     */
    public function getAUPBescheinigung()
    {
        return $this->AUP_Bescheinigung;
    }

    /**
     * Set AUQ_Bescheinigungsbereich
     *
     * @param string $aUQBescheinigungsbereich
     * @return N20510
     */
    public function setAUQBescheinigungsbereich($aUQBescheinigungsbereich)
    {
        $this->AUQ_Bescheinigungsbereich = $aUQBescheinigungsbereich;

        return $this;
    }

    /**
     * Get AUQ_Bescheinigungsbereich
     *
     * @return string 
     */
    public function getAUQBescheinigungsbereich()
    {
        return $this->AUQ_Bescheinigungsbereich;
    }

    /**
     * Set AUR_Beginndatum
     *
     * @param \DateTime $aURBeginndatum
     * @return N20510
     */
    public function setAURBeginndatum($aURBeginndatum)
    {
        $this->AUR_Beginndatum = $aURBeginndatum;

        return $this;
    }

    /**
     * Get AUR_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAURBeginndatum()
    {
        return $this->AUR_Beginndatum;
    }

    /**
     * Set AUS_Endedatum
     *
     * @param \DateTime $aUSEndedatum
     * @return N20510
     */
    public function setAUSEndedatum($aUSEndedatum)
    {
        $this->AUS_Endedatum = $aUSEndedatum;

        return $this;
    }

    /**
     * Get AUS_Endedatum
     *
     * @return \DateTime 
     */
    public function getAUSEndedatum()
    {
        return $this->AUS_Endedatum;
    }
}
