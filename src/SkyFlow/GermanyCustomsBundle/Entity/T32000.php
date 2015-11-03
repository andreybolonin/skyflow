<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T32000
 */
class T32000
{
    /**
     * @var string
     */
    private $AJB_ID_des_Meursing_Tabellenplans;

    /**
     * @var \DateTime
     */
    private $AJC_Datum_des_Gültigkeitsbeginns_des_Meursing_Tabellenplans;

    /**
     * @var \DateTime
     */
    private $AJD_Gültigkeitsendedatum_des_Meursing__Tabellenplans;


    /**
     * Set AJB_ID_des_Meursing_Tabellenplans
     *
     * @param string $aJBIDDesMeursingTabellenplans
     * @return T32000
     */
    public function setAJBIDDesMeursingTabellenplans($aJBIDDesMeursingTabellenplans)
    {
        $this->AJB_ID_des_Meursing_Tabellenplans = $aJBIDDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AJB_ID_des_Meursing_Tabellenplans
     *
     * @return string 
     */
    public function getAJBIDDesMeursingTabellenplans()
    {
        return $this->AJB_ID_des_Meursing_Tabellenplans;
    }

    /**
     * Set AJC_Datum_des_Gültigkeitsbeginns_des_Meursing_Tabellenplans
     *
     * @param \DateTime $aJCDatumDesGültigkeitsbeginnsDesMeursingTabellenplans
     * @return T32000
     */
    public function setAJCDatumDesGültigkeitsbeginnsDesMeursingTabellenplans($aJCDatumDesGültigkeitsbeginnsDesMeursingTabellenplans)
    {
        $this->AJC_Datum_des_Gültigkeitsbeginns_des_Meursing_Tabellenplans = $aJCDatumDesGültigkeitsbeginnsDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AJC_Datum_des_Gültigkeitsbeginns_des_Meursing_Tabellenplans
     *
     * @return \DateTime 
     */
    public function getAJCDatumDesGültigkeitsbeginnsDesMeursingTabellenplans()
    {
        return $this->AJC_Datum_des_Gültigkeitsbeginns_des_Meursing_Tabellenplans;
    }

    /**
     * Set AJD_Gültigkeitsendedatum_des_Meursing__Tabellenplans
     *
     * @param \DateTime $aJDGültigkeitsendedatumDesMeursingTabellenplans
     * @return T32000
     */
    public function setAJDGültigkeitsendedatumDesMeursingTabellenplans($aJDGültigkeitsendedatumDesMeursingTabellenplans)
    {
        $this->AJD_Gültigkeitsendedatum_des_Meursing__Tabellenplans = $aJDGültigkeitsendedatumDesMeursingTabellenplans;

        return $this;
    }

    /**
     * Get AJD_Gültigkeitsendedatum_des_Meursing__Tabellenplans
     *
     * @return \DateTime 
     */
    public function getAJDGültigkeitsendedatumDesMeursingTabellenplans()
    {
        return $this->AJD_Gültigkeitsendedatum_des_Meursing__Tabellenplans;
    }
}
