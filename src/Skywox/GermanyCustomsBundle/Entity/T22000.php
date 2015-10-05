<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T22000
 */
class T22000
{
    /**
     * @var string
     */
    private $ACS_Maßeinheitscode;

    /**
     * @var string
     */
    private $ACT_Code_des_Maßeinheitsqualifikators;

    /**
     * @var \DateTime
     */
    private $ACU_Beginndatum;

    /**
     * @var \DateTime
     */
    private $ACV_Endedatum;


    /**
     * Set ACS_Maßeinheitscode
     *
     * @param string $aCSMaßeinheitscode
     * @return T22000
     */
    public function setACSMaßeinheitscode($aCSMaßeinheitscode)
    {
        $this->ACS_Maßeinheitscode = $aCSMaßeinheitscode;

        return $this;
    }

    /**
     * Get ACS_Maßeinheitscode
     *
     * @return string 
     */
    public function getACSMaßeinheitscode()
    {
        return $this->ACS_Maßeinheitscode;
    }

    /**
     * Set ACT_Code_des_Maßeinheitsqualifikators
     *
     * @param string $aCTCodeDesMaßeinheitsqualifikators
     * @return T22000
     */
    public function setACTCodeDesMaßeinheitsqualifikators($aCTCodeDesMaßeinheitsqualifikators)
    {
        $this->ACT_Code_des_Maßeinheitsqualifikators = $aCTCodeDesMaßeinheitsqualifikators;

        return $this;
    }

    /**
     * Get ACT_Code_des_Maßeinheitsqualifikators
     *
     * @return string 
     */
    public function getACTCodeDesMaßeinheitsqualifikators()
    {
        return $this->ACT_Code_des_Maßeinheitsqualifikators;
    }

    /**
     * Set ACU_Beginndatum
     *
     * @param \DateTime $aCUBeginndatum
     * @return T22000
     */
    public function setACUBeginndatum($aCUBeginndatum)
    {
        $this->ACU_Beginndatum = $aCUBeginndatum;

        return $this;
    }

    /**
     * Get ACU_Beginndatum
     *
     * @return \DateTime 
     */
    public function getACUBeginndatum()
    {
        return $this->ACU_Beginndatum;
    }

    /**
     * Set ACV_Endedatum
     *
     * @param \DateTime $aCVEndedatum
     * @return T22000
     */
    public function setACVEndedatum($aCVEndedatum)
    {
        $this->ACV_Endedatum = $aCVEndedatum;

        return $this;
    }

    /**
     * Get ACV_Endedatum
     *
     * @return \DateTime 
     */
    public function getACVEndedatum()
    {
        return $this->ACV_Endedatum;
    }
}
