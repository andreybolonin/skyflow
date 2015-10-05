<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T29500
 */
class T29500
{
    /**
     * @var string
     */
    private $AHO_Funktion_der_Verlängerungsverordnung;

    /**
     * @var string
     */
    private $AHP_Verlängerungsverordnungs_ID;

    /**
     * @var \DateTime
     */
    private $AHQ_Veröffentlichungsdatum_der_Verlängerungsverordnung;

    /**
     * @var string
     */
    private $AHR_Nummer_des_Amtsblattes;

    /**
     * @var string
     */
    private $AHS_Amtsblatt_Seite;

    /**
     * @var string
     */
    private $AHT_Ersatzindikator;

    /**
     * @var string
     */
    private $AHU_Informationstext;

    /**
     * @var string
     */
    private $AHV_Billigungsindikator;


    /**
     * Set AHO_Funktion_der_Verlängerungsverordnung
     *
     * @param string $aHOFunktionDerVerlängerungsverordnung
     * @return T29500
     */
    public function setAHOFunktionDerVerlängerungsverordnung($aHOFunktionDerVerlängerungsverordnung)
    {
        $this->AHO_Funktion_der_Verlängerungsverordnung = $aHOFunktionDerVerlängerungsverordnung;

        return $this;
    }

    /**
     * Get AHO_Funktion_der_Verlängerungsverordnung
     *
     * @return string 
     */
    public function getAHOFunktionDerVerlängerungsverordnung()
    {
        return $this->AHO_Funktion_der_Verlängerungsverordnung;
    }

    /**
     * Set AHP_Verlängerungsverordnungs_ID
     *
     * @param string $aHPVerlängerungsverordnungsID
     * @return T29500
     */
    public function setAHPVerlängerungsverordnungsID($aHPVerlängerungsverordnungsID)
    {
        $this->AHP_Verlängerungsverordnungs_ID = $aHPVerlängerungsverordnungsID;

        return $this;
    }

    /**
     * Get AHP_Verlängerungsverordnungs_ID
     *
     * @return string 
     */
    public function getAHPVerlängerungsverordnungsID()
    {
        return $this->AHP_Verlängerungsverordnungs_ID;
    }

    /**
     * Set AHQ_Veröffentlichungsdatum_der_Verlängerungsverordnung
     *
     * @param \DateTime $aHQVeröffentlichungsdatumDerVerlängerungsverordnung
     * @return T29500
     */
    public function setAHQVeröffentlichungsdatumDerVerlängerungsverordnung($aHQVeröffentlichungsdatumDerVerlängerungsverordnung)
    {
        $this->AHQ_Veröffentlichungsdatum_der_Verlängerungsverordnung = $aHQVeröffentlichungsdatumDerVerlängerungsverordnung;

        return $this;
    }

    /**
     * Get AHQ_Veröffentlichungsdatum_der_Verlängerungsverordnung
     *
     * @return \DateTime 
     */
    public function getAHQVeröffentlichungsdatumDerVerlängerungsverordnung()
    {
        return $this->AHQ_Veröffentlichungsdatum_der_Verlängerungsverordnung;
    }

    /**
     * Set AHR_Nummer_des_Amtsblattes
     *
     * @param string $aHRNummerDesAmtsblattes
     * @return T29500
     */
    public function setAHRNummerDesAmtsblattes($aHRNummerDesAmtsblattes)
    {
        $this->AHR_Nummer_des_Amtsblattes = $aHRNummerDesAmtsblattes;

        return $this;
    }

    /**
     * Get AHR_Nummer_des_Amtsblattes
     *
     * @return string 
     */
    public function getAHRNummerDesAmtsblattes()
    {
        return $this->AHR_Nummer_des_Amtsblattes;
    }

    /**
     * Set AHS_Amtsblatt_Seite
     *
     * @param string $aHSAmtsblattSeite
     * @return T29500
     */
    public function setAHSAmtsblattSeite($aHSAmtsblattSeite)
    {
        $this->AHS_Amtsblatt_Seite = $aHSAmtsblattSeite;

        return $this;
    }

    /**
     * Get AHS_Amtsblatt_Seite
     *
     * @return string 
     */
    public function getAHSAmtsblattSeite()
    {
        return $this->AHS_Amtsblatt_Seite;
    }

    /**
     * Set AHT_Ersatzindikator
     *
     * @param string $aHTErsatzindikator
     * @return T29500
     */
    public function setAHTErsatzindikator($aHTErsatzindikator)
    {
        $this->AHT_Ersatzindikator = $aHTErsatzindikator;

        return $this;
    }

    /**
     * Get AHT_Ersatzindikator
     *
     * @return string 
     */
    public function getAHTErsatzindikator()
    {
        return $this->AHT_Ersatzindikator;
    }

    /**
     * Set AHU_Informationstext
     *
     * @param string $aHUInformationstext
     * @return T29500
     */
    public function setAHUInformationstext($aHUInformationstext)
    {
        $this->AHU_Informationstext = $aHUInformationstext;

        return $this;
    }

    /**
     * Get AHU_Informationstext
     *
     * @return string 
     */
    public function getAHUInformationstext()
    {
        return $this->AHU_Informationstext;
    }

    /**
     * Set AHV_Billigungsindikator
     *
     * @param string $aHVBilligungsindikator
     * @return T29500
     */
    public function setAHVBilligungsindikator($aHVBilligungsindikator)
    {
        $this->AHV_Billigungsindikator = $aHVBilligungsindikator;

        return $this;
    }

    /**
     * Get AHV_Billigungsindikator
     *
     * @return string 
     */
    public function getAHVBilligungsindikator()
    {
        return $this->AHV_Billigungsindikator;
    }
}
