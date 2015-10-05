<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N40020
 */
class N40020
{
    /**
     * @var integer
     */
    private $BDN_SID_der_Bedingungskomponente;

    /**
     * @var string
     */
    private $BDO_Abgabenart;

    /**
     * @var string
     */
    private $BDP_Aktionsbetrag;

    /**
     * @var string
     */
    private $BDQ_Währungseinheit;

    /**
     * @var string
     */
    private $BDR_Maßeinheit;

    /**
     * @var string
     */
    private $BDS_Maßeinheitsqualifikator;


    /**
     * Set BDN_SID_der_Bedingungskomponente
     *
     * @param integer $bDNSIDDerBedingungskomponente
     * @return N40020
     */
    public function setBDNSIDDerBedingungskomponente($bDNSIDDerBedingungskomponente)
    {
        $this->BDN_SID_der_Bedingungskomponente = $bDNSIDDerBedingungskomponente;

        return $this;
    }

    /**
     * Get BDN_SID_der_Bedingungskomponente
     *
     * @return integer 
     */
    public function getBDNSIDDerBedingungskomponente()
    {
        return $this->BDN_SID_der_Bedingungskomponente;
    }

    /**
     * Set BDO_Abgabenart
     *
     * @param string $bDOAbgabenart
     * @return N40020
     */
    public function setBDOAbgabenart($bDOAbgabenart)
    {
        $this->BDO_Abgabenart = $bDOAbgabenart;

        return $this;
    }

    /**
     * Get BDO_Abgabenart
     *
     * @return string 
     */
    public function getBDOAbgabenart()
    {
        return $this->BDO_Abgabenart;
    }

    /**
     * Set BDP_Aktionsbetrag
     *
     * @param string $bDPAktionsbetrag
     * @return N40020
     */
    public function setBDPAktionsbetrag($bDPAktionsbetrag)
    {
        $this->BDP_Aktionsbetrag = $bDPAktionsbetrag;

        return $this;
    }

    /**
     * Get BDP_Aktionsbetrag
     *
     * @return string 
     */
    public function getBDPAktionsbetrag()
    {
        return $this->BDP_Aktionsbetrag;
    }

    /**
     * Set BDQ_Währungseinheit
     *
     * @param string $bDQWährungseinheit
     * @return N40020
     */
    public function setBDQWährungseinheit($bDQWährungseinheit)
    {
        $this->BDQ_Währungseinheit = $bDQWährungseinheit;

        return $this;
    }

    /**
     * Get BDQ_Währungseinheit
     *
     * @return string 
     */
    public function getBDQWährungseinheit()
    {
        return $this->BDQ_Währungseinheit;
    }

    /**
     * Set BDR_Maßeinheit
     *
     * @param string $bDRMaßeinheit
     * @return N40020
     */
    public function setBDRMaßeinheit($bDRMaßeinheit)
    {
        $this->BDR_Maßeinheit = $bDRMaßeinheit;

        return $this;
    }

    /**
     * Get BDR_Maßeinheit
     *
     * @return string 
     */
    public function getBDRMaßeinheit()
    {
        return $this->BDR_Maßeinheit;
    }

    /**
     * Set BDS_Maßeinheitsqualifikator
     *
     * @param string $bDSMaßeinheitsqualifikator
     * @return N40020
     */
    public function setBDSMaßeinheitsqualifikator($bDSMaßeinheitsqualifikator)
    {
        $this->BDS_Maßeinheitsqualifikator = $bDSMaßeinheitsqualifikator;

        return $this;
    }

    /**
     * Get BDS_Maßeinheitsqualifikator
     *
     * @return string 
     */
    public function getBDSMaßeinheitsqualifikator()
    {
        return $this->BDS_Maßeinheitsqualifikator;
    }
}
