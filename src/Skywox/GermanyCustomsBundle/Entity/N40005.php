<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N40005
 */
class N40005
{
    /**
     * @var integer
     */
    private $BCR_SID_der_Bedingungskomponente;

    /**
     * @var integer
     */
    private $BCS_SID_der_nationalen_Maßnahme;

    /**
     * @var string
     */
    private $BCT_Bedingung;

    /**
     * @var string
     */
    private $BCU_Sequentielle_Nummer_der_Bedingung;

    /**
     * @var string
     */
    private $BCV_Abgabenbetrag_der_Bedingung;

    /**
     * @var string
     */
    private $BCW_Währungseinheit_der_Bedingung;

    /**
     * @var string
     */
    private $BCX_Maßeinheit_der_Bedingung;

    /**
     * @var string
     */
    private $BCY_Maßeinheitsqualifikator_der_Bedingung;

    /**
     * @var string
     */
    private $BCZ_Maßnahmeaktion;

    /**
     * @var string
     */
    private $BDA_Bescheinigungsart;

    /**
     * @var string
     */
    private $BDB_Schlüssel_der_Bescheinigung;


    /**
     * Set BCR_SID_der_Bedingungskomponente
     *
     * @param integer $bCRSIDDerBedingungskomponente
     * @return N40005
     */
    public function setBCRSIDDerBedingungskomponente($bCRSIDDerBedingungskomponente)
    {
        $this->BCR_SID_der_Bedingungskomponente = $bCRSIDDerBedingungskomponente;

        return $this;
    }

    /**
     * Get BCR_SID_der_Bedingungskomponente
     *
     * @return integer 
     */
    public function getBCRSIDDerBedingungskomponente()
    {
        return $this->BCR_SID_der_Bedingungskomponente;
    }

    /**
     * Set BCS_SID_der_nationalen_Maßnahme
     *
     * @param integer $bCSSIDDerNationalenMaßnahme
     * @return N40005
     */
    public function setBCSSIDDerNationalenMaßnahme($bCSSIDDerNationalenMaßnahme)
    {
        $this->BCS_SID_der_nationalen_Maßnahme = $bCSSIDDerNationalenMaßnahme;

        return $this;
    }

    /**
     * Get BCS_SID_der_nationalen_Maßnahme
     *
     * @return integer 
     */
    public function getBCSSIDDerNationalenMaßnahme()
    {
        return $this->BCS_SID_der_nationalen_Maßnahme;
    }

    /**
     * Set BCT_Bedingung
     *
     * @param string $bCTBedingung
     * @return N40005
     */
    public function setBCTBedingung($bCTBedingung)
    {
        $this->BCT_Bedingung = $bCTBedingung;

        return $this;
    }

    /**
     * Get BCT_Bedingung
     *
     * @return string 
     */
    public function getBCTBedingung()
    {
        return $this->BCT_Bedingung;
    }

    /**
     * Set BCU_Sequentielle_Nummer_der_Bedingung
     *
     * @param string $bCUSequentielleNummerDerBedingung
     * @return N40005
     */
    public function setBCUSequentielleNummerDerBedingung($bCUSequentielleNummerDerBedingung)
    {
        $this->BCU_Sequentielle_Nummer_der_Bedingung = $bCUSequentielleNummerDerBedingung;

        return $this;
    }

    /**
     * Get BCU_Sequentielle_Nummer_der_Bedingung
     *
     * @return string 
     */
    public function getBCUSequentielleNummerDerBedingung()
    {
        return $this->BCU_Sequentielle_Nummer_der_Bedingung;
    }

    /**
     * Set BCV_Abgabenbetrag_der_Bedingung
     *
     * @param string $bCVAbgabenbetragDerBedingung
     * @return N40005
     */
    public function setBCVAbgabenbetragDerBedingung($bCVAbgabenbetragDerBedingung)
    {
        $this->BCV_Abgabenbetrag_der_Bedingung = $bCVAbgabenbetragDerBedingung;

        return $this;
    }

