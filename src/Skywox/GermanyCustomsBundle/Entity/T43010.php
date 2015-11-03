<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43010
 */
class T43010
{
    /**
     * @var integer
     */
    private $ARN_SID_der_Maßnahmebedingung;

    /**
     * @var integer
     */
    private $ARO_SID_der_Maßnahme;

    /**
     * @var string
     */
    private $ARP_Bedingungscode;

    /**
     * @var string
     */
    private $ARQ_Sequentielle_Nummer_der_Bedingung;

    /**
     * @var string
     */
    private $ARR_Bedingung_Zollbetrag;

    /**
     * @var string
     */
    private $ARS_Bedingung_Währungseinheitscode;

    /**
     * @var string
     */
    private $ART_Bedingung_Maßeinheitscode;

    /**
     * @var string
     */
    private $ARU_Bedingung_Code_des_Maßeinheitsqualifikators;

    /**
     * @var string
     */
    private $ARV_Aktionscode;

    /**
     * @var string
     */
    private $ARW_Code_der_Bescheinigungsart;

    /**
     * @var string
     */
    private $ARX_Bescheinigungsreferenznummer;


    /**
     * Set ARN_SID_der_Maßnahmebedingung
     *
     * @param integer $aRNSIDDerMaßnahmebedingung
     * @return T43010
     */
    public function setARNSIDDerMaßnahmebedingung($aRNSIDDerMaßnahmebedingung)
    {
        $this->ARN_SID_der_Maßnahmebedingung = $aRNSIDDerMaßnahmebedingung;

        return $this;
    }

    /**
     * Get ARN_SID_der_Maßnahmebedingung
     *
     * @return integer 
     */
    public function getARNSIDDerMaßnahmebedingung()
    {
        return $this->ARN_SID_der_Maßnahmebedingung;
    }

    /**
     * Set ARO_SID_der_Maßnahme
     *
     * @param integer $aROSIDDerMaßnahme
     * @return T43010
     */
    public function setAROSIDDerMaßnahme($aROSIDDerMaßnahme)
    {
        $this->ARO_SID_der_Maßnahme = $aROSIDDerMaßnahme;

        return $this;
    }

    /**
     * Get ARO_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getAROSIDDerMaßnahme()
    {
        return $this->ARO_SID_der_Maßnahme;
    }

    /**
     * Set ARP_Bedingungscode
     *
     * @param string $aRPBedingungscode
     * @return T43010
     */
    public function setARPBedingungscode($aRPBedingungscode)
    {
        $this->ARP_Bedingungscode = $aRPBedingungscode;

        return $this;
    }

    /**
     * Get ARP_Bedingungscode
     *
     * @return string 
     */
    public function getARPBedingungscode()
    {
        return $this->ARP_Bedingungscode;
    }

    /**
     * Set ARQ_Sequentielle_Nummer_der_Bedingung
     *
     * @param string $aRQSequentielleNummerDerBedingung
     * @return T43010
     */
    public function setARQSequentielleNummerDerBedingung($aRQSequentielleNummerDerBedingung)
    {
        $this->ARQ_Sequentielle_Nummer_der_Bedingung = $aRQSequentielleNummerDerBedingung;

        return $this;
    }

    /**
     * Get ARQ_Sequentielle_Nummer_der_Bedingung
     *
     * @return string 
     */
    public function getARQSequentielleNummerDerBedingung()
    {
        return $this->ARQ_Sequentielle_Nummer_der_Bedingung;
    }

    /**
     * Set ARR_Bedingung_Zollbetrag
     *
     * @param string $aRRBedingungZollbetrag
     * @return T43010
     */
    public function setARRBedingungZollbetrag($aRRBedingungZollbetrag)
    {
        $this->ARR_Bedingung_Zollbetrag = $aRRBedingungZollbetrag;

        return $this;
    }

