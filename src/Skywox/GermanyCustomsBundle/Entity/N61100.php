<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61100
 */
class N61100
{
    /**
     * @var integer
     */
    private $BHX_SID;

    /**
     * @var \DateTime
     */
    private $BIA_Beginndatum;

    /**
     * @var string
     */
    private $BHY_Warennummer;

    /**
     * @var integer
     */
    private $BHZ_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist;

    /**
     * @var \DateTime
     */
    private $BIB_Endedatum;

    /**
     * @var string
     */
    private $BIC_Ausfuhrlistennummer;

    /**
     * @var string
     */
    private $BID_Beschreibung;


    /**
     * Set BHX_SID
     *
     * @param integer $bHXSID
     * @return N61100
     */
    public function setBHXSID($bHXSID)
    {
        $this->BHX_SID = $bHXSID;

        return $this;
    }

    /**
     * Get BHX_SID
     *
     * @return integer 
     */
    public function getBHXSID()
    {
        return $this->BHX_SID;
    }

    /**
     * Set BIA_Beginndatum
     *
     * @param \DateTime $bIABeginndatum
     * @return N61100
     */
    public function setBIABeginndatum($bIABeginndatum)
    {
        $this->BIA_Beginndatum = $bIABeginndatum;

        return $this;
    }

    /**
     * Get BIA_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBIABeginndatum()
    {
        return $this->BIA_Beginndatum;
    }

    /**
     * Set BHY_Warennummer
     *
     * @param string $bHYWarennummer
     * @return N61100
     */
    public function setBHYWarennummer($bHYWarennummer)
    {
        $this->BHY_Warennummer = $bHYWarennummer;

        return $this;
    }

    /**
     * Get BHY_Warennummer
     *
     * @return string 
     */
    public function getBHYWarennummer()
    {
        return $this->BHY_Warennummer;
    }

    /**
     * Set BHZ_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist
     *
     * @param integer $bHZFlagObNurEinTeilDerWarennummerBetroffenIst
     * @return N61100
     */
    public function setBHZFlagObNurEinTeilDerWarennummerBetroffenIst($bHZFlagObNurEinTeilDerWarennummerBetroffenIst)
    {
        $this->BHZ_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist = $bHZFlagObNurEinTeilDerWarennummerBetroffenIst;

        return $this;
    }

    /**
     * Get BHZ_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist
     *
     * @return integer 
     */
    public function getBHZFlagObNurEinTeilDerWarennummerBetroffenIst()
    {
        return $this->BHZ_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist;
    }

    /**
     * Set BIB_Endedatum
     *
     * @param \DateTime $bIBEndedatum
     * @return N61100
     */
    public function setBIBEndedatum($bIBEndedatum)
    {
        $this->BIB_Endedatum = $bIBEndedatum;

        return $this;
    }

    /**
     * Get BIB_Endedatum
     *
     * @return \DateTime 
     */
    public function getBIBEndedatum()
    {
        return $this->BIB_Endedatum;
    }

    /**
     * Set BIC_Ausfuhrlistennummer
     *
     * @param string $bICAusfuhrlistennummer
     * @return N61100
     */
    public function setBICAusfuhrlistennummer($bICAusfuhrlistennummer)
    {
        $this->BIC_Ausfuhrlistennummer = $bICAusfuhrlistennummer;

        return $this;
    }

    /**
     * Get BIC_Ausfuhrlistennummer
     *
     * @return string 
     */
    public function getBICAusfuhrlistennummer()
    {
        return $this->BIC_Ausfuhrlistennummer;
    }

    /**
     * Set BID_Beschreibung
     *
     * @param string $bIDBeschreibung
     * @return N61100
     */
    public function setBIDBeschreibung($bIDBeschreibung)
    {
        $this->BID_Beschreibung = $bIDBeschreibung;

        return $this;
    }

    /**
     * Get BID_Beschreibung
     *
     * @return string 
     */
    public function getBIDBeschreibung()
    {
        return $this->BID_Beschreibung;
    }
}
