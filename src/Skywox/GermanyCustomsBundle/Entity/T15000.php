<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T15000
 */
class T15000
{
    /**
     * @var string
     */
    private $ABA_Verordnungsgruppen_ID;

    /**
     * @var \DateTime
     */
    private $ABB_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ABC_Endedatum;

    /**
     * @var string
     */
    private $ABD_Beschreibung_der_Verordnungsgruppe;


    /**
     * Set ABA_Verordnungsgruppen_ID
     *
     * @param string $aBAVerordnungsgruppenID
     * @return T15000
     */
    public function setABAVerordnungsgruppenID($aBAVerordnungsgruppenID)
    {
        $this->ABA_Verordnungsgruppen_ID = $aBAVerordnungsgruppenID;

        return $this;
    }

    /**
     * Get ABA_Verordnungsgruppen_ID
     *
     * @return string 
     */
    public function getABAVerordnungsgruppenID()
    {
        return $this->ABA_Verordnungsgruppen_ID;
    }

    /**
     * Set ABB_Beginndatum
     *
     * @param \DateTime $aBBBeginndatum
     * @return T15000
     */
    public function setABBBeginndatum($aBBBeginndatum)
    {
        $this->ABB_Beginndatum = $aBBBeginndatum;

        return $this;
    }

    /**
     * Get ABB_Beginndatum
     *
     * @return \DateTime 
     */
    public function getABBBeginndatum()
    {
        return $this->ABB_Beginndatum;
    }

    /**
     * Set ABC_Endedatum
     *
     * @param \DateTime $aBCEndedatum
     * @return T15000
     */
    public function setABCEndedatum($aBCEndedatum)
    {
        $this->ABC_Endedatum = $aBCEndedatum;

        return $this;
    }

    /**
     * Get ABC_Endedatum
     *
     * @return \DateTime 
     */
    public function getABCEndedatum()
    {
        return $this->ABC_Endedatum;
    }

    /**
     * Set ABD_Beschreibung_der_Verordnungsgruppe
     *
     * @param string $aBDBeschreibungDerVerordnungsgruppe
     * @return T15000
     */
    public function setABDBeschreibungDerVerordnungsgruppe($aBDBeschreibungDerVerordnungsgruppe)
    {
        $this->ABD_Beschreibung_der_Verordnungsgruppe = $aBDBeschreibungDerVerordnungsgruppe;

        return $this;
    }

    /**
     * Get ABD_Beschreibung_der_Verordnungsgruppe
     *
     * @return string 
     */
    public function getABDBeschreibungDerVerordnungsgruppe()
    {
        return $this->ABD_Beschreibung_der_Verordnungsgruppe;
    }
}
