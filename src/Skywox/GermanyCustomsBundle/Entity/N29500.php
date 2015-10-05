<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N29500
 */
class N29500
{
    /**
     * @var string
     */
    private $AZN_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AZO_Warenliniensuffix;

    /**
     * @var \DateTime
     */
    private $AZP_Beginndatum_der_Warennomenklatur_ID;

    /**
     * @var \DateTime
     */
    private $AZQ_Beginndatum_des_Mittelwerts;

    /**
     * @var \DateTime
     */
    private $AZR_Endedatum_des_Mittelwerts;

    /**
     * @var string
     */
    private $AZS_EX_Präfix_Mittelwert;

    /**
     * @var string
     */
    private $AZT_Betrag;

    /**
     * @var string
     */
    private $AZU_Maßeinheit;

    /**
     * @var string
     */
    private $AZV_Maßeinheitsqualifikator;


    /**
     * Set AZN_Warennomenklatur_ID
     *
     * @param string $aZNWarennomenklaturID
     * @return N29500
     */
    public function setAZNWarennomenklaturID($aZNWarennomenklaturID)
    {
        $this->AZN_Warennomenklatur_ID = $aZNWarennomenklaturID;

        return $this;
    }

    /**
     * Get AZN_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAZNWarennomenklaturID()
    {
        return $this->AZN_Warennomenklatur_ID;
    }

    /**
     * Set AZO_Warenliniensuffix
     *
     * @param string $aZOWarenliniensuffix
     * @return N29500
     */
    public function setAZOWarenliniensuffix($aZOWarenliniensuffix)
    {
        $this->AZO_Warenliniensuffix = $aZOWarenliniensuffix;

        return $this;
    }

    /**
     * Get AZO_Warenliniensuffix
     *
     * @return string 
     */
    public function getAZOWarenliniensuffix()
    {
        return $this->AZO_Warenliniensuffix;
    }

    /**
     * Set AZP_Beginndatum_der_Warennomenklatur_ID
     *
     * @param \DateTime $aZPBeginndatumDerWarennomenklaturID
     * @return N29500
     */
    public function setAZPBeginndatumDerWarennomenklaturID($aZPBeginndatumDerWarennomenklaturID)
    {
        $this->AZP_Beginndatum_der_Warennomenklatur_ID = $aZPBeginndatumDerWarennomenklaturID;

        return $this;
    }

    /**
     * Get AZP_Beginndatum_der_Warennomenklatur_ID
     *
     * @return \DateTime 
     */
    public function getAZPBeginndatumDerWarennomenklaturID()
    {
        return $this->AZP_Beginndatum_der_Warennomenklatur_ID;
    }

    /**
     * Set AZQ_Beginndatum_des_Mittelwerts
     *
     * @param \DateTime $aZQBeginndatumDesMittelwerts
     * @return N29500
     */
    public function setAZQBeginndatumDesMittelwerts($aZQBeginndatumDesMittelwerts)
    {
        $this->AZQ_Beginndatum_des_Mittelwerts = $aZQBeginndatumDesMittelwerts;

        return $this;
    }

    /**
     * Get AZQ_Beginndatum_des_Mittelwerts
     *
     * @return \DateTime 
     */
    public function getAZQBeginndatumDesMittelwerts()
    {
        return $this->AZQ_Beginndatum_des_Mittelwerts;
    }

    /**
     * Set AZR_Endedatum_des_Mittelwerts
     *
     * @param \DateTime $aZREndedatumDesMittelwerts
     * @return N29500
     */
    public function setAZREndedatumDesMittelwerts($aZREndedatumDesMittelwerts)
    {
        $this->AZR_Endedatum_des_Mittelwerts = $aZREndedatumDesMittelwerts;

        return $this;
    }

    /**
     * Get AZR_Endedatum_des_Mittelwerts
     *
     * @return \DateTime 
     */
    public function getAZREndedatumDesMittelwerts()
    {
        return $this->AZR_Endedatum_des_Mittelwerts;
    }

    /**
     * Set AZS_EX_Präfix_Mittelwert
     *
     * @param string $aZSEXPräfixMittelwert
     * @return N29500
     */
    public function setAZSEXPräfixMittelwert($aZSEXPräfixMittelwert)
    {
        $this->AZS_EX_Präfix_Mittelwert = $aZSEXPräfixMittelwert;

        return $this;
    }

    /**
     * Get AZS_EX_Präfix_Mittelwert
     *
     * @return string 
     */
    public function getAZSEXPräfixMittelwert()
    {
        return $this->AZS_EX_Präfix_Mittelwert;
    }

    /**
     * Set AZT_Betrag
     *
     * @param string $aZTBetrag
     * @return N29500
     */
    public function setAZTBetrag($aZTBetrag)
    {
        $this->AZT_Betrag = $aZTBetrag;

        return $this;
    }

    /**
     * Get AZT_Betrag
     *
     * @return string 
     */
    public function getAZTBetrag()
    {
        return $this->AZT_Betrag;
    }

    /**
     * Set AZU_Maßeinheit
     *
     * @param string $aZUMaßeinheit
     * @return N29500
     */
    public function setAZUMaßeinheit($aZUMaßeinheit)
    {
        $this->AZU_Maßeinheit = $aZUMaßeinheit;

        return $this;
    }

    /**
     * Get AZU_Maßeinheit
     *
     * @return string 
     */
    public function getAZUMaßeinheit()
    {
        return $this->AZU_Maßeinheit;
    }

    /**
     * Set AZV_Maßeinheitsqualifikator
     *
     * @param string $aZVMaßeinheitsqualifikator
     * @return N29500
     */
    public function setAZVMaßeinheitsqualifikator($aZVMaßeinheitsqualifikator)
    {
        $this->AZV_Maßeinheitsqualifikator = $aZVMaßeinheitsqualifikator;

        return $this;
    }

    /**
     * Get AZV_Maßeinheitsqualifikator
     *
     * @return string 
     */
    public function getAZVMaßeinheitsqualifikator()
    {
        return $this->AZV_Maßeinheitsqualifikator;
    }
}
