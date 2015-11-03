<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T43020
 */
class T43020
{
    /**
     * @var integer
     */
    private $ASH_SID_der_Maßnahme;

    /**
     * @var string
     */
    private $ASI_Fußnotenart_ID;

    /**
     * @var string
     */
    private $ASJ_Fußnote_ID;


    /**
     * Set ASH_SID_der_Maßnahme
     *
     * @param integer $aSHSIDDerMaßnahme
     * @return T43020
     */
    public function setASHSIDDerMaßnahme($aSHSIDDerMaßnahme)
    {
        $this->ASH_SID_der_Maßnahme = $aSHSIDDerMaßnahme;

        return $this;
    }

    /**
     * Get ASH_SID_der_Maßnahme
     *
     * @return integer 
     */
    public function getASHSIDDerMaßnahme()
    {
        return $this->ASH_SID_der_Maßnahme;
    }

    /**
     * Set ASI_Fußnotenart_ID
     *
     * @param string $aSIFußnotenartID
     * @return T43020
     */
    public function setASIFußnotenartID($aSIFußnotenartID)
    {
        $this->ASI_Fußnotenart_ID = $aSIFußnotenartID;

        return $this;
    }

    /**
     * Get ASI_Fußnotenart_ID
     *
     * @return string 
     */
    public function getASIFußnotenartID()
    {
        return $this->ASI_Fußnotenart_ID;
    }

    /**
     * Set ASJ_Fußnote_ID
     *
     * @param string $aSJFußnoteID
     * @return T43020
     */
    public function setASJFußnoteID($aSJFußnoteID)
    {
        $this->ASJ_Fußnote_ID = $aSJFußnoteID;

        return $this;
    }

    /**
     * Get ASJ_Fußnote_ID
     *
     * @return string 
     */
    public function getASJFußnoteID()
    {
        return $this->ASJ_Fußnote_ID;
    }
}