    /**
     * Get BCV_Abgabenbetrag_der_Bedingung
     *
     * @return string 
     */
    public function getBCVAbgabenbetragDerBedingung()
    {
        return $this->BCV_Abgabenbetrag_der_Bedingung;
    }

    /**
     * Set BCW_Währungseinheit_der_Bedingung
     *
     * @param string $bCWWährungseinheitDerBedingung
     * @return N40005
     */
    public function setBCWWährungseinheitDerBedingung($bCWWährungseinheitDerBedingung)
    {
        $this->BCW_Währungseinheit_der_Bedingung = $bCWWährungseinheitDerBedingung;

        return $this;
    }

    /**
     * Get BCW_Währungseinheit_der_Bedingung
     *
     * @return string 
     */
    public function getBCWWährungseinheitDerBedingung()
    {
        return $this->BCW_Währungseinheit_der_Bedingung;
    }

    /**
     * Set BCX_Maßeinheit_der_Bedingung
     *
     * @param string $bCXMaßeinheitDerBedingung
     * @return N40005
     */
    public function setBCXMaßeinheitDerBedingung($bCXMaßeinheitDerBedingung)
    {
        $this->BCX_Maßeinheit_der_Bedingung = $bCXMaßeinheitDerBedingung;

        return $this;
    }

    /**
     * Get BCX_Maßeinheit_der_Bedingung
     *
     * @return string 
     */
    public function getBCXMaßeinheitDerBedingung()
    {
        return $this->BCX_Maßeinheit_der_Bedingung;
    }

    /**
     * Set BCY_Maßeinheitsqualifikator_der_Bedingung
     *
     * @param string $bCYMaßeinheitsqualifikatorDerBedingung
     * @return N40005
     */
    public function setBCYMaßeinheitsqualifikatorDerBedingung($bCYMaßeinheitsqualifikatorDerBedingung)
    {
        $this->BCY_Maßeinheitsqualifikator_der_Bedingung = $bCYMaßeinheitsqualifikatorDerBedingung;

        return $this;
    }

    /**
     * Get BCY_Maßeinheitsqualifikator_der_Bedingung
     *
     * @return string 
     */
    public function getBCYMaßeinheitsqualifikatorDerBedingung()
    {
        return $this->BCY_Maßeinheitsqualifikator_der_Bedingung;
    }

    /**
     * Set BCZ_Maßnahmeaktion
     *
     * @param string $bCZMaßnahmeaktion
     * @return N40005
     */
    public function setBCZMaßnahmeaktion($bCZMaßnahmeaktion)
    {
        $this->BCZ_Maßnahmeaktion = $bCZMaßnahmeaktion;

        return $this;
    }

    /**
     * Get BCZ_Maßnahmeaktion
     *
     * @return string 
     */
    public function getBCZMaßnahmeaktion()
    {
        return $this->BCZ_Maßnahmeaktion;
    }

    /**
     * Set BDA_Bescheinigungsart
     *
     * @param string $bDABescheinigungsart
     * @return N40005
     */
    public function setBDABescheinigungsart($bDABescheinigungsart)
    {
        $this->BDA_Bescheinigungsart = $bDABescheinigungsart;

        return $this;
    }

    /**
     * Get BDA_Bescheinigungsart
     *
     * @return string 
     */
    public function getBDABescheinigungsart()
    {
        return $this->BDA_Bescheinigungsart;
    }

    /**
     * Set BDB_Schlüssel_der_Bescheinigung
     *
     * @param string $bDBSchlüsselDerBescheinigung
     * @return N40005
     */
    public function setBDBSchlüsselDerBescheinigung($bDBSchlüsselDerBescheinigung)
    {
        $this->BDB_Schlüssel_der_Bescheinigung = $bDBSchlüsselDerBescheinigung;

        return $this;
    }

    /**
     * Get BDB_Schlüssel_der_Bescheinigung
     *
     * @return string 
     */
    public function getBDBSchlüsselDerBescheinigung()
    {
        return $this->BDB_Schlüssel_der_Bescheinigung;
    }
}
