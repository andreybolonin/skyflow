<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N24010
 */
class N24010
{
    /**
     * @var string
     */
    private $AWH_Bescheinigungsart;

    /**
     * @var string
     */
    private $AWI_Schlüssel_der_Bescheinigung;

    /**
     * @var \DateTime
     */
    private $AWJ_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AWK_Endedatum;


    /**
     * Set AWH_Bescheinigungsart
     *
     * @param string $aWHBescheinigungsart
     * @return N24010
     */
    public function setAWHBescheinigungsart($aWHBescheinigungsart)
    {
        $this->AWH_Bescheinigungsart = $aWHBescheinigungsart;

        return $this;
    }

    /**
     * Get AWH_Bescheinigungsart
     *
     * @return string 
     */
    public function getAWHBescheinigungsart()
    {
        return $this->AWH_Bescheinigungsart;
    }

    /**
     * Set AWI_Schlüssel_der_Bescheinigung
     *
     * @param string $aWISchlüsselDerBescheinigung
     * @return N24010
     */
    public function setAWISchlüsselDerBescheinigung($aWISchlüsselDerBescheinigung)
    {
        $this->AWI_Schlüssel_der_Bescheinigung = $aWISchlüsselDerBescheinigung;

        return $this;
    }

    /**
     * Get AWI_Schlüssel_der_Bescheinigung
     *
     * @return string 
     */
    public function getAWISchlüsselDerBescheinigung()
    {
        return $this->AWI_Schlüssel_der_Bescheinigung;
    }

    /**
     * Set AWJ_Beginndatum
     *
     * @param \DateTime $aWJBeginndatum
     * @return N24010
     */
    public function setAWJBeginndatum($aWJBeginndatum)
    {
        $this->AWJ_Beginndatum = $aWJBeginndatum;

        return $this;
    }

    /**
     * Get AWJ_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAWJBeginndatum()
    {
        return $this->AWJ_Beginndatum;
    }

    /**
     * Set AWK_Endedatum
     *
     * @param \DateTime $aWKEndedatum
     * @return N24010
     */
    public function setAWKEndedatum($aWKEndedatum)
    {
        $this->AWK_Endedatum = $aWKEndedatum;

        return $this;
    }

    /**
     * Get AWK_Endedatum
     *
     * @return \DateTime 
     */
    public function getAWKEndedatum()
    {
        return $this->AWK_Endedatum;
    }
}
