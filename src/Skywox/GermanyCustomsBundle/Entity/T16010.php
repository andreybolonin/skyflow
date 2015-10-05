<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T16010
 */
class T16010
{
    /**
     * @var string
     */
    private $ABI_Verordnungsfunktionsart_ID;

    /**
     * @var string
     */
    private $ABJ_kombinierter_Verordnungsfunktionsart_ID;


    /**
     * Set ABI_Verordnungsfunktionsart_ID
     *
     * @param string $aBIVerordnungsfunktionsartID
     * @return T16010
     */
    public function setABIVerordnungsfunktionsartID($aBIVerordnungsfunktionsartID)
    {
        $this->ABI_Verordnungsfunktionsart_ID = $aBIVerordnungsfunktionsartID;

        return $this;
    }

    /**
     * Get ABI_Verordnungsfunktionsart_ID
     *
     * @return string 
     */
    public function getABIVerordnungsfunktionsartID()
    {
        return $this->ABI_Verordnungsfunktionsart_ID;
    }

    /**
     * Set ABJ_kombinierter_Verordnungsfunktionsart_ID
     *
     * @param string $aBJKombinierterVerordnungsfunktionsartID
     * @return T16010
     */
    public function setABJKombinierterVerordnungsfunktionsartID($aBJKombinierterVerordnungsfunktionsartID)
    {
        $this->ABJ_kombinierter_Verordnungsfunktionsart_ID = $aBJKombinierterVerordnungsfunktionsartID;

        return $this;
    }

    /**
     * Get ABJ_kombinierter_Verordnungsfunktionsart_ID
     *
     * @return string 
     */
    public function getABJKombinierterVerordnungsfunktionsartID()
    {
        return $this->ABJ_kombinierter_Verordnungsfunktionsart_ID;
    }
}
