<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N26000
 */
class N26000
{
    /**
     * @var string
     */
    private $AWZ_TARIC_Schlüssel_der_Ländergruppe;

    /**
     * @var \DateTime
     */
    private $AXA_Beginndatum;

    /**
     * @var string
     */
    private $AXB_Schlüssel_der_korrespondierenden_nationalen_Ländergruppe;

    /**
     * @var \DateTime
     */
    private $AXC_Endedatum;

    /**
     * @var string
     */
    private $AXD_Beschreibung;


    /**
     * Set AWZ_TARIC_Schlüssel_der_Ländergruppe
     *
     * @param string $aWZTARICSchlüsselDerLändergruppe
     * @return N26000
     */
    public function setAWZTARICSchlüsselDerLändergruppe($aWZTARICSchlüsselDerLändergruppe)
    {
        $this->AWZ_TARIC_Schlüssel_der_Ländergruppe = $aWZTARICSchlüsselDerLändergruppe;

        return $this;
    }

    /**
     * Get AWZ_TARIC_Schlüssel_der_Ländergruppe
     *
     * @return string 
     */
    public function getAWZTARICSchlüsselDerLändergruppe()
    {
        return $this->AWZ_TARIC_Schlüssel_der_Ländergruppe;
    }

    /**
     * Set AXA_Beginndatum
     *
     * @param \DateTime $aXABeginndatum
     * @return N26000
     */
    public function setAXABeginndatum($aXABeginndatum)
    {
        $this->AXA_Beginndatum = $aXABeginndatum;

        return $this;
    }

    /**
     * Get AXA_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAXABeginndatum()
    {
        return $this->AXA_Beginndatum;
    }

    /**
     * Set AXB_Schlüssel_der_korrespondierenden_nationalen_Ländergruppe
     *
     * @param string $aXBSchlüsselDerKorrespondierendenNationalenLändergruppe
     * @return N26000
     */
    public function setAXBSchlüsselDerKorrespondierendenNationalenLändergruppe($aXBSchlüsselDerKorrespondierendenNationalenLändergruppe)
    {
        $this->AXB_Schlüssel_der_korrespondierenden_nationalen_Ländergruppe = $aXBSchlüsselDerKorrespondierendenNationalenLändergruppe;

        return $this;
    }

    /**
     * Get AXB_Schlüssel_der_korrespondierenden_nationalen_Ländergruppe
     *
     * @return string 
     */
    public function getAXBSchlüsselDerKorrespondierendenNationalenLändergruppe()
    {
        return $this->AXB_Schlüssel_der_korrespondierenden_nationalen_Ländergruppe;
    }

    /**
     * Set AXC_Endedatum
     *
     * @param \DateTime $aXCEndedatum
     * @return N26000
     */
    public function setAXCEndedatum($aXCEndedatum)
    {
        $this->AXC_Endedatum = $aXCEndedatum;

        return $this;
    }

    /**
     * Get AXC_Endedatum
     *
     * @return \DateTime 
     */
    public function getAXCEndedatum()
    {
        return $this->AXC_Endedatum;
    }

    /**
     * Set AXD_Beschreibung
     *
     * @param string $aXDBeschreibung
     * @return N26000
     */
    public function setAXDBeschreibung($aXDBeschreibung)
    {
        $this->AXD_Beschreibung = $aXDBeschreibung;

        return $this;
    }

    /**
     * Get AXD_Beschreibung
     *
     * @return string 
     */
    public function getAXDBeschreibung()
    {
        return $this->AXD_Beschreibung;
    }
}
