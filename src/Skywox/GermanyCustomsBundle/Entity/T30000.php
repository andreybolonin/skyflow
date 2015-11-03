<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T30000
 */
class T30000
{
    /**
     * @var string
     */
    private $AIB_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu;

    /**
     * @var string
     */
    private $AIC_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung;

    /**
     * @var \DateTime
     */
    private $AID_Veröffentlichungsdatum_der_vollständigen_zeitweiligen_Auss;

    /**
     * @var string
     */
    private $AIE_Nummer_des_Amtsblattes;

    /**
     * @var string
     */
    private $AIF_Amtsblatt_Seite;

    /**
     * @var \DateTime
     */
    private $AIG_Datum_des_Gültigkeitsbeginns_der_vollständigen_zeitweilige;

    /**
     * @var \DateTime
     */
    private $AIH_Gültigkeitsendedatum_der_vollständigen_zeitweiligen_Ausset;

    /**
     * @var \DateTime
     */
    private $AII_tatsächliches_Endedatum_der_vollständigen_zeitweiligen_Aus;

    /**
     * @var string
     */
    private $AIJ_Funktion_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AIK_ID_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AIL_Funktion_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AIM_ID_der_expliziten_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AIN_Ersatzindikator;

    /**
     * @var string
     */
    private $AIO_Informationstext;

    /**
     * @var string
     */
    private $AIP_Billigungsindikator;


    /**
     * Set AIB_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu
     *
     * @param string $aIBFunktionDerVollständigenZeitweiligenAussetzungsverordnu
     * @return T30000
     */
    public function setAIBFunktionDerVollständigenZeitweiligenAussetzungsverordnu($aIBFunktionDerVollständigenZeitweiligenAussetzungsverordnu)
    {
        $this->AIB_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu = $aIBFunktionDerVollständigenZeitweiligenAussetzungsverordnu;

        return $this;
    }

    /**
     * Get AIB_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu
     *
     * @return string 
     */
    public function getAIBFunktionDerVollständigenZeitweiligenAussetzungsverordnu()
    {
        return $this->AIB_Funktion_der_vollständigen_zeitweiligen_Aussetzungsverordnu;
    }

    /**
     * Set AIC_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung
     *
     * @param string $aICIDDerVollständigenZeitweiligenAussetzungsverordnung
     * @return T30000
     */
    public function setAICIDDerVollständigenZeitweiligenAussetzungsverordnung($aICIDDerVollständigenZeitweiligenAussetzungsverordnung)
    {
        $this->AIC_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung = $aICIDDerVollständigenZeitweiligenAussetzungsverordnung;

        return $this;
    }

    /**
     * Get AIC_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung
     *
     * @return string 
     */
    public function getAICIDDerVollständigenZeitweiligenAussetzungsverordnung()
    {
        return $this->AIC_ID_der_vollständigen_zeitweiligen_Aussetzungsverordnung;
    }

    /**
     * Set AID_Veröffentlichungsdatum_der_vollständigen_zeitweiligen_Auss
     *
     * @param \DateTime $aIDVeröffentlichungsdatumDerVollständigenZeitweiligenAuss
     * @return T30000
     */
    public function setAIDVeröffentlichungsdatumDerVollständigenZeitweiligenAuss($aIDVeröffentlichungsdatumDerVollständigenZeitweiligenAuss)
    {
        $this->AID_Veröffentlichungsdatum_der_vollständigen_zeitweiligen_Auss = $aIDVeröffentlichungsdatumDerVollständigenZeitweiligenAuss;

        return $this;
    }

    /**
     * Get AID_Veröffentlichungsdatum_der_vollständigen_zeitweiligen_Auss
     *
     * @return \DateTime 
     */
    public function getAIDVeröffentlichungsdatumDerVollständigenZeitweiligenAuss()
    {
        return $this->AID_Veröffentlichungsdatum_der_vollständigen_zeitweiligen_Auss;
    }

