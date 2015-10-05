<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N61200
 */
class N61200
{
    /**
     * @var string
     */
    private $BIE_Ausfuhrlistennummer;

    /**
     * @var \DateTime
     */
    private $BIF_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BIG_Endedatum;

    /**
     * @var string
     */
    private $BIH_Beschreibung;

    /**
     * @var string
     */
    private $BII_Anmerkung;


    /**
     * Set BIE_Ausfuhrlistennummer
     *
     * @param string $bIEAusfuhrlistennummer
     * @return N61200
     */
    public function setBIEAusfuhrlistennummer($bIEAusfuhrlistennummer)
    {
        $this->BIE_Ausfuhrlistennummer = $bIEAusfuhrlistennummer;

        return $this;
    }

    /**
     * Get BIE_Ausfuhrlistennummer
     *
     * @return string 
     */
    public function getBIEAusfuhrlistennummer()
    {
        return $this->BIE_Ausfuhrlistennummer;
    }

    /**
     * Set BIF_Beginndatum
     *
     * @param \DateTime $bIFBeginndatum
     * @return N61200
     */
    public function setBIFBeginndatum($bIFBeginndatum)
    {
        $this->BIF_Beginndatum = $bIFBeginndatum;

        return $this;
    }

    /**
     * Get BIF_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBIFBeginndatum()
    {
        return $this->BIF_Beginndatum;
    }

    /**
     * Set BIG_Endedatum
     *
     * @param \DateTime $bIGEndedatum
     * @return N61200
     */
    public function setBIGEndedatum($bIGEndedatum)
    {
        $this->BIG_Endedatum = $bIGEndedatum;

        return $this;
    }

    /**
     * Get BIG_Endedatum
     *
     * @return \DateTime 
     */
    public function getBIGEndedatum()
    {
        return $this->BIG_Endedatum;
    }

    /**
     * Set BIH_Beschreibung
     *
     * @param string $bIHBeschreibung
     * @return N61200
     */
    public function setBIHBeschreibung($bIHBeschreibung)
    {
        $this->BIH_Beschreibung = $bIHBeschreibung;

        return $this;
    }

    /**
     * Get BIH_Beschreibung
     *
     * @return string 
     */
    public function getBIHBeschreibung()
    {
        return $this->BIH_Beschreibung;
    }

    /**
     * Set BII_Anmerkung
     *
     * @param string $bIIAnmerkung
     * @return N61200
     */
    public function setBIIAnmerkung($bIIAnmerkung)
    {
        $this->BII_Anmerkung = $bIIAnmerkung;

        return $this;
    }

    /**
     * Get BII_Anmerkung
     *
     * @return string 
     */
    public function getBIIAnmerkung()
    {
        return $this->BII_Anmerkung;
    }
}
