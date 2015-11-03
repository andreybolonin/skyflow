<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T34005
 */
class T34005
{
    /**
     * @var integer
     */
    private $AKC_SID_für_Zusatzcode_Meursing;

    /**
     * @var string
     */
    private $AKD_ID_des_Meursing_Tabellenplans;

    /**
     * @var string
     */
    private $AKE_Meursing_Positionsnummer;

    /**
     * @var string
     */
    private $AKF_Meursing_Reihen__Spaltencode;

    /**
     * @var string
     */
    private $AKG_Sequentielle_Nummer_der_Meursing_Unterposition;

    /**
     * @var \DateTime
     */
    private $AKH_Datum_des_Gültigkeitsbeginns_der_Zellenkomponente_der_Meurs;

    /**
     * @var \DateTime
     */
    private $AKI_Gültigkeitsendedatum_der_Zellenkomponente_der_Meursing_Tabe;

    /**
     * @var string
     */
    private $AKJ_Zusatzcode_Meursing;


    /**
     * Set AKC_SID_für_Zusatzcode_Meursing
     *
     * @param integer $aKCSIDFürZusatzcodeMeursing
     * @return T34005
     */
    public function setAKCSIDFürZusatzcodeMeursing($aKCSIDFürZusatzcodeMeursing)
    {
        $this->AKC_SID_für_Zusatzcode_Meursing = $aKCSIDFürZusatzcodeMeursing;

        return $this;
    }

    /**
     * Get AKC_SID_für_Zusatzcode_Meursing
     *
     * @return integer 
     */
    public function getAKCSIDFürZusatzcodeMeursing()
    {
        return $this->AKC_SID_für_Zusatzcode_Meursing;
    }

    /**
     * Set AKD_ID_des_Meursing_Tabellenplans
     *
     * @param string $aKDIDDesMeursingTabellenplans
     * @return T34005
     */
    public function setAKDIDDesMeursingTabellenplans($aKDIDDesMeursingTabellenplans)
    {
        $this->AKD_ID_des_Meursing_Tabellenplans = $aKDIDDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AKD_ID_des_Meursing_Tabellenplans
     *
     * @return string 
     */
    public function getAKDIDDesMeursingTabellenplans()
    {
        return $this->AKD_ID_des_Meursing_Tabellenplans;
    }

    /**
     * Set AKE_Meursing_Positionsnummer
     *
     * @param string $aKEMeursingPositionsnummer
     * @return T34005
     */
    public function setAKEMeursingPositionsnummer($aKEMeursingPositionsnummer)
    {
        $this->AKE_Meursing_Positionsnummer = $aKEMeursingPositionsnummer;

        return $this;
    }

    /**
     * Get AKE_Meursing_Positionsnummer
     *
     * @return string 
     */
    public function getAKEMeursingPositionsnummer()
    {
        return $this->AKE_Meursing_Positionsnummer;
    }

    /**
     * Set AKF_Meursing_Reihen__Spaltencode
     *
     * @param string $aKFMeursingReihenSpaltencode
     * @return T34005
     */
    public function setAKFMeursingReihenSpaltencode($aKFMeursingReihenSpaltencode)
    {
        $this->AKF_Meursing_Reihen__Spaltencode = $aKFMeursingReihenSpaltencode;

        return $this;
    }

    /**
     * Get AKF_Meursing_Reihen__Spaltencode
     *
     * @return string 
     */
    public function getAKFMeursingReihenSpaltencode()
    {
        return $this->AKF_Meursing_Reihen__Spaltencode;
    }

    /**
     * Set AKG_Sequentielle_Nummer_der_Meursing_Unterposition
     *
     * @param string $aKGSequentielleNummerDerMeursingUnterposition
     * @return T34005
     */
    public function setAKGSequentielleNummerDerMeursingUnterposition($aKGSequentielleNummerDerMeursingUnterposition)
    {
        $this->AKG_Sequentielle_Nummer_der_Meursing_Unterposition = $aKGSequentielleNummerDerMeursingUnterposition;

        return $this;
    }

    /**
     * Get AKG_Sequentielle_Nummer_der_Meursing_Unterposition
     *
     * @return string 
     */
    public function getAKGSequentielleNummerDerMeursingUnterposition()
    {
        return $this->AKG_Sequentielle_Nummer_der_Meursing_Unterposition;
    }

    /**
     * Set AKH_Datum_des_Gültigkeitsbeginns_der_Zellenkomponente_der_Meurs
     *
     * @param \DateTime $aKHDatumDesGültigkeitsbeginnsDerZellenkomponenteDerMeurs
     * @return T34005
     */
    public function setAKHDatumDesGültigkeitsbeginnsDerZellenkomponenteDerMeurs($aKHDatumDesGültigkeitsbeginnsDerZellenkomponenteDerMeurs)
    {
        $this->AKH_Datum_des_Gültigkeitsbeginns_der_Zellenkomponente_der_Meurs = $aKHDatumDesGültigkeitsbeginnsDerZellenkomponenteDerMeurs;

        return $this;
    }

    /**
     * Get AKH_Datum_des_Gültigkeitsbeginns_der_Zellenkomponente_der_Meurs
     *
     * @return \DateTime 
     */
    public function getAKHDatumDesGültigkeitsbeginnsDerZellenkomponenteDerMeurs()
    {
        return $this->AKH_Datum_des_Gültigkeitsbeginns_der_Zellenkomponente_der_Meurs;
    }

    /**
     * Set AKI_Gültigkeitsendedatum_der_Zellenkomponente_der_Meursing_Tabe
     *
     * @param \DateTime $aKIGültigkeitsendedatumDerZellenkomponenteDerMeursingTabe
     * @return T34005
     */
    public function setAKIGültigkeitsendedatumDerZellenkomponenteDerMeursingTabe($aKIGültigkeitsendedatumDerZellenkomponenteDerMeursingTabe)
    {
        $this->AKI_Gültigkeitsendedatum_der_Zellenkomponente_der_Meursing_Tabe = $aKIGültigkeitsendedatumDerZellenkomponenteDerMeursingTabe;

        return $this;
    }

    /**
     * Get AKI_Gültigkeitsendedatum_der_Zellenkomponente_der_Meursing_Tabe
     *
     * @return \DateTime 
     */
    public function getAKIGültigkeitsendedatumDerZellenkomponenteDerMeursingTabe()
    {
        return $this->AKI_Gültigkeitsendedatum_der_Zellenkomponente_der_Meursing_Tabe;
    }

    /**
     * Set AKJ_Zusatzcode_Meursing
     *
     * @param string $aKJZusatzcodeMeursing
     * @return T34005
     */
    public function setAKJZusatzcodeMeursing($aKJZusatzcodeMeursing)
    {
        $this->AKJ_Zusatzcode_Meursing = $aKJZusatzcodeMeursing;

        return $this;
    }

    /**
     * Get AKJ_Zusatzcode_Meursing
     *
     * @return string 
     */
    public function getAKJZusatzcodeMeursing()
    {
        return $this->AKJ_Zusatzcode_Meursing;
    }
}