    /**
     * Get ARR_Bedingung_Zollbetrag
     *
     * @return string 
     */
    public function getARRBedingungZollbetrag()
    {
        return $this->ARR_Bedingung_Zollbetrag;
    }

    /**
     * Set ARS_Bedingung_Währungseinheitscode
     *
     * @param string $aRSBedingungWährungseinheitscode
     * @return T43010
     */
    public function setARSBedingungWährungseinheitscode($aRSBedingungWährungseinheitscode)
    {
        $this->ARS_Bedingung_Währungseinheitscode = $aRSBedingungWährungseinheitscode;

        return $this;
    }

    /**
     * Get ARS_Bedingung_Währungseinheitscode
     *
     * @return string 
     */
    public function getARSBedingungWährungseinheitscode()
    {
        return $this->ARS_Bedingung_Währungseinheitscode;
    }

    /**
     * Set ART_Bedingung_Maßeinheitscode
     *
     * @param string $aRTBedingungMaßeinheitscode
     * @return T43010
     */
    public function setARTBedingungMaßeinheitscode($aRTBedingungMaßeinheitscode)
    {
        $this->ART_Bedingung_Maßeinheitscode = $aRTBedingungMaßeinheitscode;

        return $this;
    }

    /**
     * Get ART_Bedingung_Maßeinheitscode
     *
     * @return string 
     */
    public function getARTBedingungMaßeinheitscode()
    {
        return $this->ART_Bedingung_Maßeinheitscode;
    }

    /**
     * Set ARU_Bedingung_Code_des_Maßeinheitsqualifikators
     *
     * @param string $aRUBedingungCodeDesMaßeinheitsqualifikators
     * @return T43010
     */
    public function setARUBedingungCodeDesMaßeinheitsqualifikators($aRUBedingungCodeDesMaßeinheitsqualifikators)
    {
        $this->ARU_Bedingung_Code_des_Maßeinheitsqualifikators = $aRUBedingungCodeDesMaßeinheitsqualifikators;

        return $this;
    }

    /**
     * Get ARU_Bedingung_Code_des_Maßeinheitsqualifikators
     *
     * @return string 
     */
    public function getARUBedingungCodeDesMaßeinheitsqualifikators()
    {
        return $this->ARU_Bedingung_Code_des_Maßeinheitsqualifikators;
    }

    /**
     * Set ARV_Aktionscode
     *
     * @param string $aRVAktionscode
     * @return T43010
     */
    public function setARVAktionscode($aRVAktionscode)
    {
        $this->ARV_Aktionscode = $aRVAktionscode;

        return $this;
    }

    /**
     * Get ARV_Aktionscode
     *
     * @return string 
     */
    public function getARVAktionscode()
    {
        return $this->ARV_Aktionscode;
    }

    /**
     * Set ARW_Code_der_Bescheinigungsart
     *
     * @param string $aRWCodeDerBescheinigungsart
     * @return T43010
     */
    public function setARWCodeDerBescheinigungsart($aRWCodeDerBescheinigungsart)
    {
        $this->ARW_Code_der_Bescheinigungsart = $aRWCodeDerBescheinigungsart;

        return $this;
    }

    /**
     * Get ARW_Code_der_Bescheinigungsart
     *
     * @return string 
     */
    public function getARWCodeDerBescheinigungsart()
    {
        return $this->ARW_Code_der_Bescheinigungsart;
    }

    /**
     * Set ARX_Bescheinigungsreferenznummer
     *
     * @param string $aRXBescheinigungsreferenznummer
     * @return T43010
     */
    public function setARXBescheinigungsreferenznummer($aRXBescheinigungsreferenznummer)
    {
        $this->ARX_Bescheinigungsreferenznummer = $aRXBescheinigungsreferenznummer;

        return $this;
    }

    /**
     * Get ARX_Bescheinigungsreferenznummer
     *
     * @return string 
     */
    public function getARXBescheinigungsreferenznummer()
    {
        return $this->ARX_Bescheinigungsreferenznummer;
    }
}
