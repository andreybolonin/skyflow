<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T36000
 */
class T36000
{
    /**
     * @var integer
     */
    private $AKS_SID_der_Ordnungsnummer;

    /**
     * @var string
     */
    private $AKT_Ordnungsnummer;

    /**
     * @var \DateTime
     */
    private $AKU_Gültigkeitsbeginn;

    /**
     * @var \DateTime
     */
    private $AKV_Gültigkeitsende;


    /**
     * Set AKS_SID_der_Ordnungsnummer
     *
     * @param integer $aKSSIDDerOrdnungsnummer
     * @return T36000
     */
    public function setAKSSIDDerOrdnungsnummer($aKSSIDDerOrdnungsnummer)
    {
        $this->AKS_SID_der_Ordnungsnummer = $aKSSIDDerOrdnungsnummer;

        return $this;
    }

    /**
     * Get AKS_SID_der_Ordnungsnummer
     *
     * @return integer 
     */
    public function getAKSSIDDerOrdnungsnummer()
    {
        return $this->AKS_SID_der_Ordnungsnummer;
    }

    /**
     * Set AKT_Ordnungsnummer
     *
     * @param string $aKTOrdnungsnummer
     * @return T36000
     */
    public function setAKTOrdnungsnummer($aKTOrdnungsnummer)
    {
        $this->AKT_Ordnungsnummer = $aKTOrdnungsnummer;

        return $this;
    }

    /**
     * Get AKT_Ordnungsnummer
     *
     * @return string 
     */
    public function getAKTOrdnungsnummer()
    {
        return $this->AKT_Ordnungsnummer;
    }

    /**
     * Set AKU_Gültigkeitsbeginn
     *
     * @param \DateTime $aKUGültigkeitsbeginn
     * @return T36000
     */
    public function setAKUGültigkeitsbeginn($aKUGültigkeitsbeginn)
    {
        $this->AKU_Gültigkeitsbeginn = $aKUGültigkeitsbeginn;

        return $this;
    }

    /**
     * Get AKU_Gültigkeitsbeginn
     *
     * @return \DateTime 
     */
    public function getAKUGültigkeitsbeginn()
    {
        return $this->AKU_Gültigkeitsbeginn;
    }

    /**
     * Set AKV_Gültigkeitsende
     *
     * @param \DateTime $aKVGültigkeitsende
     * @return T36000
     */
    public function setAKVGültigkeitsende($aKVGültigkeitsende)
    {
        $this->AKV_Gültigkeitsende = $aKVGültigkeitsende;

        return $this;
    }

    /**
     * Get AKV_Gültigkeitsende
     *
     * @return \DateTime 
     */
    public function getAKVGültigkeitsende()
    {
        return $this->AKV_Gültigkeitsende;
    }
}
