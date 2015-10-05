<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N21000
 */
class N21000
{
    /**
     * @var string
     */
    private $AUT_ID_des_Geographischen_Gebietes;

    /**
     * @var string
     */
    private $AUU_AHStat_Code;

    /**
     * @var \DateTime
     */
    private $AUV_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AUW_Endedatum;

    /**
     * @var string
     */
    private $AUX_Name_des_geogr_Gebietes_Land_Region;

    /**
     * @var string
     */
    private $AUY_Kennzeichen_der_Länderliste;

    /**
     * @var string
     */
    private $AUZ_Kurzbezeichnung_im_Länderverzeichnis_der_AHStat;

    /**
     * @var string
     */
    private $AVA_Zusatztext_aus_dem_Länderverzeichnis_der_AHStat;


    /**
     * Set AUT_ID_des_Geographischen_Gebietes
     *
     * @param string $aUTIDDesGeographischenGebietes
     * @return N21000
     */
    public function setAUTIDDesGeographischenGebietes($aUTIDDesGeographischenGebietes)
    {
        $this->AUT_ID_des_Geographischen_Gebietes = $aUTIDDesGeographischenGebietes;

        return $this;
    }

    /**
     * Get AUT_ID_des_Geographischen_Gebietes
     *
     * @return string 
     */
    public function getAUTIDDesGeographischenGebietes()
    {
        return $this->AUT_ID_des_Geographischen_Gebietes;
    }

    /**
     * Set AUU_AHStat_Code
     *
     * @param string $aUUAHStatCode
     * @return N21000
     */
    public function setAUUAHStatCode($aUUAHStatCode)
    {
        $this->AUU_AHStat_Code = $aUUAHStatCode;

        return $this;
    }

    /**
     * Get AUU_AHStat_Code
     *
     * @return string 
     */
    public function getAUUAHStatCode()
    {
        return $this->AUU_AHStat_Code;
    }

    /**
     * Set AUV_Beginndatum
     *
     * @param \DateTime $aUVBeginndatum
     * @return N21000
     */
    public function setAUVBeginndatum($aUVBeginndatum)
    {
        $this->AUV_Beginndatum = $aUVBeginndatum;

        return $this;
    }

    /**
     * Get AUV_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAUVBeginndatum()
    {
        return $this->AUV_Beginndatum;
    }

    /**
     * Set AUW_Endedatum
     *
     * @param \DateTime $aUWEndedatum
     * @return N21000
     */
    public function setAUWEndedatum($aUWEndedatum)
    {
        $this->AUW_Endedatum = $aUWEndedatum;

        return $this;
    }

    /**
     * Get AUW_Endedatum
     *
     * @return \DateTime 
     */
    public function getAUWEndedatum()
    {
        return $this->AUW_Endedatum;
    }

    /**
     * Set AUX_Name_des_geogr_Gebietes_Land_Region
     *
     * @param string $aUXNameDesGeogrGebietesLandRegion
     * @return N21000
     */
    public function setAUXNameDesGeogrGebietesLandRegion($aUXNameDesGeogrGebietesLandRegion)
    {
        $this->AUX_Name_des_geogr_Gebietes_Land_Region = $aUXNameDesGeogrGebietesLandRegion;

        return $this;
    }

    /**
     * Get AUX_Name_des_geogr_Gebietes_Land_Region
     *
     * @return string 
     */
    public function getAUXNameDesGeogrGebietesLandRegion()
    {
        return $this->AUX_Name_des_geogr_Gebietes_Land_Region;
    }

    /**
     * Set AUY_Kennzeichen_der_Länderliste
     *
     * @param string $aUYKennzeichenDerLänderliste
     * @return N21000
     */
    public function setAUYKennzeichenDerLänderliste($aUYKennzeichenDerLänderliste)
    {
        $this->AUY_Kennzeichen_der_Länderliste = $aUYKennzeichenDerLänderliste;

        return $this;
    }

    /**
     * Get AUY_Kennzeichen_der_Länderliste
     *
     * @return string 
     */
    public function getAUYKennzeichenDerLänderliste()
    {
        return $this->AUY_Kennzeichen_der_Länderliste;
    }

    /**
     * Set AUZ_Kurzbezeichnung_im_Länderverzeichnis_der_AHStat
     *
     * @param string $aUZKurzbezeichnungImLänderverzeichnisDerAHStat
     * @return N21000
     */
    public function setAUZKurzbezeichnungImLänderverzeichnisDerAHStat($aUZKurzbezeichnungImLänderverzeichnisDerAHStat)
    {
        $this->AUZ_Kurzbezeichnung_im_Länderverzeichnis_der_AHStat = $aUZKurzbezeichnungImLänderverzeichnisDerAHStat;

        return $this;
    }

    /**
     * Get AUZ_Kurzbezeichnung_im_Länderverzeichnis_der_AHStat
     *
     * @return string 
     */
    public function getAUZKurzbezeichnungImLänderverzeichnisDerAHStat()
    {
        return $this->AUZ_Kurzbezeichnung_im_Länderverzeichnis_der_AHStat;
    }

    /**
     * Set AVA_Zusatztext_aus_dem_Länderverzeichnis_der_AHStat
     *
     * @param string $aVAZusatztextAusDemLänderverzeichnisDerAHStat
     * @return N21000
     */
    public function setAVAZusatztextAusDemLänderverzeichnisDerAHStat($aVAZusatztextAusDemLänderverzeichnisDerAHStat)
    {
        $this->AVA_Zusatztext_aus_dem_Länderverzeichnis_der_AHStat = $aVAZusatztextAusDemLänderverzeichnisDerAHStat;

        return $this;
    }

    /**
     * Get AVA_Zusatztext_aus_dem_Länderverzeichnis_der_AHStat
     *
     * @return string 
     */
    public function getAVAZusatztextAusDemLänderverzeichnisDerAHStat()
    {
        return $this->AVA_Zusatztext_aus_dem_Länderverzeichnis_der_AHStat;
    }
}
