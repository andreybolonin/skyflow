<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61300
 */
class N61300
{
    /**
     * @var integer
     */
    private $BIJ_SID;

    /**
     * @var \DateTime
     */
    private $BIM_Beginndatum;

    /**
     * @var string
     */
    private $BIK_Warennummer;

    /**
     * @var integer
     */
    private $BIL_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist;

    /**
     * @var \DateTime
     */
    private $BIN_Endedatum;

    /**
     * @var string
     */
    private $BIO_Beschreibung;

    /**
     * @var string
     */
    private $BIP_Grund_der_Beschränkung_Beschreibungsfeld;


    /**
     * Set BIJ_SID
     *
     * @param integer $bIJSID
     * @return N61300
     */
    public function setBIJSID($bIJSID)
    {
        $this->BIJ_SID = $bIJSID;

        return $this;
    }

    /**
     * Get BIJ_SID
     *
     * @return integer 
     */
    public function getBIJSID()
    {
        return $this->BIJ_SID;
    }

    /**
     * Set BIM_Beginndatum
     *
     * @param \DateTime $bIMBeginndatum
     * @return N61300
     */
    public function setBIMBeginndatum($bIMBeginndatum)
    {
        $this->BIM_Beginndatum = $bIMBeginndatum;

        return $this;
    }

    /**
     * Get BIM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBIMBeginndatum()
    {
        return $this->BIM_Beginndatum;
    }

    /**
     * Set BIK_Warennummer
     *
     * @param string $bIKWarennummer
     * @return N61300
     */
    public function setBIKWarennummer($bIKWarennummer)
    {
        $this->BIK_Warennummer = $bIKWarennummer;

        return $this;
    }

    /**
     * Get BIK_Warennummer
     *
     * @return string 
     */
    public function getBIKWarennummer()
    {
        return $this->BIK_Warennummer;
    }

    /**
     * Set BIL_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist
     *
     * @param integer $bILFlagObNurEinTeilDerWarennummerBetroffenIst
     * @return N61300
     */
    public function setBILFlagObNurEinTeilDerWarennummerBetroffenIst($bILFlagObNurEinTeilDerWarennummerBetroffenIst)
    {
        $this->BIL_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist = $bILFlagObNurEinTeilDerWarennummerBetroffenIst;

        return $this;
    }

    /**
     * Get BIL_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist
     *
     * @return integer 
     */
    public function getBILFlagObNurEinTeilDerWarennummerBetroffenIst()
    {
        return $this->BIL_Flag_ob_nur_ein_Teil_der_Warennummer_betroffen_ist;
    }

    /**
     * Set BIN_Endedatum
     *
     * @param \DateTime $bINEndedatum
     * @return N61300
     */
    public function setBINEndedatum($bINEndedatum)
    {
        $this->BIN_Endedatum = $bINEndedatum;

        return $this;
    }

    /**
     * Get BIN_Endedatum
     *
     * @return \DateTime 
     */
    public function getBINEndedatum()
    {
        return $this->BIN_Endedatum;
    }

    /**
     * Set BIO_Beschreibung
     *
     * @param string $bIOBeschreibung
     * @return N61300
     */
    public function setBIOBeschreibung($bIOBeschreibung)
    {
        $this->BIO_Beschreibung = $bIOBeschreibung;

        return $this;
    }

    /**
     * Get BIO_Beschreibung
     *
     * @return string 
     */
    public function getBIOBeschreibung()
    {
        return $this->BIO_Beschreibung;
    }

    /**
     * Set BIP_Grund_der_Beschränkung_Beschreibungsfeld
     *
     * @param string $bIPGrundDerBeschränkungBeschreibungsfeld
     * @return N61300
     */
    public function setBIPGrundDerBeschränkungBeschreibungsfeld($bIPGrundDerBeschränkungBeschreibungsfeld)
    {
        $this->BIP_Grund_der_Beschränkung_Beschreibungsfeld = $bIPGrundDerBeschränkungBeschreibungsfeld;

        return $this;
    }

    /**
     * Get BIP_Grund_der_Beschränkung_Beschreibungsfeld
     *
     * @return string 
     */
    public function getBIPGrundDerBeschränkungBeschreibungsfeld()
    {
        return $this->BIP_Grund_der_Beschränkung_Beschreibungsfeld;
    }
}
