<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N40000
 */
class N40000
{
    /**
     * @var integer
     */
    private $BBY_SID;

    /**
     * @var string
     */
    private $BBZ_Maßnahmeart;

    /**
     * @var string
     */
    private $BCA_Herkunft_der_Maßnahmeart_TARIC_national;

    /**
     * @var string
     */
    private $BCB_Geographisches_Gebiet;

    /**
     * @var \DateTime
     */
    private $BCC_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BCD_Endedatum;

    /**
     * @var \DateTime
     */
    private $BCE_tatsächliches_Endedatum;

    /**
     * @var string
     */
    private $BCF_Zollaussetzung;

    /**
     * @var string
     */
    private $BCG_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $BCH_Codenummer;

    /**
     * @var string
     */
    private $BCI_Zusatzcodeart;

    /**
     * @var string
     */
    private $BCJ_Zusatzcode;

    /**
     * @var string
     */
    private $BCK_Ordnungsnummer;

    /**
     * @var string
     */
    private $BCL_Verbrauchsteuerart_ID;

    /**
     * @var string
     */
    private $BCM_Verbrauchsteuer_ID;

    /**
     * @var integer
     */
    private $BCN_SID_der_TARIC_Maßnahme;

    /**
     * @var integer
     */
    private $BCO_SID_der_TARIC_Warennomenklatur;

    /**
     * @var integer
     */
    private $BCP_SID_der_nationalen_Nomenklatur;

    /**
     * @var integer
     */
    private $BCQ_SID_der_Verbrauchsteuer;


    /**
     * Set BBY_SID
     *
     * @param integer $bBYSID
     * @return N40000
     */
    public function setBBYSID($bBYSID)
    {
        $this->BBY_SID = $bBYSID;

        return $this;
    }

    /**
     * Get BBY_SID
     *
     * @return integer 
     */
    public function getBBYSID()
    {
        return $this->BBY_SID;
    }

    /**
     * Set BBZ_Maßnahmeart
     *
     * @param string $bBZMaßnahmeart
     * @return N40000
     */
    public function setBBZMaßnahmeart($bBZMaßnahmeart)
    {
        $this->BBZ_Maßnahmeart = $bBZMaßnahmeart;

        return $this;
    }

    /**
     * Get BBZ_Maßnahmeart
     *
     * @return string 
     */
    public function getBBZMaßnahmeart()
    {
        return $this->BBZ_Maßnahmeart;
    }

    /**
     * Set BCA_Herkunft_der_Maßnahmeart_TARIC_national
     *
     * @param string $bCAHerkunftDerMaßnahmeartTARICNational
     * @return N40000
     */
    public function setBCAHerkunftDerMaßnahmeartTARICNational($bCAHerkunftDerMaßnahmeartTARICNational)
    {
        $this->BCA_Herkunft_der_Maßnahmeart_TARIC_national = $bCAHerkunftDerMaßnahmeartTARICNational;

        return $this;
    }

    /**
     * Get BCA_Herkunft_der_Maßnahmeart_TARIC_national
     *
     * @return string 
     */
    public function getBCAHerkunftDerMaßnahmeartTARICNational()
    {
        return $this->BCA_Herkunft_der_Maßnahmeart_TARIC_national;
    }

    /**
     * Set BCB_Geographisches_Gebiet
     *
     * @param string $bCBGeographischesGebiet
     * @return N40000
     */
    public function setBCBGeographischesGebiet($bCBGeographischesGebiet)
    {
        $this->BCB_Geographisches_Gebiet = $bCBGeographischesGebiet;

        return $this;
    }

    /**
     * Get BCB_Geographisches_Gebiet
     *
     * @return string 
     */
    public function getBCBGeographischesGebiet()
    {
        return $this->BCB_Geographisches_Gebiet;
    }

    /**
     * Set BCC_Beginndatum
     *
     * @param \DateTime $bCCBeginndatum
     * @return N40000
     */
    public function setBCCBeginndatum($bCCBeginndatum)
    {
        $this->BCC_Beginndatum = $bCCBeginndatum;

        return $this;
    }

