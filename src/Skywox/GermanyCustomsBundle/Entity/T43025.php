<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43025
 */
class T43025
{
    /**
     * @var integer
     */
    private $ASK_SID_der_Maßnahme;

    /**
     * @var \DateTime
     */
    private $ASL_Anfangsdatum_der_teilweisen_zeitweiligen_Aussetzung;

    /**
     * @var \DateTime
     */
    private $ASM_Endedatum_der_teilweisen_zeitweiligen_Aussetzung;

    /**
     * @var string
     */
    private $ASN_ID_der_teilweisen_zeitweiligen_Aussetzungsverordnung;

    /**
     * @var string
     */
    private $ASO_Nummer_des_Amtsblatts_der_teilweisen_zeitweiligen_Aussetzung;

    /**
     * @var string
     */
    private $ASP_Amtsblattseite_der_teilweisen_zeitweiligen_Aussetzungsverord;

    /**
     * @var string
     */
    private $ASQ_ID_der_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $ASR_Nummer_des_Amtsblatts_der_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $ASS_Amtsblattseite_der_Aufhebungsverordnung;


    /**
     * Set ASK_SID_der_Maßnahme
     *
     * @param integer $aSKSIDDerMaßnahme
     * @return T43025
     */
    public function setASKSIDDerMaßnahme($aSKSIDDerMaßnahme)
    {
        $this->ASK_SID_der_Maßnahme = $aSKSIDDerMaßnahme;

        return $this;
    }

    /**
     * Get ASK_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getASKSIDDerMaßnahme()
    {
        return $this->ASK_SID_der_Maßnahme;
    }

    /**
     * Set ASL_Anfangsdatum_der_teilweisen_zeitweiligen_Aussetzung
     *
     * @param \DateTime $aSLAnfangsdatumDerTeilweisenZeitweiligenAussetzung
     * @return T43025
     */
    public function setASLAnfangsdatumDerTeilweisenZeitweiligenAussetzung($aSLAnfangsdatumDerTeilweisenZeitweiligenAussetzung)
    {
        $this->ASL_Anfangsdatum_der_teilweisen_zeitweiligen_Aussetzung = $aSLAnfangsdatumDerTeilweisenZeitweiligenAussetzung;

        return $this;
    }

    /**
     * Get ASL_Anfangsdatum_der_teilweisen_zeitweiligen_Aussetzung
     *
     * @return \DateTime 
     */
    public function getASLAnfangsdatumDerTeilweisenZeitweiligenAussetzung()
    {
        return $this->ASL_Anfangsdatum_der_teilweisen_zeitweiligen_Aussetzung;
    }

    /**
     * Set ASM_Endedatum_der_teilweisen_zeitweiligen_Aussetzung
     *
     * @param \DateTime $aSMEndedatumDerTeilweisenZeitweiligenAussetzung
     * @return T43025
     */
    public function setASMEndedatumDerTeilweisenZeitweiligenAussetzung($aSMEndedatumDerTeilweisenZeitweiligenAussetzung)
    {
        $this->ASM_Endedatum_der_teilweisen_zeitweiligen_Aussetzung = $aSMEndedatumDerTeilweisenZeitweiligenAussetzung;

        return $this;
    }

    /**
     * Get ASM_Endedatum_der_teilweisen_zeitweiligen_Aussetzung
     *
     * @return \DateTime 
     */
    public function getASMEndedatumDerTeilweisenZeitweiligenAussetzung()
    {
        return $this->ASM_Endedatum_der_teilweisen_zeitweiligen_Aussetzung;
    }

    /**
     * Set ASN_ID_der_teilweisen_zeitweiligen_Aussetzungsverordnung
     *
     * @param string $aSNIDDerTeilweisenZeitweiligenAussetzungsverordnung
     * @return T43025
     */
    public function setASNIDDerTeilweisenZeitweiligenAussetzungsverordnung($aSNIDDerTeilweisenZeitweiligenAussetzungsverordnung)
    {
        $this->ASN_ID_der_teilweisen_zeitweiligen_Aussetzungsverordnung = $aSNIDDerTeilweisenZeitweiligenAussetzungsverordnung;

        return $this;
    }

    /**
     * Get ASN_ID_der_teilweisen_zeitweiligen_Aussetzungsverordnung
     *
     * @return string 
     */
    public function getASNIDDerTeilweisenZeitweiligenAussetzungsverordnung()
    {
        return $this->ASN_ID_der_teilweisen_zeitweiligen_Aussetzungsverordnung;
    }

