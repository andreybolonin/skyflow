<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T12000
 */
class T12000
{
    /**
     * @var string
     */
    private $AAL_Zusatzcodeart_ID;

    /**
     * @var \DateTime
     */
    private $AAM_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AAN_Endedatum;

    /**
     * @var string
     */
    private $AAO_Anwendungscode_für_die_Zusatzcodeart;

    /**
     * @var string
     */
    private $AAP_Meursing_Tabellenplan_ID;

    /**
     * @var string
     */
    private $AAQ_Kurztext_der_Zusatzcodeart;


    /**
     * Set AAL_Zusatzcodeart_ID
     *
     * @param string $aALZusatzcodeartID
     * @return T12000
     */
    public function setAALZusatzcodeartID($aALZusatzcodeartID)
    {
        $this->AAL_Zusatzcodeart_ID = $aALZusatzcodeartID;

        return $this;
    }

    /**
     * Get AAL_Zusatzcodeart_ID
     *
     * @return string 
     */
    public function getAALZusatzcodeartID()
    {
        return $this->AAL_Zusatzcodeart_ID;
    }

    /**
     * Set AAM_Beginndatum
     *
     * @param \DateTime $aAMBeginndatum
     * @return T12000
     */
    public function setAAMBeginndatum($aAMBeginndatum)
    {
        $this->AAM_Beginndatum = $aAMBeginndatum;

        return $this;
    }

    /**
     * Get AAM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAAMBeginndatum()
    {
        return $this->AAM_Beginndatum;
    }

    /**
     * Set AAN_Endedatum
     *
     * @param \DateTime $aANEndedatum
     * @return T12000
     */
    public function setAANEndedatum($aANEndedatum)
    {
        $this->AAN_Endedatum = $aANEndedatum;

        return $this;
    }

    /**
     * Get AAN_Endedatum
     *
     * @return \DateTime 
     */
    public function getAANEndedatum()
    {
        return $this->AAN_Endedatum;
    }

    /**
     * Set AAO_Anwendungscode_für_die_Zusatzcodeart
     *
     * @param string $aAOAnwendungscodeFürDieZusatzcodeart
     * @return T12000
     */
    public function setAAOAnwendungscodeFürDieZusatzcodeart($aAOAnwendungscodeFürDieZusatzcodeart)
    {
        $this->AAO_Anwendungscode_für_die_Zusatzcodeart = $aAOAnwendungscodeFürDieZusatzcodeart;

        return $this;
    }

    /**
     * Get AAO_Anwendungscode_für_die_Zusatzcodeart
     *
     * @return string 
     */
    public function getAAOAnwendungscodeFürDieZusatzcodeart()
    {
        return $this->AAO_Anwendungscode_für_die_Zusatzcodeart;
    }

    /**
     * Set AAP_Meursing_Tabellenplan_ID
     *
     * @param string $aAPMeursingTabellenplanID
     * @return T12000
     */
    public function setAAPMeursingTabellenplanID($aAPMeursingTabellenplanID)
    {
        $this->AAP_Meursing_Tabellenplan_ID = $aAPMeursingTabellenplanID;

        return $this;
    }

    /**
     * Get AAP_Meursing_Tabellenplan_ID
     *
     * @return string 
     */
    public function getAAPMeursingTabellenplanID()
    {
        return $this->AAP_Meursing_Tabellenplan_ID;
    }

    /**
     * Set AAQ_Kurztext_der_Zusatzcodeart
     *
     * @param string $aAQKurztextDerZusatzcodeart
     * @return T12000
     */
    public function setAAQKurztextDerZusatzcodeart($aAQKurztextDerZusatzcodeart)
    {
        $this->AAQ_Kurztext_der_Zusatzcodeart = $aAQKurztextDerZusatzcodeart;

        return $this;
    }

    /**
     * Get AAQ_Kurztext_der_Zusatzcodeart
     *
     * @return string 
     */
    public function getAAQKurztextDerZusatzcodeart()
    {
        return $this->AAQ_Kurztext_der_Zusatzcodeart;
    }
}
