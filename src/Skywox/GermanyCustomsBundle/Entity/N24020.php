<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N24020
 */
class N24020
{
    /**
     * @var string
     */
    private $AWL_Bescheinigungsbereich;

    /**
     * @var \DateTime
     */
    private $AWM_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AWN_Endedatum;

    /**
     * @var string
     */
    private $AWO_Beschreibung_des_Bescheinigungsbereich;


    /**
     * Set AWL_Bescheinigungsbereich
     *
     * @param string $aWLBescheinigungsbereich
     * @return N24020
     */
    public function setAWLBescheinigungsbereich($aWLBescheinigungsbereich)
    {
        $this->AWL_Bescheinigungsbereich = $aWLBescheinigungsbereich;

        return $this;
    }

    /**
     * Get AWL_Bescheinigungsbereich
     *
     * @return string 
     */
    public function getAWLBescheinigungsbereich()
    {
        return $this->AWL_Bescheinigungsbereich;
    }

    /**
     * Set AWM_Beginndatum
     *
     * @param \DateTime $aWMBeginndatum
     * @return N24020
     */
    public function setAWMBeginndatum($aWMBeginndatum)
    {
        $this->AWM_Beginndatum = $aWMBeginndatum;

        return $this;
    }

    /**
     * Get AWM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAWMBeginndatum()
    {
        return $this->AWM_Beginndatum;
    }

    /**
     * Set AWN_Endedatum
     *
     * @param \DateTime $aWNEndedatum
     * @return N24020
     */
    public function setAWNEndedatum($aWNEndedatum)
    {
        $this->AWN_Endedatum = $aWNEndedatum;

        return $this;
    }

    /**
     * Get AWN_Endedatum
     *
     * @return \DateTime 
     */
    public function getAWNEndedatum()
    {
        return $this->AWN_Endedatum;
    }

    /**
     * Set AWO_Beschreibung_des_Bescheinigungsbereich
     *
     * @param string $aWOBeschreibungDesBescheinigungsbereich
     * @return N24020
     */
    public function setAWOBeschreibungDesBescheinigungsbereich($aWOBeschreibungDesBescheinigungsbereich)
    {
        $this->AWO_Beschreibung_des_Bescheinigungsbereich = $aWOBeschreibungDesBescheinigungsbereich;

        return $this;
    }

    /**
     * Get AWO_Beschreibung_des_Bescheinigungsbereich
     *
     * @return string 
     */
    public function getAWOBeschreibungDesBescheinigungsbereich()
    {
        return $this->AWO_Beschreibung_des_Bescheinigungsbereich;
    }
}
