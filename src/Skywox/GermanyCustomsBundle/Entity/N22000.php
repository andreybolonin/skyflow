<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N22000
 */
class N22000
{
    /**
     * @var string
     */
    private $AVF_Zollaussetzung;

    /**
     * @var \DateTime
     */
    private $AVG_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AVH_Endedatum;

    /**
     * @var string
     */
    private $AVI_Beschreibung_der_Zollaussetzung;


    /**
     * Set AVF_Zollaussetzung
     *
     * @param string $aVFZollaussetzung
     * @return N22000
     */
    public function setAVFZollaussetzung($aVFZollaussetzung)
    {
        $this->AVF_Zollaussetzung = $aVFZollaussetzung;

        return $this;
    }

    /**
     * Get AVF_Zollaussetzung
     *
     * @return string 
     */
    public function getAVFZollaussetzung()
    {
        return $this->AVF_Zollaussetzung;
    }

    /**
     * Set AVG_Beginndatum
     *
     * @param \DateTime $aVGBeginndatum
     * @return N22000
     */
    public function setAVGBeginndatum($aVGBeginndatum)
    {
        $this->AVG_Beginndatum = $aVGBeginndatum;

        return $this;
    }

    /**
     * Get AVG_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAVGBeginndatum()
    {
        return $this->AVG_Beginndatum;
    }

    /**
     * Set AVH_Endedatum
     *
     * @param \DateTime $aVHEndedatum
     * @return N22000
     */
    public function setAVHEndedatum($aVHEndedatum)
    {
        $this->AVH_Endedatum = $aVHEndedatum;

        return $this;
    }

    /**
     * Get AVH_Endedatum
     *
     * @return \DateTime 
     */
    public function getAVHEndedatum()
    {
        return $this->AVH_Endedatum;
    }

    /**
     * Set AVI_Beschreibung_der_Zollaussetzung
     *
     * @param string $aVIBeschreibungDerZollaussetzung
     * @return N22000
     */
    public function setAVIBeschreibungDerZollaussetzung($aVIBeschreibungDerZollaussetzung)
    {
        $this->AVI_Beschreibung_der_Zollaussetzung = $aVIBeschreibungDerZollaussetzung;

        return $this;
    }

    /**
     * Get AVI_Beschreibung_der_Zollaussetzung
     *
     * @return string 
     */
    public function getAVIBeschreibungDerZollaussetzung()
    {
        return $this->AVI_Beschreibung_der_Zollaussetzung;
    }
}
