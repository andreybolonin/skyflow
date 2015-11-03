<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N27500
 */
class N27500
{
    /**
     * @var integer
     */
    private $AYJ_SID_der_TARIC_Warennomenklatur;

    /**
     * @var string
     */
    private $AYK_Handelsbewegungscode;

    /**
     * @var string
     */
    private $AYL_Ursprungsland;

    /**
     * @var \DateTime
     */
    private $AYM_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AYN_Endedatum;

    /**
     * @var integer
     */
    private $AYO_SID_der_Zuordnung_Warennomenklatur__Hinweise;

    /**
     * @var string
     */
    private $AYP_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AYQ_Warenliniensuffix;

    /**
     * @var \DateTime
     */
    private $AYR_Beginndatum_der_Warennomenklaturlinie;

    /**
     * @var string
     */
    private $AYS_lizenzfreie_Menge;

    /**
     * @var string
     */
    private $AYT_Schlüssel_der_Maßeinheit;

    /**
     * @var string
     */
    private $AYU_Qualifikator_der_Maßeinheit;


    /**
     * Set AYJ_SID_der_TARIC_Warennomenklatur
     *
     * @param integer $aYJSIDDerTARICWarennomenklatur
     * @return N27500
     */
    public function setAYJSIDDerTARICWarennomenklatur($aYJSIDDerTARICWarennomenklatur)
    {
        $this->AYJ_SID_der_TARIC_Warennomenklatur = $aYJSIDDerTARICWarennomenklatur;

        return $this;
    }

    /**
     * Get AYJ_SID_der_TARIC_Warennomenklatur
     *
     * @return integer 
     */
    public function getAYJSIDDerTARICWarennomenklatur()
    {
        return $this->AYJ_SID_der_TARIC_Warennomenklatur;
    }

    /**
     * Set AYK_Handelsbewegungscode
     *
     * @param string $aYKHandelsbewegungscode
     * @return N27500
     */
    public function setAYKHandelsbewegungscode($aYKHandelsbewegungscode)
    {
        $this->AYK_Handelsbewegungscode = $aYKHandelsbewegungscode;

        return $this;
    }

    /**
     * Get AYK_Handelsbewegungscode
     *
     * @return string 
     */
    public function getAYKHandelsbewegungscode()
    {
        return $this->AYK_Handelsbewegungscode;
    }

    /**
     * Set AYL_Ursprungsland
     *
     * @param string $aYLUrsprungsland
     * @return N27500
     */
    public function setAYLUrsprungsland($aYLUrsprungsland)
    {
        $this->AYL_Ursprungsland = $aYLUrsprungsland;

        return $this;
    }

    /**
     * Get AYL_Ursprungsland
     *
     * @return string 
     */
    public function getAYLUrsprungsland()
    {
        return $this->AYL_Ursprungsland;
    }

    /**
     * Set AYM_Beginndatum
     *
     * @param \DateTime $aYMBeginndatum
     * @return N27500
     */
    public function setAYMBeginndatum($aYMBeginndatum)
    {
        $this->AYM_Beginndatum = $aYMBeginndatum;

        return $this;
    }

    /**
     * Get AYM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAYMBeginndatum()
    {
        return $this->AYM_Beginndatum;
    }

    /**
     * Set AYN_Endedatum
     *
     * @param \DateTime $aYNEndedatum
     * @return N27500
     */
    public function setAYNEndedatum($aYNEndedatum)
    {
        $this->AYN_Endedatum = $aYNEndedatum;

        return $this;
    }

    /**
     * Get AYN_Endedatum
     *
     * @return \DateTime 
     */
    public function getAYNEndedatum()
    {
        return $this->AYN_Endedatum;
    }

    /**
     * Set AYO_SID_der_Zuordnung_Warennomenklatur__Hinweise
     *
     * @param integer $aYOSIDDerZuordnungWarennomenklaturHinweise
     * @return N27500
     */
    public function setAYOSIDDerZuordnungWarennomenklaturHinweise($aYOSIDDerZuordnungWarennomenklaturHinweise)
    {
        $this->AYO_SID_der_Zuordnung_Warennomenklatur__Hinweise = $aYOSIDDerZuordnungWarennomenklaturHinweise;

        return $this;
    }

