<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T17000
 */
class T17000
{
    /**
     * @var string
     */
    private $ABK_Codeart;

    /**
     * @var string
     */
    private $ABL_Code_der_zu_veröffentlichenden_Daten;

    /**
     * @var \DateTime
     */
    private $ABM_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ABN_Endedatum;

    /**
     * @var string
     */
    private $ABO_Veröffentlichungscode;

    /**
     * @var string
     */
    private $ABP_Veröffentlichungsabkürzung;


    /**
     * Set ABK_Codeart
     *
     * @param string $aBKCodeart
     * @return T17000
     */
    public function setABKCodeart($aBKCodeart)
    {
        $this->ABK_Codeart = $aBKCodeart;

        return $this;
    }

    /**
     * Get ABK_Codeart
     *
     * @return string 
     */
    public function getABKCodeart()
    {
        return $this->ABK_Codeart;
    }

    /**
     * Set ABL_Code_der_zu_veröffentlichenden_Daten
     *
     * @param string $aBLCodeDerZuVeröffentlichendenDaten
     * @return T17000
     */
    public function setABLCodeDerZuVeröffentlichendenDaten($aBLCodeDerZuVeröffentlichendenDaten)
    {
        $this->ABL_Code_der_zu_veröffentlichenden_Daten = $aBLCodeDerZuVeröffentlichendenDaten;

        return $this;
    }

    /**
     * Get ABL_Code_der_zu_veröffentlichenden_Daten
     *
     * @return string 
     */
    public function getABLCodeDerZuVeröffentlichendenDaten()
    {
        return $this->ABL_Code_der_zu_veröffentlichenden_Daten;
    }

    /**
     * Set ABM_Beginndatum
     *
     * @param \DateTime $aBMBeginndatum
     * @return T17000
     */
    public function setABMBeginndatum($aBMBeginndatum)
    {
        $this->ABM_Beginndatum = $aBMBeginndatum;

        return $this;
    }

    /**
     * Get ABM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getABMBeginndatum()
    {
        return $this->ABM_Beginndatum;
    }

    /**
     * Set ABN_Endedatum
     *
     * @param \DateTime $aBNEndedatum
     * @return T17000
     */
    public function setABNEndedatum($aBNEndedatum)
    {
        $this->ABN_Endedatum = $aBNEndedatum;

        return $this;
    }

    /**
     * Get ABN_Endedatum
     *
     * @return \DateTime 
     */
    public function getABNEndedatum()
    {
        return $this->ABN_Endedatum;
    }

    /**
     * Set ABO_Veröffentlichungscode
     *
     * @param string $aBOVeröffentlichungscode
     * @return T17000
     */
    public function setABOVeröffentlichungscode($aBOVeröffentlichungscode)
    {
        $this->ABO_Veröffentlichungscode = $aBOVeröffentlichungscode;

        return $this;
    }

    /**
     * Get ABO_Veröffentlichungscode
     *
     * @return string 
     */
    public function getABOVeröffentlichungscode()
    {
        return $this->ABO_Veröffentlichungscode;
    }

    /**
     * Set ABP_Veröffentlichungsabkürzung
     *
     * @param string $aBPVeröffentlichungsabkürzung
     * @return T17000
     */
    public function setABPVeröffentlichungsabkürzung($aBPVeröffentlichungsabkürzung)
    {
        $this->ABP_Veröffentlichungsabkürzung = $aBPVeröffentlichungsabkürzung;

        return $this;
    }

    /**
     * Get ABP_Veröffentlichungsabkürzung
     *
     * @return string 
     */
    public function getABPVeröffentlichungsabkürzung()
    {
        return $this->ABP_Veröffentlichungsabkürzung;
    }
}
