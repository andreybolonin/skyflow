<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T30005
 */
class T30005
{
    /**
     * @var string
     */
    private $AIQ_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu;

    /**
     * @var string
     */
    private $AIR_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung;

    /**
     * @var string
     */
    private $AIS_Funktion_der_ausgesetzten_Verordnung;

    /**
     * @var string
     */
    private $AIT_ID_der_ausgesetzten_Verordnung;


    /**
     * Set AIQ_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu
     *
     * @param string $aIQFunktionDerVollständigenZeitweiligenAussetzungsverordnu
     * @return T30005
     */
    public function setAIQFunktionDerVollständigenZeitweiligenAussetzungsverordnu($aIQFunktionDerVollständigenZeitweiligenAussetzungsverordnu)
    {
        $this->AIQ_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu = $aIQFunktionDerVollständigenZeitweiligenAussetzungsverordnu;

        return $this;
    }

    /**
     * Get AIQ_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu
     *
     * @return string 
     */
    public function getAIQFunktionDerVollständigenZeitweiligenAussetzungsverordnu()
    {
        return $this->AIQ_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu;
    }

    /**
     * Set AIR_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung
     *
     * @param string $aIRIDDerVollständigenZeitweiligenAussetzungsverordnung
     * @return T30005
     */
    public function setAIRIDDerVollständigenZeitweiligenAussetzungsverordnung($aIRIDDerVollständigenZeitweiligenAussetzungsverordnung)
    {
        $this->AIR_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung = $aIRIDDerVollständigenZeitweiligenAussetzungsverordnung;

        return $this;
    }

    /**
     * Get AIR_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung
     *
     * @return string 
     */
    public function getAIRIDDerVollständigenZeitweiligenAussetzungsverordnung()
    {
        return $this->AIR_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung;
    }

    /**
     * Set AIS_Funktion_der_ausgesetzten_Verordnung
     *
     * @param string $aISFunktionDerAusgesetztenVerordnung
     * @return T30005
     */
    public function setAISFunktionDerAusgesetztenVerordnung($aISFunktionDerAusgesetztenVerordnung)
    {
        $this->AIS_Funktion_der_ausgesetzten_Verordnung = $aISFunktionDerAusgesetztenVerordnung;

        return $this;
    }

    /**
     * Get AIS_Funktion_der_ausgesetzten_Verordnung
     *
     * @return string 
     */
    public function getAISFunktionDerAusgesetztenVerordnung()
    {
        return $this->AIS_Funktion_der_ausgesetzten_Verordnung;
    }

    /**
     * Set AIT_ID_der_ausgesetzten_Verordnung
     *
     * @param string $aITIDDerAusgesetztenVerordnung
     * @return T30005
     */
    public function setAITIDDerAusgesetztenVerordnung($aITIDDerAusgesetztenVerordnung)
    {
        $this->AIT_ID_der_ausgesetzten_Verordnung = $aITIDDerAusgesetztenVerordnung;

        return $this;
    }

    /**
     * Get AIT_ID_der_ausgesetzten_Verordnung
     *
     * @return string 
     */
    public function getAITIDDerAusgesetztenVerordnung()
    {
        return $this->AIT_ID_der_ausgesetzten_Verordnung;
    }
}