    /**
     * Set AIE_Nummer_des_Amtsblattes
     *
     * @param string $aIENummerDesAmtsblattes
     * @return T30000
     */
    public function setAIENummerDesAmtsblattes($aIENummerDesAmtsblattes)
    {
        $this->AIE_Nummer_des_Amtsblattes = $aIENummerDesAmtsblattes;

        return $this;
    }

    /**
     * Get AIE_Nummer_des_Amtsblattes
     *
     * @return string 
     */
    public function getAIENummerDesAmtsblattes()
    {
        return $this->AIE_Nummer_des_Amtsblattes;
    }

    /**
     * Set AIF_Amtsblatt_Seite
     *
     * @param string $aIFAmtsblattSeite
     * @return T30000
     */
    public function setAIFAmtsblattSeite($aIFAmtsblattSeite)
    {
        $this->AIF_Amtsblatt_Seite = $aIFAmtsblattSeite;

        return $this;
    }

    /**
     * Get AIF_Amtsblatt_Seite
     *
     * @return string 
     */
    public function getAIFAmtsblattSeite()
    {
        return $this->AIF_Amtsblatt_Seite;
    }

    /**
     * Set AIG_Datum_des_Gültigkeitsbeginns_der_vollständigen_zeitweilige
     *
     * @param \DateTime $aIGDatumDesGültigkeitsbeginnsDerVollständigenZeitweilige
     * @return T30000
     */
    public function setAIGDatumDesGültigkeitsbeginnsDerVollständigenZeitweilige($aIGDatumDesGültigkeitsbeginnsDerVollständigenZeitweilige)
    {
        $this->AIG_Datum_des_Gültigkeitsbeginns_der_vollständigen_zeitweilige = $aIGDatumDesGültigkeitsbeginnsDerVollständigenZeitweilige;

        return $this;
    }

    /**
     * Get AIG_Datum_des_Gültigkeitsbeginns_der_vollständigen_zeitweilige
     *
     * @return \DateTime 
     */
    public function getAIGDatumDesGültigkeitsbeginnsDerVollständigenZeitweilige()
    {
        return $this->AIG_Datum_des_Gültigkeitsbeginns_der_vollständigen_zeitweilige;
    }

    /**
     * Set AIH_Gültigkeitsendedatum_der_vollständigen_zeitweiligen_Ausset
     *
     * @param \DateTime $aIHGültigkeitsendedatumDerVollständigenZeitweiligenAusset
     * @return T30000
     */
    public function setAIHGültigkeitsendedatumDerVollständigenZeitweiligenAusset($aIHGültigkeitsendedatumDerVollständigenZeitweiligenAusset)
    {
        $this->AIH_Gültigkeitsendedatum_der_vollständigen_zeitweiligen_Ausset = $aIHGültigkeitsendedatumDerVollständigenZeitweiligenAusset;

        return $this;
    }

    /**
     * Get AIH_Gültigkeitsendedatum_der_vollständigen_zeitweiligen_Ausset
     *
     * @return \DateTime 
     */
    public function getAIHGültigkeitsendedatumDerVollständigenZeitweiligenAusset()
    {
        return $this->AIH_Gültigkeitsendedatum_der_vollständigen_zeitweiligen_Ausset;
    }

    /**
     * Set AII_tatsächliches_Endedatum_der_vollständigen_zeitweiligen_Aus
     *
     * @param \DateTime $aIITatsächlichesEndedatumDerVollständigenZeitweiligenAus
     * @return T30000
     */
    public function setAIITatsächlichesEndedatumDerVollständigenZeitweiligenAus($aIITatsächlichesEndedatumDerVollständigenZeitweiligenAus)
    {
        $this->AII_tatsächliches_Endedatum_der_vollständigen_zeitweiligen_Aus = $aIITatsächlichesEndedatumDerVollständigenZeitweiligenAus;

        return $this;
    }

