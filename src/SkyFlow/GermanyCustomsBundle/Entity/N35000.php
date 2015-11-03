<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N35000
 */
class N35000
{
    /**
     * @var string
     */
    private $BBC_AHStat_Verschlüsselung_des_Bundeslandes;

    /**
     * @var \DateTime
     */
    private $BBD_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BBE_Endedatum;

    /**
     * @var string
     */
    private $BBF_Name_des_Bundeslandes;

    /**
     * @var string
     */
    private $BBG_Kurzbezeichnung_im_Länderverzeichnis_der_Außenhandelsstati;


    /**
     * Set BBC_AHStat_Verschlüsselung_des_Bundeslandes
     *
     * @param string $bBCAHStatVerschlüsselungDesBundeslandes
     * @return N35000
     */
    public function setBBCAHStatVerschlüsselungDesBundeslandes($bBCAHStatVerschlüsselungDesBundeslandes)
    {
        $this->BBC_AHStat_Verschlüsselung_des_Bundeslandes = $bBCAHStatVerschlüsselungDesBundeslandes;

        return $this;
    }

    /**
     * Get BBC_AHStat_Verschlüsselung_des_Bundeslandes
     *
     * @return string 
     */
    public function getBBCAHStatVerschlüsselungDesBundeslandes()
    {
        return $this->BBC_AHStat_Verschlüsselung_des_Bundeslandes;
    }

    /**
     * Set BBD_Beginndatum
     *
     * @param \DateTime $bBDBeginndatum
     * @return N35000
     */
    public function setBBDBeginndatum($bBDBeginndatum)
    {
        $this->BBD_Beginndatum = $bBDBeginndatum;

        return $this;
    }

    /**
     * Get BBD_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBBDBeginndatum()
    {
        return $this->BBD_Beginndatum;
    }

    /**
     * Set BBE_Endedatum
     *
     * @param \DateTime $bBEEndedatum
     * @return N35000
     */
    public function setBBEEndedatum($bBEEndedatum)
    {
        $this->BBE_Endedatum = $bBEEndedatum;

        return $this;
    }

    /**
     * Get BBE_Endedatum
     *
     * @return \DateTime 
     */
    public function getBBEEndedatum()
    {
        return $this->BBE_Endedatum;
    }

    /**
     * Set BBF_Name_des_Bundeslandes
     *
     * @param string $bBFNameDesBundeslandes
     * @return N35000
     */
    public function setBBFNameDesBundeslandes($bBFNameDesBundeslandes)
    {
        $this->BBF_Name_des_Bundeslandes = $bBFNameDesBundeslandes;

        return $this;
    }

    /**
     * Get BBF_Name_des_Bundeslandes
     *
     * @return string 
     */
    public function getBBFNameDesBundeslandes()
    {
        return $this->BBF_Name_des_Bundeslandes;
    }

    /**
     * Set BBG_Kurzbezeichnung_im_Länderverzeichnis_der_Außenhandelsstati
     *
     * @param string $bBGKurzbezeichnungImLänderverzeichnisDerAußenhandelsstati
     * @return N35000
     */
    public function setBBGKurzbezeichnungImLänderverzeichnisDerAußenhandelsstati($bBGKurzbezeichnungImLänderverzeichnisDerAußenhandelsstati)
    {
        $this->BBG_Kurzbezeichnung_im_Länderverzeichnis_der_Außenhandelsstati = $bBGKurzbezeichnungImLänderverzeichnisDerAußenhandelsstati;

        return $this;
    }

    /**
     * Get BBG_Kurzbezeichnung_im_Länderverzeichnis_der_Außenhandelsstati
     *
     * @return string 
     */
    public function getBBGKurzbezeichnungImLänderverzeichnisDerAußenhandelsstati()
    {
        return $this->BBG_Kurzbezeichnung_im_Länderverzeichnis_der_Außenhandelsstati;
    }
}
