<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N27015
 */
class N27015
{
    /**
     * @var integer
     */
    private $AYB_SID_der_Kontingentshinweise;

    /**
     * @var integer
     */
    private $AYC_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet;

    /**
     * @var \DateTime
     */
    private $AYD_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AYE_Endedatum;

    /**
     * @var string
     */
    private $AYF_Länderausschluss;

    /**
     * @var string
     */
    private $AYG_Hinweistext;


    /**
     * Set AYB_SID_der_Kontingentshinweise
     *
     * @param integer $aYBSIDDerKontingentshinweise
     * @return N27015
     */
    public function setAYBSIDDerKontingentshinweise($aYBSIDDerKontingentshinweise)
    {
        $this->AYB_SID_der_Kontingentshinweise = $aYBSIDDerKontingentshinweise;

        return $this;
    }

    /**
     * Get AYB_SID_der_Kontingentshinweise
     *
     * @return integer 
     */
    public function getAYBSIDDerKontingentshinweise()
    {
        return $this->AYB_SID_der_Kontingentshinweise;
    }

    /**
     * Set AYC_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet
     *
     * @param integer $aYCSIDDerZuordnungKontingentGeographischesGebiet
     * @return N27015
     */
    public function setAYCSIDDerZuordnungKontingentGeographischesGebiet($aYCSIDDerZuordnungKontingentGeographischesGebiet)
    {
        $this->AYC_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet = $aYCSIDDerZuordnungKontingentGeographischesGebiet;

        return $this;
    }

    /**
     * Get AYC_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet
     *
     * @return integer 
     */
    public function getAYCSIDDerZuordnungKontingentGeographischesGebiet()
    {
        return $this->AYC_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet;
    }

    /**
     * Set AYD_Beginndatum
     *
     * @param \DateTime $aYDBeginndatum
     * @return N27015
     */
    public function setAYDBeginndatum($aYDBeginndatum)
    {
        $this->AYD_Beginndatum = $aYDBeginndatum;

        return $this;
    }

    /**
     * Get AYD_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAYDBeginndatum()
    {
        return $this->AYD_Beginndatum;
    }

    /**
     * Set AYE_Endedatum
     *
     * @param \DateTime $aYEEndedatum
     * @return N27015
     */
    public function setAYEEndedatum($aYEEndedatum)
    {
        $this->AYE_Endedatum = $aYEEndedatum;

        return $this;
    }

    /**
     * Get AYE_Endedatum
     *
     * @return \DateTime 
     */
    public function getAYEEndedatum()
    {
        return $this->AYE_Endedatum;
    }

    /**
     * Set AYF_Länderausschluss
     *
     * @param string $aYFLänderausschluss
     * @return N27015
     */
    public function setAYFLänderausschluss($aYFLänderausschluss)
    {
        $this->AYF_Länderausschluss = $aYFLänderausschluss;

        return $this;
    }

    /**
     * Get AYF_Länderausschluss
     *
     * @return string 
     */
    public function getAYFLänderausschluss()
    {
        return $this->AYF_Länderausschluss;
    }

    /**
     * Set AYG_Hinweistext
     *
     * @param string $aYGHinweistext
     * @return N27015
     */
    public function setAYGHinweistext($aYGHinweistext)
    {
        $this->AYG_Hinweistext = $aYGHinweistext;

        return $this;
    }

    /**
     * Get AYG_Hinweistext
     *
     * @return string 
     */
    public function getAYGHinweistext()
    {
        return $this->AYG_Hinweistext;
    }
}