    /**
     * Get AII_tatsächliches_Endedatum_der_vollständigen_zeitweiligen_Aus
     *
     * @return \DateTime 
     */
    public function getAIITatsächlichesEndedatumDerVollständigenZeitweiligenAus()
    {
        return $this->AII_tatsächliches_Endedatum_der_vollständigen_zeitweiligen_Aus;
    }

    /**
     * Set AIJ_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aIJFunktionDerVollständigenAufhebungsverordnung
     * @return T30000
     */
    public function setAIJFunktionDerVollständigenAufhebungsverordnung($aIJFunktionDerVollständigenAufhebungsverordnung)
    {
        $this->AIJ_Funktion_der_vollständigen_Aufhebungsverordnung = $aIJFunktionDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AIJ_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAIJFunktionDerVollständigenAufhebungsverordnung()
    {
        return $this->AIJ_Funktion_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AIK_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aIKIDDerVollständigenAufhebungsverordnung
     * @return T30000
     */
    public function setAIKIDDerVollständigenAufhebungsverordnung($aIKIDDerVollständigenAufhebungsverordnung)
    {
        $this->AIK_ID_der_vollständigen_Aufhebungsverordnung = $aIKIDDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AIK_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAIKIDDerVollständigenAufhebungsverordnung()
    {
        return $this->AIK_ID_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AIL_Funktion_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aILFunktionDerExplizitenAufhebungsverordnung
     * @return T30000
     */
    public function setAILFunktionDerExplizitenAufhebungsverordnung($aILFunktionDerExplizitenAufhebungsverordnung)
    {
        $this->AIL_Funktion_der_expliziten_Aufhebungsverordnung = $aILFunktionDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AIL_Funktion_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAILFunktionDerExplizitenAufhebungsverordnung()
    {
        return $this->AIL_Funktion_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AIM_ID_der_expliziten_Aufhebungsverordnung
     *
     * @param string $aIMIDDerExplizitenAufhebungsverordnung
     * @return T30000
     */
    public function setAIMIDDerExplizitenAufhebungsverordnung($aIMIDDerExplizitenAufhebungsverordnung)
    {
        $this->AIM_ID_der_expliziten_Aufhebungsverordnung = $aIMIDDerExplizitenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AIM_ID_der_expliziten_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAIMIDDerExplizitenAufhebungsverordnung()
    {
        return $this->AIM_ID_der_expliziten_Aufhebungsverordnung;
    }

    /**
     * Set AIN_Ersatzindikator
     *
     * @param string $aINErsatzindikator
     * @return T30000
     */
    public function setAINErsatzindikator($aINErsatzindikator)
    {
        $this->AIN_Ersatzindikator = $aINErsatzindikator;

        return $this;
    }

    /**
     * Get AIN_Ersatzindikator
     *
     * @return string 
     */
    public function getAINErsatzindikator()
    {
        return $this->AIN_Ersatzindikator;
    }

    /**
     * Set AIO_Informationstext
     *
     * @param string $aIOInformationstext
     * @return T30000
     */
    public function setAIOInformationstext($aIOInformationstext)
    {
        $this->AIO_Informationstext = $aIOInformationstext;

        return $this;
    }

    /**
     * Get AIO_Informationstext
     *
     * @return string 
     */
    public function getAIOInformationstext()
    {
        return $this->AIO_Informationstext;
    }

    /**
     * Set AIP_Billigungsindikator
     *
     * @param string $aIPBilligungsindikator
     * @return T30000
     */
    public function setAIPBilligungsindikator($aIPBilligungsindikator)
    {
        $this->AIP_Billigungsindikator = $aIPBilligungsindikator;

        return $this;
    }

    /**
     * Get AIP_Billigungsindikator
     *
     * @return string 
     */
    public function getAIPBilligungsindikator()
    {
        return $this->AIP_Billigungsindikator;
    }
}
