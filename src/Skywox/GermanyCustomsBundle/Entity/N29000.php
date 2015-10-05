<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N29000
 */
class N29000
{
    /**
     * @var string
     */
    private $AZH_Qualifikator_der_Maßeinheit;

    /**
     * @var string
     */
    private $AZI_Herkunft_des_Maßeinheitsqualifikators_TARIC_national;

    /**
     * @var \DateTime
     */
    private $AZJ_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AZK_Endedatum;

    /**
     * @var string
     */
    private $AZL_Beschreibung_des_Maßeinheitsqualifikators_entsprechend_der_;

    /**
     * @var string
     */
    private $AZM_Beschreibung_des_Maßeinheitsqualifikators;


    /**
     * Set AZH_Qualifikator_der_Maßeinheit
     *
     * @param string $aZHQualifikatorDerMaßeinheit
     * @return N29000
     */
    public function setAZHQualifikatorDerMaßeinheit($aZHQualifikatorDerMaßeinheit)
    {
        $this->AZH_Qualifikator_der_Maßeinheit = $aZHQualifikatorDerMaßeinheit;

        return $this;
    }

    /**
     * Get AZH_Qualifikator_der_Maßeinheit
     *
     * @return string 
     */
    public function getAZHQualifikatorDerMaßeinheit()
    {
        return $this->AZH_Qualifikator_der_Maßeinheit;
    }

    /**
     * Set AZI_Herkunft_des_Maßeinheitsqualifikators_TARIC_national
     *
     * @param string $aZIHerkunftDesMaßeinheitsqualifikatorsTARICNational
     * @return N29000
     */
    public function setAZIHerkunftDesMaßeinheitsqualifikatorsTARICNational($aZIHerkunftDesMaßeinheitsqualifikatorsTARICNational)
    {
        $this->AZI_Herkunft_des_Maßeinheitsqualifikators_TARIC_national = $aZIHerkunftDesMaßeinheitsqualifikatorsTARICNational;

        return $this;
    }

    /**
     * Get AZI_Herkunft_des_Maßeinheitsqualifikators_TARIC_national
     *
     * @return string 
     */
    public function getAZIHerkunftDesMaßeinheitsqualifikatorsTARICNational()
    {
        return $this->AZI_Herkunft_des_Maßeinheitsqualifikators_TARIC_national;
    }

    /**
     * Set AZJ_Beginndatum
     *
     * @param \DateTime $aZJBeginndatum
     * @return N29000
     */
    public function setAZJBeginndatum($aZJBeginndatum)
    {
        $this->AZJ_Beginndatum = $aZJBeginndatum;

        return $this;
    }

    /**
     * Get AZJ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAZJBeginndatum()
    {
        return $this->AZJ_Beginndatum;
    }

    /**
     * Set AZK_Endedatum
     *
     * @param \DateTime $aZKEndedatum
     * @return N29000
     */
    public function setAZKEndedatum($aZKEndedatum)
    {
        $this->AZK_Endedatum = $aZKEndedatum;

        return $this;
    }

    /**
     * Get AZK_Endedatum
     *
     * @return \DateTime 
     */
    public function getAZKEndedatum()
    {
        return $this->AZK_Endedatum;
    }

    /**
     * Set AZL_Beschreibung_des_Maßeinheitsqualifikators_entsprechend_der_
     *
     * @param string $aZLBeschreibungDesMaßeinheitsqualifikatorsEntsprechendDer
     * @return N29000
     */
    public function setAZLBeschreibungDesMaßeinheitsqualifikatorsEntsprechendDer($aZLBeschreibungDesMaßeinheitsqualifikatorsEntsprechendDer)
    {
        $this->AZL_Beschreibung_des_Maßeinheitsqualifikators_entsprechend_der_ = $aZLBeschreibungDesMaßeinheitsqualifikatorsEntsprechendDer;

        return $this;
    }

    /**
     * Get AZL_Beschreibung_des_Maßeinheitsqualifikators_entsprechend_der_
     *
     * @return string 
     */
    public function getAZLBeschreibungDesMaßeinheitsqualifikatorsEntsprechendDer()
    {
        return $this->AZL_Beschreibung_des_Maßeinheitsqualifikators_entsprechend_der_;
    }

    /**
     * Set AZM_Beschreibung_des_Maßeinheitsqualifikators
     *
     * @param string $aZMBeschreibungDesMaßeinheitsqualifikators
     * @return N29000
     */
    public function setAZMBeschreibungDesMaßeinheitsqualifikators($aZMBeschreibungDesMaßeinheitsqualifikators)
    {
        $this->AZM_Beschreibung_des_Maßeinheitsqualifikators = $aZMBeschreibungDesMaßeinheitsqualifikators;

        return $this;
    }

    /**
     * Get AZM_Beschreibung_des_Maßeinheitsqualifikators
     *
     * @return string 
     */
    public function getAZMBeschreibungDesMaßeinheitsqualifikators()
    {
        return $this->AZM_Beschreibung_des_Maßeinheitsqualifikators;
    }
}
