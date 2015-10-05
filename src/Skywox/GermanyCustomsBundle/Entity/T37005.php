<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T37005
 */
class T37005
{
    /**
     * @var integer
     */
    private $ALS_SID_der_QUOTA_Beschreibung_Hauptkontingent;

    /**
     * @var integer
     */
    private $ALT_SID_der_QUOTA_Beschreibung_Unterkontingent;

    /**
     * @var string
     */
    private $ALU_Typ_des_verwandten_Unterkontingents;

    /**
     * @var string
     */
    private $ALV_Koeffizient;


    /**
     * Set ALS_SID_der_QUOTA_Beschreibung_Hauptkontingent
     *
     * @param integer $aLSSIDDerQUOTABeschreibungHauptkontingent
     * @return T37005
     */
    public function setALSSIDDerQUOTABeschreibungHauptkontingent($aLSSIDDerQUOTABeschreibungHauptkontingent)
    {
        $this->ALS_SID_der_QUOTA_Beschreibung_Hauptkontingent = $aLSSIDDerQUOTABeschreibungHauptkontingent;

        return $this;
    }

    /**
     * Get ALS_SID_der_QUOTA_Beschreibung_Hauptkontingent
     *
     * @return integer 
     */
    public function getALSSIDDerQUOTABeschreibungHauptkontingent()
    {
        return $this->ALS_SID_der_QUOTA_Beschreibung_Hauptkontingent;
    }

    /**
     * Set ALT_SID_der_QUOTA_Beschreibung_Unterkontingent
     *
     * @param integer $aLTSIDDerQUOTABeschreibungUnterkontingent
     * @return T37005
     */
    public function setALTSIDDerQUOTABeschreibungUnterkontingent($aLTSIDDerQUOTABeschreibungUnterkontingent)
    {
        $this->ALT_SID_der_QUOTA_Beschreibung_Unterkontingent = $aLTSIDDerQUOTABeschreibungUnterkontingent;

        return $this;
    }

    /**
     * Get ALT_SID_der_QUOTA_Beschreibung_Unterkontingent
     *
     * @return integer 
     */
    public function getALTSIDDerQUOTABeschreibungUnterkontingent()
    {
        return $this->ALT_SID_der_QUOTA_Beschreibung_Unterkontingent;
    }

    /**
     * Set ALU_Typ_des_verwandten_Unterkontingents
     *
     * @param string $aLUTypDesVerwandtenUnterkontingents
     * @return T37005
     */
    public function setALUTypDesVerwandtenUnterkontingents($aLUTypDesVerwandtenUnterkontingents)
    {
        $this->ALU_Typ_des_verwandten_Unterkontingents = $aLUTypDesVerwandtenUnterkontingents;

        return $this;
    }

    /**
     * Get ALU_Typ_des_verwandten_Unterkontingents
     *
     * @return string 
     */
    public function getALUTypDesVerwandtenUnterkontingents()
    {
        return $this->ALU_Typ_des_verwandten_Unterkontingents;
    }

    /**
     * Set ALV_Koeffizient
     *
     * @param string $aLVKoeffizient
     * @return T37005
     */
    public function setALVKoeffizient($aLVKoeffizient)
    {
        $this->ALV_Koeffizient = $aLVKoeffizient;

        return $this;
    }

    /**
     * Get ALV_Koeffizient
     *
     * @return string 
     */
    public function getALVKoeffizient()
    {
        return $this->ALV_Koeffizient;
    }
}
