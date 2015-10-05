<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40010
 */
class T40010
{
    /**
     * @var integer
     */
    private $ANY_SID_der_Warennomenklaturbeschreibung;

    /**
     * @var integer
     */
    private $ANZ_SID_der_Warennomenklatur;

    /**
     * @var \DateTime
     */
    private $AOA_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturbeschreibu;

    /**
     * @var \DateTime
     */
    private $AOB_Gültigkeitsendedatum_der_Warennomenklaturbeschreibung;

    /**
     * @var string
     */
    private $AOC_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AOD_Warenliniensuffix;

    /**
     * @var string
     */
    private $AOE_Langtext_der_Warennomenklatur;


    /**
     * Set ANY_SID_der_Warennomenklaturbeschreibung
     *
     * @param integer $aNYSIDDerWarennomenklaturbeschreibung
     * @return T40010
     */
    public function setANYSIDDerWarennomenklaturbeschreibung($aNYSIDDerWarennomenklaturbeschreibung)
    {
        $this->ANY_SID_der_Warennomenklaturbeschreibung = $aNYSIDDerWarennomenklaturbeschreibung;

        return $this;
    }

    /**
     * Get ANY_SID_der_Warennomenklaturbeschreibung
     *
     * @return integer 
     */
    public function getANYSIDDerWarennomenklaturbeschreibung()
    {
        return $this->ANY_SID_der_Warennomenklaturbeschreibung;
    }

    /**
     * Set ANZ_SID_der_Warennomenklatur
     *
     * @param integer $aNZSIDDerWarennomenklatur
     * @return T40010
     */
    public function setANZSIDDerWarennomenklatur($aNZSIDDerWarennomenklatur)
    {
        $this->ANZ_SID_der_Warennomenklatur = $aNZSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get ANZ_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getANZSIDDerWarennomenklatur()
    {
        return $this->ANZ_SID_der_Warennomenklatur;
    }

    /**
     * Set AOA_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturbeschreibu
     *
     * @param \DateTime $aOADatumDesGültigkeitsbeginnsDerWarennomenklaturbeschreibu
     * @return T40010
     */
    public function setAOADatumDesGültigkeitsbeginnsDerWarennomenklaturbeschreibu($aOADatumDesGültigkeitsbeginnsDerWarennomenklaturbeschreibu)
    {
        $this->AOA_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturbeschreibu = $aOADatumDesGültigkeitsbeginnsDerWarennomenklaturbeschreibu;

        return $this;
    }

    /**
     * Get AOA_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturbeschreibu
     *
     * @return \DateTime 
     */
    public function getAOADatumDesGültigkeitsbeginnsDerWarennomenklaturbeschreibu()
    {
        return $this->AOA_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturbeschreibu;
    }

    /**
     * Set AOB_Gültigkeitsendedatum_der_Warennomenklaturbeschreibung
     *
     * @param \DateTime $aOBGültigkeitsendedatumDerWarennomenklaturbeschreibung
     * @return T40010
     */
    public function setAOBGültigkeitsendedatumDerWarennomenklaturbeschreibung($aOBGültigkeitsendedatumDerWarennomenklaturbeschreibung)
    {
        $this->AOB_Gültigkeitsendedatum_der_Warennomenklaturbeschreibung = $aOBGültigkeitsendedatumDerWarennomenklaturbeschreibung;

        return $this;
    }

    /**
     * Get AOB_Gültigkeitsendedatum_der_Warennomenklaturbeschreibung
     *
     * @return \DateTime 
     */
    public function getAOBGültigkeitsendedatumDerWarennomenklaturbeschreibung()
    {
        return $this->AOB_Gültigkeitsendedatum_der_Warennomenklaturbeschreibung;
    }

    /**
     * Set AOC_Warennomenklatur_ID
     *
     * @param string $aOCWarennomenklaturID
     * @return T40010
     */
    public function setAOCWarennomenklaturID($aOCWarennomenklaturID)
    {
        $this->AOC_Warennomenklatur_ID = $aOCWarennomenklaturID;

        return $this;
    }

    /**
     * Get AOC_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAOCWarennomenklaturID()
    {
        return $this->AOC_Warennomenklatur_ID;
    }

    /**
     * Set AOD_Warenliniensuffix
     *
     * @param string $aODWarenliniensuffix
     * @return T40010
     */
    public function setAODWarenliniensuffix($aODWarenliniensuffix)
    {
        $this->AOD_Warenliniensuffix = $aODWarenliniensuffix;

        return $this;
    }

    /**
     * Get AOD_Warenliniensuffix
     *
     * @return string 
     */
    public function getAODWarenliniensuffix()
    {
        return $this->AOD_Warenliniensuffix;
    }

    /**
     * Set AOE_Langtext_der_Warennomenklatur
     *
     * @param string $aOELangtextDerWarennomenklatur
     * @return T40010
     */
    public function setAOELangtextDerWarennomenklatur($aOELangtextDerWarennomenklatur)
    {
        $this->AOE_Langtext_der_Warennomenklatur = $aOELangtextDerWarennomenklatur;

        return $this;
    }

    /**
     * Get AOE_Langtext_der_Warennomenklatur
     *
     * @return string 
     */
    public function getAOELangtextDerWarennomenklatur()
    {
        return $this->AOE_Langtext_der_Warennomenklatur;
    }
}
