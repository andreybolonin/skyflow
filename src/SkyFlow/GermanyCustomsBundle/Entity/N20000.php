<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N20000
 */
class N20000
{
    /**
     * @var string
     */
    private $ATW_Abgabenart;

    /**
     * @var string
     */
    private $ATX_Herkunft_der_Abgabenart;

    /**
     * @var \DateTime
     */
    private $ATY_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ATZ_Endedatum;

    /**
     * @var integer
     */
    private $AUA_Abkürzung_der_Maßnahmeart;

    /**
     * @var string
     */
    private $AUC_Beschreibung_der_Abgabenart;

    /**
     * @var string
     */
    private $AUD_Kurzform_der_Abgabenart;


    /**
     * Set ATW_Abgabenart
     *
     * @param string $aTWAbgabenart
     * @return N20000
     */
    public function setATWAbgabenart($aTWAbgabenart)
    {
        $this->ATW_Abgabenart = $aTWAbgabenart;

        return $this;
    }

    /**
     * Get ATW_Abgabenart
     *
     * @return string 
     */
    public function getATWAbgabenart()
    {
        return $this->ATW_Abgabenart;
    }

    /**
     * Set ATX_Herkunft_der_Abgabenart
     *
     * @param string $aTXHerkunftDerAbgabenart
     * @return N20000
     */
    public function setATXHerkunftDerAbgabenart($aTXHerkunftDerAbgabenart)
    {
        $this->ATX_Herkunft_der_Abgabenart = $aTXHerkunftDerAbgabenart;

        return $this;
    }

    /**
     * Get ATX_Herkunft_der_Abgabenart
     *
     * @return string 
     */
    public function getATXHerkunftDerAbgabenart()
    {
        return $this->ATX_Herkunft_der_Abgabenart;
    }

    /**
     * Set ATY_Beginndatum
     *
     * @param \DateTime $aTYBeginndatum
     * @return N20000
     */
    public function setATYBeginndatum($aTYBeginndatum)
    {
        $this->ATY_Beginndatum = $aTYBeginndatum;

        return $this;
    }

    /**
     * Get ATY_Beginndatum
     *
     * @return \DateTime 
     */
    public function getATYBeginndatum()
    {
        return $this->ATY_Beginndatum;
    }

    /**
     * Set ATZ_Endedatum
     *
     * @param \DateTime $aTZEndedatum
     * @return N20000
     */
    public function setATZEndedatum($aTZEndedatum)
    {
        $this->ATZ_Endedatum = $aTZEndedatum;

        return $this;
    }

    /**
     * Get ATZ_Endedatum
     *
     * @return \DateTime 
     */
    public function getATZEndedatum()
    {
        return $this->ATZ_Endedatum;
    }

    /**
     * Set AUA_Abkürzung_der_Maßnahmeart
     *
     * @param integer $aUAAbkürzungDerMaßnahmeart
     * @return N20000
     */
    public function setAUAAbkürzungDerMaßnahmeart($aUAAbkürzungDerMaßnahmeart)
    {
        $this->AUA_Abkürzung_der_Maßnahmeart = $aUAAbkürzungDerMaßnahmeart;

        return $this;
    }

    /**
     * Get AUA_Abkürzung_der_Maßnahmeart
     *
     * @return integer 
     */
    public function getAUAAbkürzungDerMaßnahmeart()
    {
        return $this->AUA_Abkürzung_der_Maßnahmeart;
    }

    /**
     * Set AUC_Beschreibung_der_Abgabenart
     *
     * @param string $aUCBeschreibungDerAbgabenart
     * @return N20000
     */
    public function setAUCBeschreibungDerAbgabenart($aUCBeschreibungDerAbgabenart)
    {
        $this->AUC_Beschreibung_der_Abgabenart = $aUCBeschreibungDerAbgabenart;

        return $this;
    }

    /**
     * Get AUC_Beschreibung_der_Abgabenart
     *
     * @return string 
     */
    public function getAUCBeschreibungDerAbgabenart()
    {
        return $this->AUC_Beschreibung_der_Abgabenart;
    }

    /**
     * Set AUD_Kurzform_der_Abgabenart
     *
     * @param string $aUDKurzformDerAbgabenart
     * @return N20000
     */
    public function setAUDKurzformDerAbgabenart($aUDKurzformDerAbgabenart)
    {
        $this->AUD_Kurzform_der_Abgabenart = $aUDKurzformDerAbgabenart;

        return $this;
    }

    /**
     * Get AUD_Kurzform_der_Abgabenart
     *
     * @return string 
     */
    public function getAUDKurzformDerAbgabenart()
    {
        return $this->AUD_Kurzform_der_Abgabenart;
    }
}
