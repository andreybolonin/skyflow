<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T28000
 */
class T28000
{
    /**
     * @var string
     */
    private $AFT_Explizite_Aufhebungsverordnungsfunktion;

    /**
     * @var string
     */
    private $AFU_ID_der_expliziten_Aufhebungsverordnung;

    /**
     * @var \DateTime
     */
    private $AFV_Veröffentlichungsdatum_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AFW_Nummer_des_Amtsblattes;

    /**
     * @var string
     */
    private $AFX_Amtsblatt_Seite;

    /**
     * @var string
     */
    private $AFY_Ersatzindikator;

    /**
     * @var \DateTime
     */
    private $AFZ_Aufhebungsdatum;

    /**
     * @var string
     */
    private $AGA_Informationstext;

    /**
     * @var string
     */
    private $AGB_Billigungsindikator;


    /**
     * Set AFT_Explizite_Aufhebungsverordnungsfunktion
     *
     * @param string $aFTExpliziteAufhebungsverordnungsfunktion
     * @return T28000
     */
    public function setAFTExpliziteAufhebungsverordnungsfunktion($aFTExpliziteAufhebungsverordnungsfunktion)
    {
        $this->AFT_Explizite_Aufhebungsverordnungsfunktion = $aFTExpliziteAufhebungsverordnungsfunktion;

        return $this;
    }

    /**
     * Get AFT_Explizite_Aufhebungsverordnungsfunktion
     *
     * @return string 
     */
    public function getAFTExpliziteAufhebungsverordnungsfunktion()
    {
        return $this->AFT_Explizite_Aufhebungsverordnungsfunktion;
    }

    /**
     * Set AFU_ID_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aFUIDDerExplizitenAufhebungsverordnung
     * @return T28000
     */
    public function setAFUIDDerExplizitenAufhebungsverordnung($aFUIDDerExplizitenAufhebungsverordnung)
    {
        $this->AFU_ID_der_expliziten_Aufhebungsverordnung = $aFUIDDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AFU_ID_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAFUIDDerExplizitenAufhebungsverordnung()
    {
        return $this->AFU_ID_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AFV_Veröffentlichungsdatum_der_expliziten_Aufhebungsverordnung
     *
     * @param \DateTime $aFVVeröffentlichungsdatumDerExplizitenAufhebungsverordnung
     * @return T28000
     */
    public function setAFVVeröffentlichungsdatumDerExplizitenAufhebungsverordnung($aFVVeröffentlichungsdatumDerExplizitenAufhebungsverordnung)
    {
        $this->AFV_Veröffentlichungsdatum_der_expliziten_Aufhebungsverordnung = $aFVVeröffentlichungsdatumDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AFV_Veröffentlichungsdatum_der_expliziten_Aufhebungsverordnung
     *
     * @return \DateTime 
     */
    public function getAFVVeröffentlichungsdatumDerExplizitenAufhebungsverordnung()
    {
        return $this->AFV_Veröffentlichungsdatum_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AFW_Nummer_des_Amtsblattes
     *
     * @param string $aFWNummerDesAmtsblattes
     * @return T28000
     */
    public function setAFWNummerDesAmtsblattes($aFWNummerDesAmtsblattes)
    {
        $this->AFW_Nummer_des_Amtsblattes = $aFWNummerDesAmtsblattes;

        return $this;
    }

    /**
     * Get AFW_Nummer_des_Amtsblattes
     *
     * @return string 
     */
    public function getAFWNummerDesAmtsblattes()
    {
        return $this->AFW_Nummer_des_Amtsblattes;
    }

    /**
     * Set AFX_Amtsblatt_Seite
     *
     * @param string $aFXAmtsblattSeite
     * @return T28000
     */
    public function setAFXAmtsblattSeite($aFXAmtsblattSeite)
    {
        $this->AFX_Amtsblatt_Seite = $aFXAmtsblattSeite;

        return $this;
    }

    /**
     * Get AFX_Amtsblatt_Seite
     *
     * @return string 
     */
    public function getAFXAmtsblattSeite()
    {
        return $this->AFX_Amtsblatt_Seite;
    }

    /**
     * Set AFY_Ersatzindikator
     *
     * @param string $aFYErsatzindikator
     * @return T28000
     */
    public function setAFYErsatzindikator($aFYErsatzindikator)
    {
        $this->AFY_Ersatzindikator = $aFYErsatzindikator;

        return $this;
    }

    /**
     * Get AFY_Ersatzindikator
     *
     * @return string 
     */
    public function getAFYErsatzindikator()
    {
        return $this->AFY_Ersatzindikator;
    }

    /**
     * Set AFZ_Aufhebungsdatum
     *
     * @param \DateTime $aFZAufhebungsdatum
     * @return T28000
     */
    public function setAFZAufhebungsdatum($aFZAufhebungsdatum)
    {
        $this->AFZ_Aufhebungsdatum = $aFZAufhebungsdatum;

        return $this;
    }

    /**
     * Get AFZ_Aufhebungsdatum
     *
     * @return \DateTime 
     */
    public function getAFZAufhebungsdatum()
    {
        return $this->AFZ_Aufhebungsdatum;
    }

    /**
     * Set AGA_Informationstext
     *
     * @param string $aGAInformationstext
     * @return T28000
     */
    public function setAGAInformationstext($aGAInformationstext)
    {
        $this->AGA_Informationstext = $aGAInformationstext;

        return $this;
    }

    /**
     * Get AGA_Informationstext
     *
     * @return string 
     */
    public function getAGAInformationstext()
    {
        return $this->AGA_Informationstext;
    }

    /**
     * Set AGB_Billigungsindikator
     *
     * @param string $aGBBilligungsindikator
     * @return T28000
     */
    public function setAGBBilligungsindikator($aGBBilligungsindikator)
    {
        $this->AGB_Billigungsindikator = $aGBBilligungsindikator;

        return $this;
    }

    /**
     * Get AGB_Billigungsindikator
     *
     * @return string 
     */
    public function getAGBBilligungsindikator()
    {
        return $this->AGB_Billigungsindikator;
    }
}