    /**
     * Get BCC_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBCCBeginndatum()
    {
        return $this->BCC_Beginndatum;
    }

    /**
     * Set BCD_Endedatum
     *
     * @param \DateTime $bCDEndedatum
     * @return N40000
     */
    public function setBCDEndedatum($bCDEndedatum)
    {
        $this->BCD_Endedatum = $bCDEndedatum;

        return $this;
    }

    /**
     * Get BCD_Endedatum
     *
     * @return \DateTime 
     */
    public function getBCDEndedatum()
    {
        return $this->BCD_Endedatum;
    }

    /**
     * Set BCE_tatsächliches_Endedatum
     *
     * @param \DateTime $bCETatsächlichesEndedatum
     * @return N40000
     */
    public function setBCETatsächlichesEndedatum($bCETatsächlichesEndedatum)
    {
        $this->BCE_tatsächliches_Endedatum = $bCETatsächlichesEndedatum;

        return $this;
    }

    /**
     * Get BCE_tatsächliches_Endedatum
     *
     * @return \DateTime 
     */
    public function getBCETatsächlichesEndedatum()
    {
        return $this->BCE_tatsächliches_Endedatum;
    }

    /**
     * Set BCF_Zollaussetzung
     *
     * @param string $bCFZollaussetzung
     * @return N40000
     */
    public function setBCFZollaussetzung($bCFZollaussetzung)
    {
        $this->BCF_Zollaussetzung = $bCFZollaussetzung;

        return $this;
    }

    /**
     * Get BCF_Zollaussetzung
     *
     * @return string 
     */
    public function getBCFZollaussetzung()
    {
        return $this->BCF_Zollaussetzung;
    }

    /**
     * Set BCG_Warennomenklatur_ID
     *
     * @param string $bCGWarennomenklaturID
     * @return N40000
     */
    public function setBCGWarennomenklaturID($bCGWarennomenklaturID)
    {
        $this->BCG_Warennomenklatur_ID = $bCGWarennomenklaturID;

        return $this;
    }

    /**
     * Get BCG_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getBCGWarennomenklaturID()
    {
        return $this->BCG_Warennomenklatur_ID;
    }

    /**
     * Set BCH_Codenummer
     *
     * @param string $bCHCodenummer
     * @return N40000
     */
    public function setBCHCodenummer($bCHCodenummer)
    {
        $this->BCH_Codenummer = $bCHCodenummer;

        return $this;
    }

    /**
     * Get BCH_Codenummer
     *
     * @return string 
     */
    public function getBCHCodenummer()
    {
        return $this->BCH_Codenummer;
    }

    /**
     * Set BCI_Zusatzcodeart
     *
     * @param string $bCIZusatzcodeart
     * @return N40000
     */
    public function setBCIZusatzcodeart($bCIZusatzcodeart)
    {
        $this->BCI_Zusatzcodeart = $bCIZusatzcodeart;

        return $this;
    }

    /**
     * Get BCI_Zusatzcodeart
     *
     * @return string 
     */
    public function getBCIZusatzcodeart()
    {
        return $this->BCI_Zusatzcodeart;
    }

    /**
     * Set BCJ_Zusatzcode
     *
     * @param string $bCJZusatzcode
     * @return N40000
     */
    public function setBCJZusatzcode($bCJZusatzcode)
    {
        $this->BCJ_Zusatzcode = $bCJZusatzcode;

        return $this;
    }

    /**
     * Get BCJ_Zusatzcode
     *
     * @return string 
     */
    public function getBCJZusatzcode()
    {
        return $this->BCJ_Zusatzcode;
    }

    /**
     * Set BCK_Ordnungsnummer
     *
     * @param string $bCKOrdnungsnummer
     * @return N40000
     */
    public function setBCKOrdnungsnummer($bCKOrdnungsnummer)
    {
        $this->BCK_Ordnungsnummer = $bCKOrdnungsnummer;

        return $this;
    }

    /**
     * Get BCK_Ordnungsnummer
     *
     * @return string 
     */
    public function getBCKOrdnungsnummer()
    {
        return $this->BCK_Ordnungsnummer;
    }

