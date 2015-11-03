<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N40010
 */
class N40010
{
    /**
     * @var integer
     */
    private $BDC_SID_der_nationalen_Maßnahme;

    /**
     * @var string
     */
    private $BDD_Fußnotenart_ID;

    /**
     * @var string
     */
    private $BDE_Fußnote;

    /**
     * @var \DateTime
     */
    private $BDF_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BDG_Endedatum;


    /**
     * Set BDC_SID_der_nationalen_Maßnahme
     *
     * @param integer $bDCSIDDerNationalenMaßnahme
     * @return N40010
     */
    public function setBDCSIDDerNationalenMaßnahme($bDCSIDDerNationalenMaßnahme)
    {
        $this->BDC_SID_der_nationalen_Maßnahme = $bDCSIDDerNationalenMaßnahme;

        return $this;
    }

    /**
     * Get BDC_SID_der_nationalen_Maßnahme
     *
     * @return integer 
     */
    public function getBDCSIDDerNationalenMaßnahme()
    {
        return $this->BDC_SID_der_nationalen_Maßnahme;
    }

    /**
     * Set BDD_Fußnotenart_ID
     *
     * @param string $bDDFußnotenartID
     * @return N40010
     */
    public function setBDDFußnotenartID($bDDFußnotenartID)
    {
        $this->BDD_Fußnotenart_ID = $bDDFußnotenartID;

        return $this;
    }

    /**
     * Get BDD_Fußnotenart_ID
     *
     * @return string 
     */
    public function getBDDFußnotenartID()
    {
        return $this->BDD_Fußnotenart_ID;
    }

    /**
     * Set BDE_Fußnote
     *
     * @param string $bDEFußnote
     * @return N40010
     */
    public function setBDEFußnote($bDEFußnote)
    {
        $this->BDE_Fußnote = $bDEFußnote;

        return $this;
    }

    /**
     * Get BDE_Fußnote
     *
     * @return string 
     */
    public function getBDEFußnote()
    {
        return $this->BDE_Fußnote;
    }

    /**
     * Set BDF_Beginndatum
     *
     * @param \DateTime $bDFBeginndatum
     * @return N40010
     */
    public function setBDFBeginndatum($bDFBeginndatum)
    {
        $this->BDF_Beginndatum = $bDFBeginndatum;

        return $this;
    }

    /**
     * Get BDF_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBDFBeginndatum()
    {
        return $this->BDF_Beginndatum;
    }

    /**
     * Set BDG_Endedatum
     *
     * @param \DateTime $bDGEndedatum
     * @return N40010
     */
    public function setBDGEndedatum($bDGEndedatum)
    {
        $this->BDG_Endedatum = $bDGEndedatum;

        return $this;
    }

    /**
     * Get BDG_Endedatum
     *
     * @return \DateTime 
     */
    public function getBDGEndedatum()
    {
        return $this->BDG_Endedatum;
    }
}
