<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N22505
 */
class N22505
{
    /**
     * @var string
     */
    private $AVN_Schlüssel_der_Verfahrensbeschränkung;

    /**
     * @var \DateTime
     */
    private $AVO_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AVP_Endedatum;

    /**
     * @var string
     */
    private $AVQ_Beschreibung_der_Verfahrensbeschränkung;


    /**
     * Set AVN_Schlüssel_der_Verfahrensbeschränkung
     *
     * @param string $aVNSchlüsselDerVerfahrensbeschränkung
     * @return N22505
     */
    public function setAVNSchlüsselDerVerfahrensbeschränkung($aVNSchlüsselDerVerfahrensbeschränkung)
    {
        $this->AVN_Schlüssel_der_Verfahrensbeschränkung = $aVNSchlüsselDerVerfahrensbeschränkung;

        return $this;
    }

    /**
     * Get AVN_Schlüssel_der_Verfahrensbeschränkung
     *
     * @return string 
     */
    public function getAVNSchlüsselDerVerfahrensbeschränkung()
    {
        return $this->AVN_Schlüssel_der_Verfahrensbeschränkung;
    }

    /**
     * Set AVO_Beginndatum
     *
     * @param \DateTime $aVOBeginndatum
     * @return N22505
     */
    public function setAVOBeginndatum($aVOBeginndatum)
    {
        $this->AVO_Beginndatum = $aVOBeginndatum;

        return $this;
    }

    /**
     * Get AVO_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAVOBeginndatum()
    {
        return $this->AVO_Beginndatum;
    }

    /**
     * Set AVP_Endedatum
     *
     * @param \DateTime $aVPEndedatum
     * @return N22505
     */
    public function setAVPEndedatum($aVPEndedatum)
    {
        $this->AVP_Endedatum = $aVPEndedatum;

        return $this;
    }

    /**
     * Get AVP_Endedatum
     *
     * @return \DateTime 
     */
    public function getAVPEndedatum()
    {
        return $this->AVP_Endedatum;
    }

    /**
     * Set AVQ_Beschreibung_der_Verfahrensbeschränkung
     *
     * @param string $aVQBeschreibungDerVerfahrensbeschränkung
     * @return N22505
     */
    public function setAVQBeschreibungDerVerfahrensbeschränkung($aVQBeschreibungDerVerfahrensbeschränkung)
    {
        $this->AVQ_Beschreibung_der_Verfahrensbeschränkung = $aVQBeschreibungDerVerfahrensbeschränkung;

        return $this;
    }

    /**
     * Get AVQ_Beschreibung_der_Verfahrensbeschränkung
     *
     * @return string 
     */
    public function getAVQBeschreibungDerVerfahrensbeschränkung()
    {
        return $this->AVQ_Beschreibung_der_Verfahrensbeschränkung;
    }
}
