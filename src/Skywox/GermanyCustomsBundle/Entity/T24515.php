<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T24515
 */
class T24515
{
    /**
     * @var integer
     */
    private $AEI_SID_des_Zusatzcodes;

    /**
     * @var string
     */
    private $AEJ_Fußnotenart_ID;

    /**
     * @var string
     */
    private $AEK_Fußnoten_ID;

    /**
     * @var \DateTime
     */
    private $AEL_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Zusatz;

    /**
     * @var \DateTime
     */
    private $AEM_Gültigkeitsendedatum_der_Verbindung_zwischen_Zusatzcodes_un;

    /**
     * @var string
     */
    private $AEN_Zusatzcodeart_ID;

    /**
     * @var string
     */
    private $AEO_Zusatzcode;


    /**
     * Set AEI_SID_des_Zusatzcodes
     *
     * @param integer $aEISIDDesZusatzcodes
     * @return T24515
     */
    public function setAEISIDDesZusatzcodes($aEISIDDesZusatzcodes)
    {
        $this->AEI_SID_des_Zusatzcodes = $aEISIDDesZusatzcodes;

        return $this;
    }

    /**
     * Get AEI_SID_des_Zusatzcodes
     *
     * @return integer 
     */
    public function getAEISIDDesZusatzcodes()
    {
        return $this->AEI_SID_des_Zusatzcodes;
    }

    /**
     * Set AEJ_Fußnotenart_ID
     *
     * @param string $aEJFußnotenartID
     * @return T24515
     */
    public function setAEJFußnotenartID($aEJFußnotenartID)
    {
        $this->AEJ_Fußnotenart_ID = $aEJFußnotenartID;

        return $this;
    }

    /**
     * Get AEJ_Fußnotenart_ID
     *
     * @return string 
     */
    public function getAEJFußnotenartID()
    {
        return $this->AEJ_Fußnotenart_ID;
    }

    /**
     * Set AEK_Fußnoten_ID
     *
     * @param string $aEKFußnotenID
     * @return T24515
     */
    public function setAEKFußnotenID($aEKFußnotenID)
    {
        $this->AEK_Fußnoten_ID = $aEKFußnotenID;

        return $this;
    }

    /**
     * Get AEK_Fußnoten_ID
     *
     * @return string 
     */
    public function getAEKFußnotenID()
    {
        return $this->AEK_Fußnoten_ID;
    }

    /**
     * Set AEL_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Zusatz
     *
     * @param \DateTime $aELDatumDesGültigkeitsbeginnsDerVerbindungZwischenZusatz
     * @return T24515
     */
    public function setAELDatumDesGültigkeitsbeginnsDerVerbindungZwischenZusatz($aELDatumDesGültigkeitsbeginnsDerVerbindungZwischenZusatz)
    {
        $this->AEL_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Zusatz = $aELDatumDesGültigkeitsbeginnsDerVerbindungZwischenZusatz;

        return $this;
    }

    /**
     * Get AEL_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Zusatz
     *
     * @return \DateTime 
     */
    public function getAELDatumDesGültigkeitsbeginnsDerVerbindungZwischenZusatz()
    {
        return $this->AEL_Datum_des_Gültigkeitsbeginns_der_Verbindung_zwischen_Zusatz;
    }

    /**
     * Set AEM_Gültigkeitsendedatum_der_Verbindung_zwischen_Zusatzcodes_un
     *
     * @param \DateTime $aEMGültigkeitsendedatumDerVerbindungZwischenZusatzcodesUn
     * @return T24515
     */
    public function setAEMGültigkeitsendedatumDerVerbindungZwischenZusatzcodesUn($aEMGültigkeitsendedatumDerVerbindungZwischenZusatzcodesUn)
    {
        $this->AEM_Gültigkeitsendedatum_der_Verbindung_zwischen_Zusatzcodes_un = $aEMGültigkeitsendedatumDerVerbindungZwischenZusatzcodesUn;

        return $this;
    }

    /**
     * Get AEM_Gültigkeitsendedatum_der_Verbindung_zwischen_Zusatzcodes_un
     *
     * @return \DateTime 
     */
    public function getAEMGültigkeitsendedatumDerVerbindungZwischenZusatzcodesUn()
    {
        return $this->AEM_Gültigkeitsendedatum_der_Verbindung_zwischen_Zusatzcodes_un;
    }

    /**
     * Set AEN_Zusatzcodeart_ID
     *
     * @param string $aENZusatzcodeartID
     * @return T24515
     */
    public function setAENZusatzcodeartID($aENZusatzcodeartID)
    {
        $this->AEN_Zusatzcodeart_ID = $aENZusatzcodeartID;

        return $this;
    }

    /**
     * Get AEN_Zusatzcodeart_ID
     *
     * @return string 
     */
    public function getAENZusatzcodeartID()
    {
        return $this->AEN_Zusatzcodeart_ID;
    }

    /**
     * Set AEO_Zusatzcode
     *
     * @param string $aEOZusatzcode
     * @return T24515
     */
    public function setAEOZusatzcode($aEOZusatzcode)
    {
        $this->AEO_Zusatzcode = $aEOZusatzcode;

        return $this;
    }

    /**
     * Get AEO_Zusatzcode
     *
     * @return string 
     */
    public function getAEOZusatzcode()
    {
        return $this->AEO_Zusatzcode;
    }
}