    /**
     * Set ASO_Nummer_des_Amtsblatts_der_teilweisen_zeitweiligen_Aussetzung
     *
     * @param string $aSONummerDesAmtsblattsDerTeilweisenZeitweiligenAussetzung
     * @return T43025
     */
    public function setASONummerDesAmtsblattsDerTeilweisenZeitweiligenAussetzung($aSONummerDesAmtsblattsDerTeilweisenZeitweiligenAussetzung)
    {
        $this->ASO_Nummer_des_Amtsblatts_der_teilweisen_zeitweiligen_Aussetzung = $aSONummerDesAmtsblattsDerTeilweisenZeitweiligenAussetzung;

        return $this;
    }

    /**
     * Get ASO_Nummer_des_Amtsblatts_der_teilweisen_zeitweiligen_Aussetzung
     *
     * @return string 
     */
    public function getASONummerDesAmtsblattsDerTeilweisenZeitweiligenAussetzung()
    {
        return $this->ASO_Nummer_des_Amtsblatts_der_teilweisen_zeitweiligen_Aussetzung;
    }

    /**
     * Set ASP_Amtsblattseite_der_teilweisen_zeitweiligen_Aussetzungsverord
     *
     * @param string $aSPAmtsblattseiteDerTeilweisenZeitweiligenAussetzungsverord
     * @return T43025
     */
    public function setASPAmtsblattseiteDerTeilweisenZeitweiligenAussetzungsverord($aSPAmtsblattseiteDerTeilweisenZeitweiligenAussetzungsverord)
    {
        $this->ASP_Amtsblattseite_der_teilweisen_zeitweiligen_Aussetzungsverord = $aSPAmtsblattseiteDerTeilweisenZeitweiligenAussetzungsverord;

        return $this;
    }

    /**
     * Get ASP_Amtsblattseite_der_teilweisen_zeitweiligen_Aussetzungsverord
     *
     * @return string 
     */
    public function getASPAmtsblattseiteDerTeilweisenZeitweiligenAussetzungsverord()
    {
        return $this->ASP_Amtsblattseite_der_teilweisen_zeitweiligen_Aussetzungsverord;
    }

    /**
     * Set ASQ_ID_der_Aufhebungsverordnung
     *
     * @param string $aSQIDDerAufhebungsverordnung
     * @return T43025
     */
    public function setASQIDDerAufhebungsverordnung($aSQIDDerAufhebungsverordnung)
    {
        $this->ASQ_ID_der_Aufhebungsverordnung = $aSQIDDerAufhebungsverordnung;

        return $this;
    }

    /**
     * Get ASQ_ID_der_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getASQIDDerAufhebungsverordnung()
    {
        return $this->ASQ_ID_der_Aufhebungsverordnung;
    }

    /**
     * Set ASR_Nummer_des_Amtsblatts_der_Aufhebungsverordnung
     *
     * @param string $aSRNummerDesAmtsblattsDerAufhebungsverordnung
     * @return T43025
     */
    public function setASRNummerDesAmtsblattsDerAufhebungsverordnung($aSRNummerDesAmtsblattsDerAufhebungsverordnung)
    {
        $this->ASR_Nummer_des_Amtsblatts_der_Aufhebungsverordnung = $aSRNummerDesAmtsblattsDerAufhebungsverordnung;

        return $this;
    }

    /**
     * Get ASR_Nummer_des_Amtsblatts_der_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getASRNummerDesAmtsblattsDerAufhebungsverordnung()
    {
        return $this->ASR_Nummer_des_Amtsblatts_der_Aufhebungsverordnung;
    }

    /**
     * Set ASS_Amtsblattseite_der_Aufhebungsverordnung
     *
     * @param string $aSSAmtsblattseiteDerAufhebungsverordnung
     * @return T43025
     */
    public function setASSAmtsblattseiteDerAufhebungsverordnung($aSSAmtsblattseiteDerAufhebungsverordnung)
    {
        $this->ASS_Amtsblattseite_der_Aufhebungsverordnung = $aSSAmtsblattseiteDerAufhebungsverordnung;

        return $this;
    }

    /**
     * Get ASS_Amtsblattseite_der_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getASSAmtsblattseiteDerAufhebungsverordnung()
    {
        return $this->ASS_Amtsblattseite_der_Aufhebungsverordnung;
    }
}
