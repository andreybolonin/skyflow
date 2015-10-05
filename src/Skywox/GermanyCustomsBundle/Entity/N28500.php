<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N28500
 */
class N28500
{
    /**
     * @var string
     */
    private $AZB_Schlüssel_der_Maßeinheit;

    /**
     * @var string
     */
    private $AZC_Herkunft_der_Maßeinheit_TARIC_national;

    /**
     * @var \DateTime
     */
    private $AZD_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AZE_Endedatum;

    /**
     * @var string
     */
    private $AZF_Bezeichnung_der_Maßeinheit_entsprechend_der_Darstellung_im_;

    /**
     * @var string
     */
    private $AZG_Beschreibung_der_Maßeinheit;


    /**
     * Set AZB_Schlüssel_der_Maßeinheit
     *
     * @param string $aZBSchlüsselDerMaßeinheit
     * @return N28500
     */
    public function setAZBSchlüsselDerMaßeinheit($aZBSchlüsselDerMaßeinheit)
    {
        $this->AZB_Schlüssel_der_Maßeinheit = $aZBSchlüsselDerMaßeinheit;

        return $this;
    }

    /**
     * Get AZB_Schlüssel_der_Maßeinheit
     *
     * @return string 
     */
    public function getAZBSchlüsselDerMaßeinheit()
    {
        return $this->AZB_Schlüssel_der_Maßeinheit;
    }

    /**
     * Set AZC_Herkunft_der_Maßeinheit_TARIC_national
     *
     * @param string $aZCHerkunftDerMaßeinheitTARICNational
     * @return N28500
     */
    public function setAZCHerkunftDerMaßeinheitTARICNational($aZCHerkunftDerMaßeinheitTARICNational)
    {
        $this->AZC_Herkunft_der_Maßeinheit_TARIC_national = $aZCHerkunftDerMaßeinheitTARICNational;

        return $this;
    }

    /**
     * Get AZC_Herkunft_der_Maßeinheit_TARIC_national
     *
     * @return string 
     */
    public function getAZCHerkunftDerMaßeinheitTARICNational()
    {
        return $this->AZC_Herkunft_der_Maßeinheit_TARIC_national;
    }

    /**
     * Set AZD_Beginndatum
     *
     * @param \DateTime $aZDBeginndatum
     * @return N28500
     */
    public function setAZDBeginndatum($aZDBeginndatum)
    {
        $this->AZD_Beginndatum = $aZDBeginndatum;

        return $this;
    }

    /**
     * Get AZD_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAZDBeginndatum()
    {
        return $this->AZD_Beginndatum;
    }

    /**
     * Set AZE_Endedatum
     *
     * @param \DateTime $aZEEndedatum
     * @return N28500
     */
    public function setAZEEndedatum($aZEEndedatum)
    {
        $this->AZE_Endedatum = $aZEEndedatum;

        return $this;
    }

    /**
     * Get AZE_Endedatum
     *
     * @return \DateTime 
     */
    public function getAZEEndedatum()
    {
        return $this->AZE_Endedatum;
    }

    /**
     * Set AZF_Bezeichnung_der_Maßeinheit_entsprechend_der_Darstellung_im_
     *
     * @param string $aZFBezeichnungDerMaßeinheitEntsprechendDerDarstellungIm
     * @return N28500
     */
    public function setAZFBezeichnungDerMaßeinheitEntsprechendDerDarstellungIm($aZFBezeichnungDerMaßeinheitEntsprechendDerDarstellungIm)
    {
        $this->AZF_Bezeichnung_der_Maßeinheit_entsprechend_der_Darstellung_im_ = $aZFBezeichnungDerMaßeinheitEntsprechendDerDarstellungIm;

        return $this;
    }

    /**
     * Get AZF_Bezeichnung_der_Maßeinheit_entsprechend_der_Darstellung_im_
     *
     * @return string 
     */
    public function getAZFBezeichnungDerMaßeinheitEntsprechendDerDarstellungIm()
    {
        return $this->AZF_Bezeichnung_der_Maßeinheit_entsprechend_der_Darstellung_im_;
    }

    /**
     * Set AZG_Beschreibung_der_Maßeinheit
     *
     * @param string $aZGBeschreibungDerMaßeinheit
     * @return N28500
     */
    public function setAZGBeschreibungDerMaßeinheit($aZGBeschreibungDerMaßeinheit)
    {
        $this->AZG_Beschreibung_der_Maßeinheit = $aZGBeschreibungDerMaßeinheit;

        return $this;
    }

    /**
     * Get AZG_Beschreibung_der_Maßeinheit
     *
     * @return string 
     */
    public function getAZGBeschreibungDerMaßeinheit()
    {
        return $this->AZG_Beschreibung_der_Maßeinheit;
    }
}
