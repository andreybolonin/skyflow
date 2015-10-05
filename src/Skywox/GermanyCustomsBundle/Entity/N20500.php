<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N20500
 */
class N20500
{
    /**
     * @var string
     */
    private $AUK_Abschnitt_Zolltarif;

    /**
     * @var string
     */
    private $AUL_Kapitel_Zolltarif;

    /**
     * @var \DateTime
     */
    private $AUM_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AUN_Endedatum;


    /**
     * Set AUK_Abschnitt_Zolltarif
     *
     * @param string $aUKAbschnittZolltarif
     * @return N20500
     */
    public function setAUKAbschnittZolltarif($aUKAbschnittZolltarif)
    {
        $this->AUK_Abschnitt_Zolltarif = $aUKAbschnittZolltarif;

        return $this;
    }

    /**
     * Get AUK_Abschnitt_Zolltarif
     *
     * @return string 
     */
    public function getAUKAbschnittZolltarif()
    {
        return $this->AUK_Abschnitt_Zolltarif;
    }

    /**
     * Set AUL_Kapitel_Zolltarif
     *
     * @param string $aULKapitelZolltarif
     * @return N20500
     */
    public function setAULKapitelZolltarif($aULKapitelZolltarif)
    {
        $this->AUL_Kapitel_Zolltarif = $aULKapitelZolltarif;

        return $this;
    }

    /**
     * Get AUL_Kapitel_Zolltarif
     *
     * @return string 
     */
    public function getAULKapitelZolltarif()
    {
        return $this->AUL_Kapitel_Zolltarif;
    }

    /**
     * Set AUM_Beginndatum
     *
     * @param \DateTime $aUMBeginndatum
     * @return N20500
     */
    public function setAUMBeginndatum($aUMBeginndatum)
    {
        $this->AUM_Beginndatum = $aUMBeginndatum;

        return $this;
    }

    /**
     * Get AUM_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAUMBeginndatum()
    {
        return $this->AUM_Beginndatum;
    }

    /**
     * Set AUN_Endedatum
     *
     * @param \DateTime $aUNEndedatum
     * @return N20500
     */
    public function setAUNEndedatum($aUNEndedatum)
    {
        $this->AUN_Endedatum = $aUNEndedatum;

        return $this;
    }

    /**
     * Get AUN_Endedatum
     *
     * @return \DateTime 
     */
    public function getAUNEndedatum()
    {
        return $this->AUN_Endedatum;
    }
}