    /**
     * Get AYO_SID_der_Zuordnung_Warennomenklatur__Hinweise
     *
     * @return integer 
     */
    public function getAYOSIDDerZuordnungWarennomenklaturHinweise()
    {
        return $this->AYO_SID_der_Zuordnung_Warennomenklatur__Hinweise;
    }

    /**
     * Set AYP_Warennomenklatur_ID
     *
     * @param string $aYPWarennomenklaturID
     * @return N27500
     */
    public function setAYPWarennomenklaturID($aYPWarennomenklaturID)
    {
        $this->AYP_Warennomenklatur_ID = $aYPWarennomenklaturID;

        return $this;
    }

    /**
     * Get AYP_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAYPWarennomenklaturID()
    {
        return $this->AYP_Warennomenklatur_ID;
    }

    /**
     * Set AYQ_Warenliniensuffix
     *
     * @param string $aYQWarenliniensuffix
     * @return N27500
     */
    public function setAYQWarenliniensuffix($aYQWarenliniensuffix)
    {
        $this->AYQ_Warenliniensuffix = $aYQWarenliniensuffix;

        return $this;
    }

    /**
     * Get AYQ_Warenliniensuffix
     *
     * @return string 
     */
    public function getAYQWarenliniensuffix()
    {
        return $this->AYQ_Warenliniensuffix;
    }

    /**
     * Set AYR_Beginndatum_der_Warennomenklaturlinie
     *
     * @param \DateTime $aYRBeginndatumDerWarennomenklaturlinie
     * @return N27500
     */
    public function setAYRBeginndatumDerWarennomenklaturlinie($aYRBeginndatumDerWarennomenklaturlinie)
    {
        $this->AYR_Beginndatum_der_Warennomenklaturlinie = $aYRBeginndatumDerWarennomenklaturlinie;

        return $this;
    }

    /**
     * Get AYR_Beginndatum_der_Warennomenklaturlinie
     *
     * @return \DateTime 
     */
    public function getAYRBeginndatumDerWarennomenklaturlinie()
    {
        return $this->AYR_Beginndatum_der_Warennomenklaturlinie;
    }

    /**
     * Set AYS_lizenzfreie_Menge
     *
     * @param string $aYSLizenzfreieMenge
     * @return N27500
     */
    public function setAYSLizenzfreieMenge($aYSLizenzfreieMenge)
    {
        $this->AYS_lizenzfreie_Menge = $aYSLizenzfreieMenge;

        return $this;
    }

    /**
     * Get AYS_lizenzfreie_Menge
     *
     * @return string 
     */
    public function getAYSLizenzfreieMenge()
    {
        return $this->AYS_lizenzfreie_Menge;
    }

    /**
     * Set AYT_Schlüssel_der_Maßeinheit
     *
     * @param string $aYTSchlüsselDerMaßeinheit
     * @return N27500
     */
    public function setAYTSchlüsselDerMaßeinheit($aYTSchlüsselDerMaßeinheit)
    {
        $this->AYT_Schlüssel_der_Maßeinheit = $aYTSchlüsselDerMaßeinheit;

        return $this;
    }

    /**
     * Get AYT_Schlüssel_der_Maßeinheit
     *
     * @return string 
     */
    public function getAYTSchlüsselDerMaßeinheit()
    {
        return $this->AYT_Schlüssel_der_Maßeinheit;
    }

    /**
     * Set AYU_Qualifikator_der_Maßeinheit
     *
     * @param string $aYUQualifikatorDerMaßeinheit
     * @return N27500
     */
    public function setAYUQualifikatorDerMaßeinheit($aYUQualifikatorDerMaßeinheit)
    {
        $this->AYU_Qualifikator_der_Maßeinheit = $aYUQualifikatorDerMaßeinheit;

        return $this;
    }

    /**
     * Get AYU_Qualifikator_der_Maßeinheit
     *
     * @return string 
     */
    public function getAYUQualifikatorDerMaßeinheit()
    {
        return $this->AYU_Qualifikator_der_Maßeinheit;
    }
}
