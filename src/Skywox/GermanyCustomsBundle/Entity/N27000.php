<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N27000
 */
class N27000
{
    /**
     * @var string
     */
    private $AXK_Ordnungsnummer;

    /**
     * @var \DateTime
     */
    private $AXL_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AXM_Endedatum;

    /**
     * @var string
     */
    private $AXN_Schlüssel_der_Kontingentsart;

    /**
     * @var string
     */
    private $AXO_Schlüssel_der_Maßeinheit;

    /**
     * @var string
     */
    private $AXP_Qualifikator_der_Maßeinheit;

    /**
     * @var string
     */
    private $AXQ_Nationale_Abrechnungsnummer_des_Kontingents;

    /**
     * @var string
     */
    private $AXR_Kennzahl_einer_eventuellen_ZZK_Meldung;


    /**
     * Set AXK_Ordnungsnummer
     *
     * @param string $aXKOrdnungsnummer
     * @return N27000
     */
    public function setAXKOrdnungsnummer($aXKOrdnungsnummer)
    {
        $this->AXK_Ordnungsnummer = $aXKOrdnungsnummer;

        return $this;
    }

    /**
     * Get AXK_Ordnungsnummer
     *
     * @return string 
     */
    public function getAXKOrdnungsnummer()
    {
        return $this->AXK_Ordnungsnummer;
    }

    /**
     * Set AXL_Beginndatum
     *
     * @param \DateTime $aXLBeginndatum
     * @return N27000
     */
    public function setAXLBeginndatum($aXLBeginndatum)
    {
        $this->AXL_Beginndatum = $aXLBeginndatum;

        return $this;
    }

    /**
     * Get AXL_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAXLBeginndatum()
    {
        return $this->AXL_Beginndatum;
    }

    /**
     * Set AXM_Endedatum
     *
     * @param \DateTime $aXMEndedatum
     * @return N27000
     */
    public function setAXMEndedatum($aXMEndedatum)
    {
        $this->AXM_Endedatum = $aXMEndedatum;

        return $this;
    }

    /**
     * Get AXM_Endedatum
     *
     * @return \DateTime 
     */
    public function getAXMEndedatum()
    {
        return $this->AXM_Endedatum;
    }

    /**
     * Set AXN_Schlüssel_der_Kontingentsart
     *
     * @param string $aXNSchlüsselDerKontingentsart
     * @return N27000
     */
    public function setAXNSchlüsselDerKontingentsart($aXNSchlüsselDerKontingentsart)
    {
        $this->AXN_Schlüssel_der_Kontingentsart = $aXNSchlüsselDerKontingentsart;

        return $this;
    }

    /**
     * Get AXN_Schlüssel_der_Kontingentsart
     *
     * @return string 
     */
    public function getAXNSchlüsselDerKontingentsart()
    {
        return $this->AXN_Schlüssel_der_Kontingentsart;
    }

    /**
     * Set AXO_Schlüssel_der_Maßeinheit
     *
     * @param string $aXOSchlüsselDerMaßeinheit
     * @return N27000
     */
    public function setAXOSchlüsselDerMaßeinheit($aXOSchlüsselDerMaßeinheit)
    {
        $this->AXO_Schlüssel_der_Maßeinheit = $aXOSchlüsselDerMaßeinheit;

        return $this;
    }

    /**
     * Get AXO_Schlüssel_der_Maßeinheit
     *
     * @return string 
     */
    public function getAXOSchlüsselDerMaßeinheit()
    {
        return $this->AXO_Schlüssel_der_Maßeinheit;
    }

    /**
     * Set AXP_Qualifikator_der_Maßeinheit
     *
     * @param string $aXPQualifikatorDerMaßeinheit
     * @return N27000
     */
    public function setAXPQualifikatorDerMaßeinheit($aXPQualifikatorDerMaßeinheit)
    {
        $this->AXP_Qualifikator_der_Maßeinheit = $aXPQualifikatorDerMaßeinheit;

        return $this;
    }

    /**
     * Get AXP_Qualifikator_der_Maßeinheit
     *
     * @return string 
     */
    public function getAXPQualifikatorDerMaßeinheit()
    {
        return $this->AXP_Qualifikator_der_Maßeinheit;
    }

    /**
     * Set AXQ_Nationale_Abrechnungsnummer_des_Kontingents
     *
     * @param string $aXQNationaleAbrechnungsnummerDesKontingents
     * @return N27000
     */
    public function setAXQNationaleAbrechnungsnummerDesKontingents($aXQNationaleAbrechnungsnummerDesKontingents)
    {
        $this->AXQ_Nationale_Abrechnungsnummer_des_Kontingents = $aXQNationaleAbrechnungsnummerDesKontingents;

        return $this;
    }

    /**
     * Get AXQ_Nationale_Abrechnungsnummer_des_Kontingents
     *
     * @return string 
     */
    public function getAXQNationaleAbrechnungsnummerDesKontingents()
    {
        return $this->AXQ_Nationale_Abrechnungsnummer_des_Kontingents;
    }

    /**
     * Set AXR_Kennzahl_einer_eventuellen_ZZK_Meldung
     *
     * @param string $aXRKennzahlEinerEventuellenZZKMeldung
     * @return N27000
     */
    public function setAXRKennzahlEinerEventuellenZZKMeldung($aXRKennzahlEinerEventuellenZZKMeldung)
    {
        $this->AXR_Kennzahl_einer_eventuellen_ZZK_Meldung = $aXRKennzahlEinerEventuellenZZKMeldung;

        return $this;
    }

    /**
     * Get AXR_Kennzahl_einer_eventuellen_ZZK_Meldung
     *
     * @return string 
     */
    public function getAXRKennzahlEinerEventuellenZZKMeldung()
    {
        return $this->AXR_Kennzahl_einer_eventuellen_ZZK_Meldung;
    }
}
