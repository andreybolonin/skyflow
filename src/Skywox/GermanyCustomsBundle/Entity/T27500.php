<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T27500
 */
class T27500
{
    /**
     * @var string
     */
    private $AFL_Funktion_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var string
     */
    private $AFM_ID_der_vollständigen_Aufhebungsverordnung;

    /**
     * @var \DateTime
     */
    private $AFN_Veröffentlichungsdatum_der_vollständigen_Aufhebungsverordn;

    /**
     * @var string
     */
    private $AFO_Nummer_des_Amtsblattes;

    /**
     * @var string
     */
    private $AFP_Amtsblatt_Seite;

    /**
     * @var string
     */
    private $AFQ_Ersatzindikator;

    /**
     * @var string
     */
    private $AFR_Informationstext;

    /**
     * @var string
     */
    private $AFS_Billigungsindikator;


    /**
     * Set AFL_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aFLFunktionDerVollständigenAufhebungsverordnung
     * @return T27500
     */
    public function setAFLFunktionDerVollständigenAufhebungsverordnung($aFLFunktionDerVollständigenAufhebungsverordnung)
    {
        $this->AFL_Funktion_der_vollständigen_Aufhebungsverordnung = $aFLFunktionDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AFL_Funktion_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAFLFunktionDerVollständigenAufhebungsverordnung()
    {
        return $this->AFL_Funktion_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AFM_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @param string $aFMIDDerVollständigenAufhebungsverordnung
     * @return T27500
     */
    public function setAFMIDDerVollständigenAufhebungsverordnung($aFMIDDerVollständigenAufhebungsverordnung)
    {
        $this->AFM_ID_der_vollständigen_Aufhebungsverordnung = $aFMIDDerVollständigenAufhebungsverordnung;

        return $this;
    }

    /**
     * Get AFM_ID_der_vollständigen_Aufhebungsverordnung
     *
     * @return string 
     */
    public function getAFMIDDerVollständigenAufhebungsverordnung()
    {
        return $this->AFM_ID_der_vollständigen_Aufhebungsverordnung;
    }

    /**
     * Set AFN_Veröffentlichungsdatum_der_vollständigen_Aufhebungsverordn
     *
     * @param \DateTime $aFNVeröffentlichungsdatumDerVollständigenAufhebungsverordn
     * @return T27500
     */
    public function setAFNVeröffentlichungsdatumDerVollständigenAufhebungsverordn($aFNVeröffentlichungsdatumDerVollständigenAufhebungsverordn)
    {
        $this->AFN_Veröffentlichungsdatum_der_vollständigen_Aufhebungsverordn = $aFNVeröffentlichungsdatumDerVollständigenAufhebungsverordn;

        return $this;
    }

    /**
     * Get AFN_Veröffentlichungsdatum_der_vollständigen_Aufhebungsverordn
     *
     * @return \DateTime 
     */
    public function getAFNVeröffentlichungsdatumDerVollständigenAufhebungsverordn()
    {
        return $this->AFN_Veröffentlichungsdatum_der_vollständigen_Aufhebungsverordn;
    }

    /**
     * Set AFO_Nummer_des_Amtsblattes
     *
     * @param string $aFONummerDesAmtsblattes
     * @return T27500
     */
    public function setAFONummerDesAmtsblattes($aFONummerDesAmtsblattes)
    {
        $this->AFO_Nummer_des_Amtsblattes = $aFONummerDesAmtsblattes;

        return $this;
    }

    /**
     * Get AFO_Nummer_des_Amtsblattes
     *
     * @return string 
     */
    public function getAFONummerDesAmtsblattes()
    {
        return $this->AFO_Nummer_des_Amtsblattes;
    }

    /**
     * Set AFP_Amtsblatt_Seite
     *
     * @param string $aFPAmtsblattSeite
     * @return T27500
     */
    public function setAFPAmtsblattSeite($aFPAmtsblattSeite)
    {
        $this->AFP_Amtsblatt_Seite = $aFPAmtsblattSeite;

        return $this;
    }

    /**
     * Get AFP_Amtsblatt_Seite
     *
     * @return string 
     */
    public function getAFPAmtsblattSeite()
    {
        return $this->AFP_Amtsblatt_Seite;
    }

    /**
     * Set AFQ_Ersatzindikator
     *
     * @param string $aFQErsatzindikator
     * @return T27500
     */
    public function setAFQErsatzindikator($aFQErsatzindikator)
    {
        $this->AFQ_Ersatzindikator = $aFQErsatzindikator;

        return $this;
    }

    /**
     * Get AFQ_Ersatzindikator
     *
     * @return string 
     */
    public function getAFQErsatzindikator()
    {
        return $this->AFQ_Ersatzindikator;
    }

    /**
     * Set AFR_Informationstext
     *
     * @param string $aFRInformationstext
     * @return T27500
     */
    public function setAFRInformationstext($aFRInformationstext)
    {
        $this->AFR_Informationstext = $aFRInformationstext;

        return $this;
    }

    /**
     * Get AFR_Informationstext
     *
     * @return string 
     */
    public function getAFRInformationstext()
    {
        return $this->AFR_Informationstext;
    }

    /**
     * Set AFS_Billigungsindikator
     *
     * @param string $aFSBilligungsindikator
     * @return T27500
     */
    public function setAFSBilligungsindikator($aFSBilligungsindikator)
    {
        $this->AFS_Billigungsindikator = $aFSBilligungsindikator;

        return $this;
    }

    /**
     * Get AFS_Billigungsindikator
     *
     * @return string 
     */
    public function getAFSBilligungsindikator()
    {
        return $this->AFS_Billigungsindikator;
    }
}
