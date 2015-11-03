<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T40025
 */
class T40025
{
    /**
     * @var integer
     */
    private $AOM_SID_der_Warennomenklatur;

    /**
     * @var string
     */
    private $AON_Nomenklaturgruppenart;

    /**
     * @var string
     */
    private $AOO_Warennomenklaturgruppe;

    /**
     * @var \DateTime
     */
    private $AOP_Datum_des_Gültigkeitsbeginns_der_Mitgliedschaft_der_Warenno;

    /**
     * @var \DateTime
     */
    private $AOQ_Gültigkeitsendedatum_der_Mitgliedschaft_der_Warennomenklatu;

    /**
     * @var string
     */
    private $AOR_Warennomenklatur_ID;

    /**
     * @var string
     */
    private $AOS_Warenliniensuffix;


    /**
     * Set AOM_SID_der_Warennomenklatur
     *
     * @param integer $aOMSIDDerWarennomenklatur
     * @return T40025
     */
    public function setAOMSIDDerWarennomenklatur($aOMSIDDerWarennomenklatur)
    {
        $this->AOM_SID_der_Warennomenklatur = $aOMSIDDerWarennomenklatur;

        return $this;
    }

    /**
     * Get AOM_SID_der_Warennomenklatur
     *
     * @return integer 
     */
    public function getAOMSIDDerWarennomenklatur()
    {
        return $this->AOM_SID_der_Warennomenklatur;
    }

    /**
     * Set AON_Nomenklaturgruppenart
     *
     * @param string $aONNomenklaturgruppenart
     * @return T40025
     */
    public function setAONNomenklaturgruppenart($aONNomenklaturgruppenart)
    {
        $this->AON_Nomenklaturgruppenart = $aONNomenklaturgruppenart;

        return $this;
    }

    /**
     * Get AON_Nomenklaturgruppenart
     *
     * @return string 
     */
    public function getAONNomenklaturgruppenart()
    {
        return $this->AON_Nomenklaturgruppenart;
    }

    /**
     * Set AOO_Warennomenklaturgruppe
     *
     * @param string $aOOWarennomenklaturgruppe
     * @return T40025
     */
    public function setAOOWarennomenklaturgruppe($aOOWarennomenklaturgruppe)
    {
        $this->AOO_Warennomenklaturgruppe = $aOOWarennomenklaturgruppe;

        return $this;
    }

    /**
     * Get AOO_Warennomenklaturgruppe
     *
     * @return string 
     */
    public function getAOOWarennomenklaturgruppe()
    {
        return $this->AOO_Warennomenklaturgruppe;
    }

    /**
     * Set AOP_Datum_des_Gültigkeitsbeginns_der_Mitgliedschaft_der_Warenno
     *
     * @param \DateTime $aOPDatumDesGültigkeitsbeginnsDerMitgliedschaftDerWarenno
     * @return T40025
     */
    public function setAOPDatumDesGültigkeitsbeginnsDerMitgliedschaftDerWarenno($aOPDatumDesGültigkeitsbeginnsDerMitgliedschaftDerWarenno)
    {
        $this->AOP_Datum_des_Gültigkeitsbeginns_der_Mitgliedschaft_der_Warenno = $aOPDatumDesGültigkeitsbeginnsDerMitgliedschaftDerWarenno;

        return $this;
    }

    /**
     * Get AOP_Datum_des_Gültigkeitsbeginns_der_Mitgliedschaft_der_Warenno
     *
     * @return \DateTime 
     */
    public function getAOPDatumDesGültigkeitsbeginnsDerMitgliedschaftDerWarenno()
    {
        return $this->AOP_Datum_des_Gültigkeitsbeginns_der_Mitgliedschaft_der_Warenno;
    }

    /**
     * Set AOQ_Gültigkeitsendedatum_der_Mitgliedschaft_der_Warennomenklatu
     *
     * @param \DateTime $aOQGültigkeitsendedatumDerMitgliedschaftDerWarennomenklatu
     * @return T40025
     */
    public function setAOQGültigkeitsendedatumDerMitgliedschaftDerWarennomenklatu($aOQGültigkeitsendedatumDerMitgliedschaftDerWarennomenklatu)
    {
        $this->AOQ_Gültigkeitsendedatum_der_Mitgliedschaft_der_Warennomenklatu = $aOQGültigkeitsendedatumDerMitgliedschaftDerWarennomenklatu;

        return $this;
    }

    /**
     * Get AOQ_Gültigkeitsendedatum_der_Mitgliedschaft_der_Warennomenklatu
     *
     * @return \DateTime 
     */
    public function getAOQGültigkeitsendedatumDerMitgliedschaftDerWarennomenklatu()
    {
        return $this->AOQ_Gültigkeitsendedatum_der_Mitgliedschaft_der_Warennomenklatu;
    }

    /**
     * Set AOR_Warennomenklatur_ID
     *
     * @param string $aORWarennomenklaturID
     * @return T40025
     */
    public function setAORWarennomenklaturID($aORWarennomenklaturID)
    {
        $this->AOR_Warennomenklatur_ID = $aORWarennomenklaturID;

        return $this;
    }

    /**
     * Get AOR_Warennomenklatur_ID
     *
     * @return string 
     */
    public function getAORWarennomenklaturID()
    {
        return $this->AOR_Warennomenklatur_ID;
    }

    /**
     * Set AOS_Warenliniensuffix
     *
     * @param string $aOSWarenliniensuffix
     * @return T40025
     */
    public function setAOSWarenliniensuffix($aOSWarenliniensuffix)
    {
        $this->AOS_Warenliniensuffix = $aOSWarenliniensuffix;

        return $this;
    }

    /**
     * Get AOS_Warenliniensuffix
     *
     * @return string 
     */
    public function getAOSWarenliniensuffix()
    {
        return $this->AOS_Warenliniensuffix;
    }
}
