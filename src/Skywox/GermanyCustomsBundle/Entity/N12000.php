<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N12000
 */
class N12000
{
    /**
     * @var string
     */
    private $ATE_Dokumentart;

    /**
     * @var string
     */
    private $ATF_Beschreibung_der_Dokumentart;

    /**
     * @var string
     */
    private $ATG_Anzeigeflag;


    /**
     * Set ATE_Dokumentart
     *
     * @param string $aTEDokumentart
     * @return N12000
     */
    public function setATEDokumentart($aTEDokumentart)
    {
        $this->ATE_Dokumentart = $aTEDokumentart;

        return $this;
    }

    /**
     * Get ATE_Dokumentart
     *
     * @return string 
     */
    public function getATEDokumentart()
    {
        return $this->ATE_Dokumentart;
    }

    /**
     * Set ATF_Beschreibung_der_Dokumentart
     *
     * @param string $aTFBeschreibungDerDokumentart
     * @return N12000
     */
    public function setATFBeschreibungDerDokumentart($aTFBeschreibungDerDokumentart)
    {
        $this->ATF_Beschreibung_der_Dokumentart = $aTFBeschreibungDerDokumentart;

        return $this;
    }

    /**
     * Get ATF_Beschreibung_der_Dokumentart
     *
     * @return string 
     */
    public function getATFBeschreibungDerDokumentart()
    {
        return $this->ATF_Beschreibung_der_Dokumentart;
    }

    /**
     * Set ATG_Anzeigeflag
     *
     * @param string $aTGAnzeigeflag
     * @return N12000
     */
    public function setATGAnzeigeflag($aTGAnzeigeflag)
    {
        $this->ATG_Anzeigeflag = $aTGAnzeigeflag;

        return $this;
    }

    /**
     * Get ATG_Anzeigeflag
     *
     * @return string 
     */
    public function getATGAnzeigeflag()
    {
        return $this->ATG_Anzeigeflag;
    }
}
