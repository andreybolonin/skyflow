<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N37000
 */
class N37000
{
    /**
     * @var string
     */
    private $BBL_Erste_Stelle_des_Antragscodes;

    /**
     * @var string
     */
    private $BBM_Art_der_Bescheinigung;

    /**
     * @var string
     */
    private $BBN_Schlüssel_der_Bescheinigung;

    /**
     * @var \DateTime
     */
    private $BBO_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BBP_Endedatum;


    /**
     * Set BBL_Erste_Stelle_des_Antragscodes
     *
     * @param string $bBLErsteStelleDesAntragscodes
     * @return N37000
     */
    public function setBBLErsteStelleDesAntragscodes($bBLErsteStelleDesAntragscodes)
    {
        $this->BBL_Erste_Stelle_des_Antragscodes = $bBLErsteStelleDesAntragscodes;

        return $this;
    }

    /**
     * Get BBL_Erste_Stelle_des_Antragscodes
     *
     * @return string 
     */
    public function getBBLErsteStelleDesAntragscodes()
    {
        return $this->BBL_Erste_Stelle_des_Antragscodes;
    }

    /**
     * Set BBM_Art_der_Bescheinigung
     *
     * @param string $bBMArtDerBescheinigung
     * @return N37000
     */
    public function setBBMArtDerBescheinigung($bBMArtDerBescheinigung)
    {
        $this->BBM_Art_der_Bescheinigung = $bBMArtDerBescheinigung;

        return $this;
    }

    /**
     * Get BBM_Art_der_Bescheinigung
     *
     * @return string 
     */
    public function getBBMArtDerBescheinigung()
    {
        return $this->BBM_Art_der_Bescheinigung;
    }

    /**
     * Set BBN_Schlüssel_der_Bescheinigung
     *
     * @param string $bBNSchlüsselDerBescheinigung
     * @return N37000
     */
    public function setBBNSchlüsselDerBescheinigung($bBNSchlüsselDerBescheinigung)
    {
        $this->BBN_Schlüssel_der_Bescheinigung = $bBNSchlüsselDerBescheinigung;

        return $this;
    }

    /**
     * Get BBN_Schlüssel_der_Bescheinigung
     *
     * @return string 
     */
    public function getBBNSchlüsselDerBescheinigung()
    {
        return $this->BBN_Schlüssel_der_Bescheinigung;
    }

    /**
     * Set BBO_Beginndatum
     *
     * @param \DateTime $bBOBeginndatum
     * @return N37000
     */
    public function setBBOBeginndatum($bBOBeginndatum)
    {
        $this->BBO_Beginndatum = $bBOBeginndatum;

        return $this;
    }

    /**
     * Get BBO_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBBOBeginndatum()
    {
        return $this->BBO_Beginndatum;
    }

    /**
     * Set BBP_Endedatum
     *
     * @param \DateTime $bBPEndedatum
     * @return N37000
     */
    public function setBBPEndedatum($bBPEndedatum)
    {
        $this->BBP_Endedatum = $bBPEndedatum;

        return $this;
    }

    /**
     * Get BBP_Endedatum
     *
     * @return \DateTime 
     */
    public function getBBPEndedatum()
    {
        return $this->BBP_Endedatum;
    }
}
