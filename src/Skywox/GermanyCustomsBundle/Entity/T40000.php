<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40000
 */
class T40000
{
    /**
     * @var integer
     */
    private $ANL_SID_für_die_Warennomenklatur;

    /**
     * @var string
     */
    private $ANM_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $ANN_Warenliniensuffix;

    /**
     * @var \DateTime
     */
    private $ANO_Datum_des_Gültigkeitsbeginns_der_Warennomenklatur;

    /**
     * @var \DateTime
     */
    private $ANP_Gültigkeitsendedatum_der_Warennomenklatur;

    /**
     * @var string
     */
    private $ANQ_Statistischer_nicht_statistischer_Indikator;


    /**
     * Set ANL_SID_für_die_Warennomenklatur
     *
     * @param integer $aNLSIDFürDieWarennomenklatur
     * @return T40000
     */
    public function setANLSIDFürDieWarennomenklatur($aNLSIDFürDieWarennomenklatur)
    {
        $this->ANL_SID_für_die_Warennomenklatur = $aNLSIDFürDieWarennomenklatur;

        return $this;
    }

    /**
     * Get ANL_SID_für_die_Warennomenklatur
     *
     * @return integer 
     */
    public function getANLSIDFürDieWarennomenklatur()
    {
        return $this->ANL_SID_für_die_Warennomenklatur;
    }

    /**
     * Set ANM_Warennomenklatur_ID
     *
     * @param string $aNMWarennomenklaturID
     * @return T40000
     */
    public function setANMWarennomenklaturID($aNMWarennomenklaturID)
    {
        $this->ANM_Warennomenklatur_ID = $aNMWarennomenklaturID;

        return $this;
    }

    /**
     * Get ANM_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getANMWarennomenklaturID()
    {
        return $this->ANM_Warennomenklatur_ID;
    }

    /**
     * Set ANN_Warenliniensuffix
     *
     * @param string $aNNWarenliniensuffix
     * @return T40000
     */
    public function setANNWarenliniensuffix($aNNWarenliniensuffix)
    {
        $this->ANN_Warenliniensuffix = $aNNWarenliniensuffix;

        return $this;
    }

    /**
     * Get ANN_Warenliniensuffix
     *
     * @return string 
     */
    public function getANNWarenliniensuffix()
    {
        return $this->ANN_Warenliniensuffix;
    }

    /**
     * Set ANO_Datum_des_Gültigkeitsbeginns_der_Warennomenklatur
     *
     * @param \DateTime $aNODatumDesGültigkeitsbeginnsDerWarennomenklatur
     * @return T40000
     */
    public function setANODatumDesGültigkeitsbeginnsDerWarennomenklatur($aNODatumDesGültigkeitsbeginnsDerWarennomenklatur)
    {
        $this->ANO_Datum_des_Gültigkeitsbeginns_der_Warennomenklatur = $aNODatumDesGültigkeitsbeginnsDerWarennomenklatur;

        return $this;
    }

    /**
     * Get ANO_Datum_des_Gültigkeitsbeginns_der_Warennomenklatur
     *
     * @return \DateTime 
     */
    public function getANODatumDesGültigkeitsbeginnsDerWarennomenklatur()
    {
        return $this->ANO_Datum_des_Gültigkeitsbeginns_der_Warennomenklatur;
    }

    /**
     * Set ANP_Gültigkeitsendedatum_der_Warennomenklatur
     *
     * @param \DateTime $aNPGültigkeitsendedatumDerWarennomenklatur
     * @return T40000
     */
    public function setANPGültigkeitsendedatumDerWarennomenklatur($aNPGültigkeitsendedatumDerWarennomenklatur)
    {
        $this->ANP_Gültigkeitsendedatum_der_Warennomenklatur = $aNPGültigkeitsendedatumDerWarennomenklatur;

        return $this;
    }

    /**
     * Get ANP_Gültigkeitsendedatum_der_Warennomenklatur
     *
     * @return \DateTime 
     */
    public function getANPGültigkeitsendedatumDerWarennomenklatur()
    {
        return $this->ANP_Gültigkeitsendedatum_der_Warennomenklatur;
    }

    /**
     * Set ANQ_Statistischer_nicht_statistischer_Indikator
     *
     * @param string $aNQStatistischerNichtStatistischerIndikator
     * @return T40000
     */
    public function setANQStatistischerNichtStatistischerIndikator($aNQStatistischerNichtStatistischerIndikator)
    {
        $this->ANQ_Statistischer_nicht_statistischer_Indikator = $aNQStatistischerNichtStatistischerIndikator;

        return $this;
    }

    /**
     * Get ANQ_Statistischer_nicht_statistischer_Indikator
     *
     * @return string 
     */
    public function getANQStatistischerNichtStatistischerIndikator()
    {
        return $this->ANQ_Statistischer_nicht_statistischer_Indikator;
    }
}
