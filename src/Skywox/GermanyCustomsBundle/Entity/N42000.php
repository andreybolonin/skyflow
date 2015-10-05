<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N42000
 */
class N42000
{
    /**
     * @var integer
     */
    private $BEI_SID_der_nationalen_Warennomenklatur;

    /**
     * @var integer
     */
    private $BEJ_SID_der_TARIC_Nomenklatur;

    /**
     * @var string
     */
    private $BEK_ID_der_nationalen_Warennomenklatur;

    /**
     * @var string
     */
    private $BEL_Warenliniensuffix;

    /**
     * @var \DateTime
     */
    private $BEM_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BEN_Endedatum;

    /**
     * @var string
     */
    private $BEO_Anzahl_der_Führungsstriche;

    /**
     * @var string
     */
    private $BEP_Währungseinheit;

    /**
     * @var string
     */
    private $BEQ_Beschreibung;


    /**
     * Set BEI_SID_der_nationalen_Warennomenklatur
     *
     * @param integer $bEISIDDerNationalenWarennomenklatur
     * @return N42000
     */
    public function setBEISIDDerNationalenWarennomenklatur($bEISIDDerNationalenWarennomenklatur)
    {
        $this->BEI_SID_der_nationalen_Warennomenklatur = $bEISIDDerNationalenWarennomenklatur;

        return $this;
    }

    /**
     * Get BEI_SID_der_nationalen_Warennomenklatur
     *
     * @return integer 
     */
    public function getBEISIDDerNationalenWarennomenklatur()
    {
        return $this->BEI_SID_der_nationalen_Warennomenklatur;
    }

    /**
     * Set BEJ_SID_der_TARIC_Nomenklatur
     *
     * @param integer $bEJSIDDerTARICNomenklatur
     * @return N42000
     */
    public function setBEJSIDDerTARICNomenklatur($bEJSIDDerTARICNomenklatur)
    {
        $this->BEJ_SID_der_TARIC_Nomenklatur = $bEJSIDDerTARICNomenklatur;

        return $this;
    }

    /**
     * Get BEJ_SID_der_TARIC_Nomenklatur
     *
     * @return integer 
     */
    public function getBEJSIDDerTARICNomenklatur()
    {
        return $this->BEJ_SID_der_TARIC_Nomenklatur;
    }

    /**
     * Set BEK_ID_der_nationalen_Warennomenklatur
     *
     * @param string $bEKIDDerNationalenWarennomenklatur
     * @return N42000
     */
    public function setBEKIDDerNationalenWarennomenklatur($bEKIDDerNationalenWarennomenklatur)
    {
        $this->BEK_ID_der_nationalen_Warennomenklatur = $bEKIDDerNationalenWarennomenklatur;

        return $this;
    }

    /**
     * Get BEK_ID_der_nationalen_Warennomenklatur
     *
     * @return string 
     */
    public function getBEKIDDerNationalenWarennomenklatur()
    {
        return $this->BEK_ID_der_nationalen_Warennomenklatur;
    }

    /**
     * Set BEL_Warenliniensuffix
     *
     * @param string $bELWarenliniensuffix
     * @return N42000
     */
    public function setBELWarenliniensuffix($bELWarenliniensuffix)
    {
        $this->BEL_Warenliniensuffix = $bELWarenliniensuffix;

        return $this;
    }

    /**
     * Get BEL_Warenliniensuffix
     *
     * @return string 
     */
    public function getBELWarenliniensuffix()
    {
        return $this->BEL_Warenliniensuffix;
    }

    /**
     * Set BEM_Beginndatum
     *
     * @param \DateTime $bEMBeginndatum
     * @return N42000
     */
    public function setBEMBeginndatum($bEMBeginndatum)
    {
        $this->BEM_Beginndatum = $bEMBeginndatum;

        return $this;
    }

    /**
     * Get BEM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBEMBeginndatum()
    {
        return $this->BEM_Beginndatum;
    }

    /**
     * Set BEN_Endedatum
     *
     * @param \DateTime $bENEndedatum
     * @return N42000
     */
    public function setBENEndedatum($bENEndedatum)
    {
        $this->BEN_Endedatum = $bENEndedatum;

        return $this;
    }

    /**
     * Get BEN_Endedatum
     *
     * @return \DateTime 
     */
    public function getBENEndedatum()
    {
        return $this->BEN_Endedatum;
    }

    /**
     * Set BEO_Anzahl_der_Führungsstriche
     *
     * @param string $bEOAnzahlDerFührungsstriche
     * @return N42000
     */
    public function setBEOAnzahlDerFührungsstriche($bEOAnzahlDerFührungsstriche)
    {
        $this->BEO_Anzahl_der_Führungsstriche = $bEOAnzahlDerFührungsstriche;

        return $this;
    }

    /**
     * Get BEO_Anzahl_der_Führungsstriche
     *
     * @return string 
     */
    public function getBEOAnzahlDerFührungsstriche()
    {
        return $this->BEO_Anzahl_der_Führungsstriche;
    }

    /**
     * Set BEP_Währungseinheit
     *
     * @param string $bEPWährungseinheit
     * @return N42000
     */
    public function setBEPWährungseinheit($bEPWährungseinheit)
    {
        $this->BEP_Währungseinheit = $bEPWährungseinheit;

        return $this;
    }

    /**
     * Get BEP_Währungseinheit
     *
     * @return string 
     */
    public function getBEPWährungseinheit()
    {
        return $this->BEP_Währungseinheit;
    }

    /**
     * Set BEQ_Beschreibung
     *
     * @param string $bEQBeschreibung
     * @return N42000
     */
    public function setBEQBeschreibung($bEQBeschreibung)
    {
        $this->BEQ_Beschreibung = $bEQBeschreibung;

        return $this;
    }

    /**
     * Get BEQ_Beschreibung
     *
     * @return string 
     */
    public function getBEQBeschreibung()
    {
        return $this->BEQ_Beschreibung;
    }
}
