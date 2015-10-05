<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N50400
 */
class N50400
{
    /**
     * @var integer
     */
    private $BHF_SID_der_nationalen_AE_Nomenklatur;

    /**
     * @var \DateTime
     */
    private $BHG_Beginndatum;

    /**
     * @var string
     */
    private $BHI_Hinweisart;

    /**
     * @var string
     */
    private $BHJ_Hinweis;

    /**
     * @var \DateTime
     */
    private $BHH_Endedatum;


    /**
     * Set BHF_SID_der_nationalen_AE_Nomenklatur
     *
     * @param integer $bHFSIDDerNationalenAENomenklatur
     * @return N50400
     */
    public function setBHFSIDDerNationalenAENomenklatur($bHFSIDDerNationalenAENomenklatur)
    {
        $this->BHF_SID_der_nationalen_AE_Nomenklatur = $bHFSIDDerNationalenAENomenklatur;

        return $this;
    }

    /**
     * Get BHF_SID_der_nationalen_AE_Nomenklatur
     *
     * @return integer 
     */
    public function getBHFSIDDerNationalenAENomenklatur()
    {
        return $this->BHF_SID_der_nationalen_AE_Nomenklatur;
    }

    /**
     * Set BHG_Beginndatum
     *
     * @param \DateTime $bHGBeginndatum
     * @return N50400
     */
    public function setBHGBeginndatum($bHGBeginndatum)
    {
        $this->BHG_Beginndatum = $bHGBeginndatum;

        return $this;
    }

    /**
     * Get BHG_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBHGBeginndatum()
    {
        return $this->BHG_Beginndatum;
    }

    /**
     * Set BHI_Hinweisart
     *
     * @param string $bHIHinweisart
     * @return N50400
     */
    public function setBHIHinweisart($bHIHinweisart)
    {
        $this->BHI_Hinweisart = $bHIHinweisart;

        return $this;
    }

    /**
     * Get BHI_Hinweisart
     *
     * @return string 
     */
    public function getBHIHinweisart()
    {
        return $this->BHI_Hinweisart;
    }

    /**
     * Set BHJ_Hinweis
     *
     * @param string $bHJHinweis
     * @return N50400
     */
    public function setBHJHinweis($bHJHinweis)
    {
        $this->BHJ_Hinweis = $bHJHinweis;

        return $this;
    }

    /**
     * Get BHJ_Hinweis
     *
     * @return string 
     */
    public function getBHJHinweis()
    {
        return $this->BHJ_Hinweis;
    }

    /**
     * Set BHH_Endedatum
     *
     * @param \DateTime $bHHEndedatum
     * @return N50400
     */
    public function setBHHEndedatum($bHHEndedatum)
    {
        $this->BHH_Endedatum = $bHHEndedatum;

        return $this;
    }

    /**
     * Get BHH_Endedatum
     *
     * @return \DateTime 
     */
    public function getBHHEndedatum()
    {
        return $this->BHH_Endedatum;
    }
}
