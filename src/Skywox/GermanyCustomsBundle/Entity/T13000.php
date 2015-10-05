<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T13000
 */
class T13000
{
    /**
     * @var string
     */
    private $AAR_ID_der_Sprache;

    /**
     * @var \DateTime
     */
    private $AAS_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AAT_Endedatum;

    /**
     * @var string
     */
    private $AAU_Name_der_Sprache;


    /**
     * Set AAR_ID_der_Sprache
     *
     * @param string $aARIDDerSprache
     * @return T13000
     */
    public function setAARIDDerSprache($aARIDDerSprache)
    {
        $this->AAR_ID_der_Sprache = $aARIDDerSprache;

        return $this;
    }

    /**
     * Get AAR_ID_der_Sprache
     *
     * @return string 
     */
    public function getAARIDDerSprache()
    {
        return $this->AAR_ID_der_Sprache;
    }

    /**
     * Set AAS_Beginndatum
     *
     * @param \DateTime $aASBeginndatum
     * @return T13000
     */
    public function setAASBeginndatum($aASBeginndatum)
    {
        $this->AAS_Beginndatum = $aASBeginndatum;

        return $this;
    }

    /**
     * Get AAS_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAASBeginndatum()
    {
        return $this->AAS_Beginndatum;
    }

    /**
     * Set AAT_Endedatum
     *
     * @param \DateTime $aATEndedatum
     * @return T13000
     */
    public function setAATEndedatum($aATEndedatum)
    {
        $this->AAT_Endedatum = $aATEndedatum;

        return $this;
    }

    /**
     * Get AAT_Endedatum
     *
     * @return \DateTime 
     */
    public function getAATEndedatum()
    {
        return $this->AAT_Endedatum;
    }

    /**
     * Set AAU_Name_der_Sprache
     *
     * @param string $aAUNameDerSprache
     * @return T13000
     */
    public function setAAUNameDerSprache($aAUNameDerSprache)
    {
        $this->AAU_Name_der_Sprache = $aAUNameDerSprache;

        return $this;
    }

    /**
     * Get AAU_Name_der_Sprache
     *
     * @return string 
     */
    public function getAAUNameDerSprache()
    {
        return $this->AAU_Name_der_Sprache;
    }
}
