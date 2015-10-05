<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N27010
 */
class N27010
{
    /**
     * @var integer
     */
    private $AXX_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet;

    /**
     * @var \DateTime
     */
    private $AXZ_Beginndatum;

    /**
     * @var string
     */
    private $AXY_Status_des_Kontingents;

    /**
     * @var \DateTime
     */
    private $AYA_Endedatum;


    /**
     * Set AXX_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet
     *
     * @param integer $aXXSIDDerZuordnungKontingentGeographischesGebiet
     * @return N27010
     */
    public function setAXXSIDDerZuordnungKontingentGeographischesGebiet($aXXSIDDerZuordnungKontingentGeographischesGebiet)
    {
        $this->AXX_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet = $aXXSIDDerZuordnungKontingentGeographischesGebiet;

        return $this;
    }

    /**
     * Get AXX_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet
     *
     * @return integer 
     */
    public function getAXXSIDDerZuordnungKontingentGeographischesGebiet()
    {
        return $this->AXX_SID_der_Zuordnung_Kontingent_Geographisches_Gebiet;
    }

    /**
     * Set AXZ_Beginndatum
     *
     * @param \DateTime $aXZBeginndatum
     * @return N27010
     */
    public function setAXZBeginndatum($aXZBeginndatum)
    {
        $this->AXZ_Beginndatum = $aXZBeginndatum;

        return $this;
    }

    /**
     * Get AXZ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAXZBeginndatum()
    {
        return $this->AXZ_Beginndatum;
    }

    /**
     * Set AXY_Status_des_Kontingents
     *
     * @param string $aXYStatusDesKontingents
     * @return N27010
     */
    public function setAXYStatusDesKontingents($aXYStatusDesKontingents)
    {
        $this->AXY_Status_des_Kontingents = $aXYStatusDesKontingents;

        return $this;
    }

    /**
     * Get AXY_Status_des_Kontingents
     *
     * @return string 
     */
    public function getAXYStatusDesKontingents()
    {
        return $this->AXY_Status_des_Kontingents;
    }

    /**
     * Set AYA_Endedatum
     *
     * @param \DateTime $aYAEndedatum
     * @return N27010
     */
    public function setAYAEndedatum($aYAEndedatum)
    {
        $this->AYA_Endedatum = $aYAEndedatum;

        return $this;
    }

    /**
     * Get AYA_Endedatum
     *
     * @return \DateTime 
     */
    public function getAYAEndedatum()
    {
        return $this->AYA_Endedatum;
    }
}
