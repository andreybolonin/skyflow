<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T27000
 */
class T27000
{
    /**
     * @var string
     */
    private $AFF_Art_der_Warennomenklaturgruppe;

    /**
     * @var string
     */
    private $AFG_Warennomenklaturgruppen_ID;

    /**
     * @var \DateTime
     */
    private $AFH_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturgruppe;

    /**
     * @var \DateTime
     */
    private $AFI_Gültigkeitsendedatum_der_Warennomenklaturgruppe;

    /**
     * @var string
     */
    private $AFJ_Mögliche_Codes_der_Nomenklaturgruppe;

    /**
     * @var string
     */
    private $AFK_Beschreibung_der_Nomenklaturgruppe;


    /**
     * Set AFF_Art_der_Warennomenklaturgruppe
     *
     * @param string $aFFArtDerWarennomenklaturgruppe
     * @return T27000
     */
    public function setAFFArtDerWarennomenklaturgruppe($aFFArtDerWarennomenklaturgruppe)
    {
        $this->AFF_Art_der_Warennomenklaturgruppe = $aFFArtDerWarennomenklaturgruppe;

        return $this;
    }

    /**
     * Get AFF_Art_der_Warennomenklaturgruppe
     *
     * @return string 
     */
    public function getAFFArtDerWarennomenklaturgruppe()
    {
        return $this->AFF_Art_der_Warennomenklaturgruppe;
    }

    /**
     * Set AFG_Warennomenklaturgruppen_ID
     *
     * @param string $aFGWarennomenklaturgruppenID
     * @return T27000
     */
    public function setAFGWarennomenklaturgruppenID($aFGWarennomenklaturgruppenID)
    {
        $this->AFG_Warennomenklaturgruppen_ID = $aFGWarennomenklaturgruppenID;

        return $this;
    }

    /**
     * Get AFG_Warennomenklaturgruppen_ID
     *
     * @return string 
     */
    public function getAFGWarennomenklaturgruppenID()
    {
        return $this->AFG_Warennomenklaturgruppen_ID;
    }

    /**
     * Set AFH_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturgruppe
     *
     * @param \DateTime $aFHDatumDesGültigkeitsbeginnsDerWarennomenklaturgruppe
     * @return T27000
     */
    public function setAFHDatumDesGültigkeitsbeginnsDerWarennomenklaturgruppe($aFHDatumDesGültigkeitsbeginnsDerWarennomenklaturgruppe)
    {
        $this->AFH_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturgruppe = $aFHDatumDesGültigkeitsbeginnsDerWarennomenklaturgruppe;

        return $this;
    }

    /**
     * Get AFH_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturgruppe
     *
     * @return \DateTime 
     */
    public function getAFHDatumDesGültigkeitsbeginnsDerWarennomenklaturgruppe()
    {
        return $this->AFH_Datum_des_Gültigkeitsbeginns_der_Warennomenklaturgruppe;
    }

    /**
     * Set AFI_Gültigkeitsendedatum_der_Warennomenklaturgruppe
     *
     * @param \DateTime $aFIGültigkeitsendedatumDerWarennomenklaturgruppe
     * @return T27000
     */
    public function setAFIGültigkeitsendedatumDerWarennomenklaturgruppe($aFIGültigkeitsendedatumDerWarennomenklaturgruppe)
    {
        $this->AFI_Gültigkeitsendedatum_der_Warennomenklaturgruppe = $aFIGültigkeitsendedatumDerWarennomenklaturgruppe;

        return $this;
    }

    /**
     * Get AFI_Gültigkeitsendedatum_der_Warennomenklaturgruppe
     *
     * @return \DateTime 
     */
    public function getAFIGültigkeitsendedatumDerWarennomenklaturgruppe()
    {
        return $this->AFI_Gültigkeitsendedatum_der_Warennomenklaturgruppe;
    }

    /**
     * Set AFJ_Mögliche_Codes_der_Nomenklaturgruppe
     *
     * @param string $aFJMöglicheCodesDerNomenklaturgruppe
     * @return T27000
     */
    public function setAFJMöglicheCodesDerNomenklaturgruppe($aFJMöglicheCodesDerNomenklaturgruppe)
    {
        $this->AFJ_Mögliche_Codes_der_Nomenklaturgruppe = $aFJMöglicheCodesDerNomenklaturgruppe;

        return $this;
    }

    /**
     * Get AFJ_Mögliche_Codes_der_Nomenklaturgruppe
     *
     * @return string 
     */
    public function getAFJMöglicheCodesDerNomenklaturgruppe()
    {
        return $this->AFJ_Mögliche_Codes_der_Nomenklaturgruppe;
    }

    /**
     * Set AFK_Beschreibung_der_Nomenklaturgruppe
     *
     * @param string $aFKBeschreibungDerNomenklaturgruppe
     * @return T27000
     */
    public function setAFKBeschreibungDerNomenklaturgruppe($aFKBeschreibungDerNomenklaturgruppe)
    {
        $this->AFK_Beschreibung_der_Nomenklaturgruppe = $aFKBeschreibungDerNomenklaturgruppe;

        return $this;
    }

    /**
     * Get AFK_Beschreibung_der_Nomenklaturgruppe
     *
     * @return string 
     */
    public function getAFKBeschreibungDerNomenklaturgruppe()
    {
        return $this->AFK_Beschreibung_der_Nomenklaturgruppe;
    }
}
