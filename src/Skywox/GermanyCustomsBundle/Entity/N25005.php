<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N25005
 */
class N25005
{
    /**
     * @var string
     */
    private $AWP_Schlüssel_des_ECU__Währungseinheitscodes;

    /**
     * @var \DateTime
     */
    private $AWQ_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AWR_Endedatum;

    /**
     * @var string
     */
    private $AWS_ECU_Umrechnungskurs;

    /**
     * @var string
     */
    private $AWT_Beschreibung_des_ECU__Umrechnungskurses;


    /**
     * Set AWP_Schlüssel_des_ECU__Währungseinheitscodes
     *
     * @param string $aWPSchlüsselDesECUWährungseinheitscodes
     * @return N25005
     */
    public function setAWPSchlüsselDesECUWährungseinheitscodes($aWPSchlüsselDesECUWährungseinheitscodes)
    {
        $this->AWP_Schlüssel_des_ECU__Währungseinheitscodes = $aWPSchlüsselDesECUWährungseinheitscodes;

        return $this;
    }

    /**
     * Get AWP_Schlüssel_des_ECU__Währungseinheitscodes
     *
     * @return string 
     */
    public function getAWPSchlüsselDesECUWährungseinheitscodes()
    {
        return $this->AWP_Schlüssel_des_ECU__Währungseinheitscodes;
    }

    /**
     * Set AWQ_Beginndatum
     *
     * @param \DateTime $aWQBeginndatum
     * @return N25005
     */
    public function setAWQBeginndatum($aWQBeginndatum)
    {
        $this->AWQ_Beginndatum = $aWQBeginndatum;

        return $this;
    }

    /**
     * Get AWQ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAWQBeginndatum()
    {
        return $this->AWQ_Beginndatum;
    }

    /**
     * Set AWR_Endedatum
     *
     * @param \DateTime $aWREndedatum
     * @return N25005
     */
    public function setAWREndedatum($aWREndedatum)
    {
        $this->AWR_Endedatum = $aWREndedatum;

        return $this;
    }

    /**
     * Get AWR_Endedatum
     *
     * @return \DateTime 
     */
    public function getAWREndedatum()
    {
        return $this->AWR_Endedatum;
    }

    /**
     * Set AWS_ECU_Umrechnungskurs
     *
     * @param string $aWSECUUmrechnungskurs
     * @return N25005
     */
    public function setAWSECUUmrechnungskurs($aWSECUUmrechnungskurs)
    {
        $this->AWS_ECU_Umrechnungskurs = $aWSECUUmrechnungskurs;

        return $this;
    }

    /**
     * Get AWS_ECU_Umrechnungskurs
     *
     * @return string 
     */
    public function getAWSECUUmrechnungskurs()
    {
        return $this->AWS_ECU_Umrechnungskurs;
    }

    /**
     * Set AWT_Beschreibung_des_ECU__Umrechnungskurses
     *
     * @param string $aWTBeschreibungDesECUUmrechnungskurses
     * @return N25005
     */
    public function setAWTBeschreibungDesECUUmrechnungskurses($aWTBeschreibungDesECUUmrechnungskurses)
    {
        $this->AWT_Beschreibung_des_ECU__Umrechnungskurses = $aWTBeschreibungDesECUUmrechnungskurses;

        return $this;
    }

    /**
     * Get AWT_Beschreibung_des_ECU__Umrechnungskurses
     *
     * @return string 
     */
    public function getAWTBeschreibungDesECUUmrechnungskurses()
    {
        return $this->AWT_Beschreibung_des_ECU__Umrechnungskurses;
    }
}
