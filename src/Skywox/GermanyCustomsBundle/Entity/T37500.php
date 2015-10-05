<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37500
 */
class T37500
{
    /**
     * @var integer
     */
    private $AMH_SID_der_QUOTA_Beschreibung;

    /**
     * @var \DateTime
     */
    private $AMI_Datum_und_Uhrzeit;

    /**
     * @var string
     */
    private $AMJ_alter_Bestand;

    /**
     * @var string
     */
    private $AMK_neuer_Bestand;

    /**
     * @var string
     */
    private $AML_eingeführte_Menge;


    /**
     * Set AMH_SID_der_QUOTA_Beschreibung
     *
     * @param integer $aMHSIDDerQUOTABeschreibung
     * @return T37500
     */
    public function setAMHSIDDerQUOTABeschreibung($aMHSIDDerQUOTABeschreibung)
    {
        $this->AMH_SID_der_QUOTA_Beschreibung = $aMHSIDDerQUOTABeschreibung;

        return $this;
    }

    /**
     * Get AMH_SID_der_QUOTA_Beschreibung
     *
     * @return integer 
     */
    public function getAMHSIDDerQUOTABeschreibung()
    {
        return $this->AMH_SID_der_QUOTA_Beschreibung;
    }

    /**
     * Set AMI_Datum_und_Uhrzeit
     *
     * @param \DateTime $aMIDatumUndUhrzeit
     * @return T37500
     */
    public function setAMIDatumUndUhrzeit($aMIDatumUndUhrzeit)
    {
        $this->AMI_Datum_und_Uhrzeit = $aMIDatumUndUhrzeit;

        return $this;
    }

    /**
     * Get AMI_Datum_und_Uhrzeit
     *
     * @return \DateTime 
     */
    public function getAMIDatumUndUhrzeit()
    {
        return $this->AMI_Datum_und_Uhrzeit;
    }

    /**
     * Set AMJ_alter_Bestand
     *
     * @param string $aMJAlterBestand
     * @return T37500
     */
    public function setAMJAlterBestand($aMJAlterBestand)
    {
        $this->AMJ_alter_Bestand = $aMJAlterBestand;

        return $this;
    }

    /**
     * Get AMJ_alter_Bestand
     *
     * @return string 
     */
    public function getAMJAlterBestand()
    {
        return $this->AMJ_alter_Bestand;
    }

    /**
     * Set AMK_neuer_Bestand
     *
     * @param string $aMKNeuerBestand
     * @return T37500
     */
    public function setAMKNeuerBestand($aMKNeuerBestand)
    {
        $this->AMK_neuer_Bestand = $aMKNeuerBestand;

        return $this;
    }

    /**
     * Get AMK_neuer_Bestand
     *
     * @return string 
     */
    public function getAMKNeuerBestand()
    {
        return $this->AMK_neuer_Bestand;
    }

    /**
     * Set AML_eingeführte_Menge
     *
     * @param string $aMLEingeführteMenge
     * @return T37500
     */
    public function setAMLEingeführteMenge($aMLEingeführteMenge)
    {
        $this->AML_eingeführte_Menge = $aMLEingeführteMenge;

        return $this;
    }

    /**
     * Get AML_eingeführte_Menge
     *
     * @return string 
     */
    public function getAMLEingeführteMenge()
    {
        return $this->AML_eingeführte_Menge;
    }
}
