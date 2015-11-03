<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N25500
 */
class N25500
{
    /**
     * @var string
     */
    private $AWU_Fußnotenart_ID;

    /**
     * @var string
     */
    private $AWV_Fußnotenschlüssel;

    /**
     * @var \DateTime
     */
    private $AWW_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AWX_Endedatum;

    /**
     * @var string
     */
    private $AWY_Text_der_Fußnote;


    /**
     * Set AWU_Fußnotenart_ID
     *
     * @param string $aWUFußnotenartID
     * @return N25500
     */
    public function setAWUFußnotenartID($aWUFußnotenartID)
    {
        $this->AWU_Fußnotenart_ID = $aWUFußnotenartID;

        return $this;
    }

    /**
     * Get AWU_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAWUFußnotenartID()
    {
        return $this->AWU_Fußnotenart_ID;
    }

    /**
     * Set AWV_Fußnotenschlüssel
     *
     * @param string $aWVFußnotenschlüssel
     * @return N25500
     */
    public function setAWVFußnotenschlüssel($aWVFußnotenschlüssel)
    {
        $this->AWV_Fußnotenschlüssel = $aWVFußnotenschlüssel;

        return $this;
    }

    /**
     * Get AWV_Fußnotenschlüssel
     *
     * @return string 
     */
    public function getAWVFußnotenschlüssel()
    {
        return $this->AWV_Fußnotenschlüssel;
    }

    /**
     * Set AWW_Beginndatum
     *
     * @param \DateTime $aWWBeginndatum
     * @return N25500
     */
    public function setAWWBeginndatum($aWWBeginndatum)
    {
        $this->AWW_Beginndatum = $aWWBeginndatum;

        return $this;
    }

    /**
     * Get AWW_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAWWBeginndatum()
    {
        return $this->AWW_Beginndatum;
    }

    /**
     * Set AWX_Endedatum
     *
     * @param \DateTime $aWXEndedatum
     * @return N25500
     */
    public function setAWXEndedatum($aWXEndedatum)
    {
        $this->AWX_Endedatum = $aWXEndedatum;

        return $this;
    }

    /**
     * Get AWX_Endedatum
     *
     * @return \DateTime 
     */
    public function getAWXEndedatum()
    {
        return $this->AWX_Endedatum;
    }

    /**
     * Set AWY_Text_der_Fußnote
     *
     * @param string $aWYTextDerFußnote
     * @return N25500
     */
    public function setAWYTextDerFußnote($aWYTextDerFußnote)
    {
        $this->AWY_Text_der_Fußnote = $aWYTextDerFußnote;

        return $this;
    }

    /**
     * Get AWY_Text_der_Fußnote
     *
     * @return string 
     */
    public function getAWYTextDerFußnote()
    {
        return $this->AWY_Text_der_Fußnote;
    }
}
