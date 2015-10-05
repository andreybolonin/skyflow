<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T36015
 */
class T36015
{
    /**
     * @var integer
     */
    private $ALC_SID_Ursprungsland_Ordnungsnummer;

    /**
     * @var integer
     */
    private $ALD_Ausgeschlossenes_geographisches_Gebiet;


    /**
     * Set ALC_SID_Ursprungsland_Ordnungsnummer
     *
     * @param integer $aLCSIDUrsprungslandOrdnungsnummer
     * @return T36015
     */
    public function setALCSIDUrsprungslandOrdnungsnummer($aLCSIDUrsprungslandOrdnungsnummer)
    {
        $this->ALC_SID_Ursprungsland_Ordnungsnummer = $aLCSIDUrsprungslandOrdnungsnummer;

        return $this;
    }

    /**
     * Get ALC_SID_Ursprungsland_Ordnungsnummer
     *
     * @return integer 
     */
    public function getALCSIDUrsprungslandOrdnungsnummer()
    {
        return $this->ALC_SID_Ursprungsland_Ordnungsnummer;
    }

    /**
     * Set ALD_Ausgeschlossenes_geographisches_Gebiet
     *
     * @param integer $aLDAusgeschlossenesGeographischesGebiet
     * @return T36015
     */
    public function setALDAusgeschlossenesGeographischesGebiet($aLDAusgeschlossenesGeographischesGebiet)
    {
        $this->ALD_Ausgeschlossenes_geographisches_Gebiet = $aLDAusgeschlossenesGeographischesGebiet;

        return $this;
    }

    /**
     * Get ALD_Ausgeschlossenes_geographisches_Gebiet
     *
     * @return integer 
     */
    public function getALDAusgeschlossenesGeographischesGebiet()
    {
        return $this->ALD_Ausgeschlossenes_geographisches_Gebiet;
    }
}
