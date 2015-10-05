<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N43010
 */
class N43010
{
    /**
     * @var string
     */
    private $BGE_TARIC_Bedingungscode;

    /**
     * @var string
     */
    private $BGF_Beschreibung_der_Anzeige_der_Maßnahmebedingung;


    /**
     * Set BGE_TARIC_Bedingungscode
     *
     * @param string $bGETARICBedingungscode
     * @return N43010
     */
    public function setBGETARICBedingungscode($bGETARICBedingungscode)
    {
        $this->BGE_TARIC_Bedingungscode = $bGETARICBedingungscode;

        return $this;
    }

    /**
     * Get BGE_TARIC_Bedingungscode
     *
     * @return string 
     */
    public function getBGETARICBedingungscode()
    {
        return $this->BGE_TARIC_Bedingungscode;
    }

    /**
     * Set BGF_Beschreibung_der_Anzeige_der_Maßnahmebedingung
     *
     * @param string $bGFBeschreibungDerAnzeigeDerMaßnahmebedingung
     * @return N43010
     */
    public function setBGFBeschreibungDerAnzeigeDerMaßnahmebedingung($bGFBeschreibungDerAnzeigeDerMaßnahmebedingung)
    {
        $this->BGF_Beschreibung_der_Anzeige_der_Maßnahmebedingung = $bGFBeschreibungDerAnzeigeDerMaßnahmebedingung;

        return $this;
    }

    /**
     * Get BGF_Beschreibung_der_Anzeige_der_Maßnahmebedingung
     *
     * @return string 
     */
    public function getBGFBeschreibungDerAnzeigeDerMaßnahmebedingung()
    {
        return $this->BGF_Beschreibung_der_Anzeige_der_Maßnahmebedingung;
    }
}