    /**
     * Set BCL_Verbrauchsteuerart_ID
     *
     * @param string $bCLVerbrauchsteuerartID
     * @return N40000
     */
    public function setBCLVerbrauchsteuerartID($bCLVerbrauchsteuerartID)
    {
        $this->BCL_Verbrauchsteuerart_ID = $bCLVerbrauchsteuerartID;

        return $this;
    }

    /**
     * Get BCL_Verbrauchsteuerart_ID
     *
     * @return string 
     */
    public function getBCLVerbrauchsteuerartID()
    {
        return $this->BCL_Verbrauchsteuerart_ID;
    }

    /**
     * Set BCM_Verbrauchsteuer_ID
     *
     * @param string $bCMVerbrauchsteuerID
     * @return N40000
     */
    public function setBCMVerbrauchsteuerID($bCMVerbrauchsteuerID)
    {
        $this->BCM_Verbrauchsteuer_ID = $bCMVerbrauchsteuerID;

        return $this;
    }

    /**
     * Get BCM_Verbrauchsteuer_ID
     *
     * @return string 
     */
    public function getBCMVerbrauchsteuerID()
    {
        return $this->BCM_Verbrauchsteuer_ID;
    }

    /**
     * Set BCN_SID_der_TARIC_Maßnahme
     *
     * @param integer $bCNSIDDerTARICMaßnahme
     * @return N40000
     */
    public function setBCNSIDDerTARICMaßnahme($bCNSIDDerTARICMaßnahme)
    {
        $this->BCN_SID_der_TARIC_Maßnahme = $bCNSIDDerTARICMaßnahme;

        return $this;
    }

    /**
     * Get BCN_SID_der_TARIC_Maßnahme
     *
     * @return integer 
     */
    public function getBCNSIDDerTARICMaßnahme()
    {
        return $this->BCN_SID_der_TARIC_Maßnahme;
    }

    /**
     * Set BCO_SID_der_TARIC_Warennomenklatur
     *
     * @param integer $bCOSIDDerTARICWarennomenklatur
     * @return N40000
     */
    public function setBCOSIDDerTARICWarennomenklatur($bCOSIDDerTARICWarennomenklatur)
    {
        $this->BCO_SID_der_TARIC_Warennomenklatur = $bCOSIDDerTARICWarennomenklatur;

        return $this;
    }

    /**
     * Get BCO_SID_der_TARIC_Warennomenklatur
     *
     * @return integer 
     */
    public function getBCOSIDDerTARICWarennomenklatur()
    {
        return $this->BCO_SID_der_TARIC_Warennomenklatur;
    }

    /**
     * Set BCP_SID_der_nationalen_Nomenklatur
     *
     * @param integer $bCPSIDDerNationalenNomenklatur
     * @return N40000
     */
    public function setBCPSIDDerNationalenNomenklatur($bCPSIDDerNationalenNomenklatur)
    {
        $this->BCP_SID_der_nationalen_Nomenklatur = $bCPSIDDerNationalenNomenklatur;

        return $this;
    }

    /**
     * Get BCP_SID_der_nationalen_Nomenklatur
     *
     * @return integer 
     */
    public function getBCPSIDDerNationalenNomenklatur()
    {
        return $this->BCP_SID_der_nationalen_Nomenklatur;
    }

    /**
     * Set BCQ_SID_der_Verbrauchsteuer
     *
     * @param integer $bCQSIDDerVerbrauchsteuer
     * @return N40000
     */
    public function setBCQSIDDerVerbrauchsteuer($bCQSIDDerVerbrauchsteuer)
    {
        $this->BCQ_SID_der_Verbrauchsteuer = $bCQSIDDerVerbrauchsteuer;

        return $this;
    }

    /**
     * Get BCQ_SID_der_Verbrauchsteuer
     *
     * @return integer 
     */
    public function getBCQSIDDerVerbrauchsteuer()
    {
        return $this->BCQ_SID_der_Verbrauchsteuer;
    }
}
