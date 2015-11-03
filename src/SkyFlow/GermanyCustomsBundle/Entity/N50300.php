<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N50300
 */
class N50300
{
    /**
     * @var integer
     */
    private $BHA_SID_der_AE_Nomenklatur;

    /**
     * @var \DateTime
     */
    private $BHB_Beginndatum;

    /**
     * @var string
     */
    private $BHD_Hinweisart;

    /**
     * @var string
     */
    private $BHE_Hinweis;

    /**
     * @var \DateTime
     */
    private $BHC_Endedatum;


    /**
     * Set BHA_SID_der_AE_Nomenklatur
     *
     * @param integer $bHASIDDerAENomenklatur
     * @return N50300
     */
    public function setBHASIDDerAENomenklatur($bHASIDDerAENomenklatur)
    {
        $this->BHA_SID_der_AE_Nomenklatur = $bHASIDDerAENomenklatur;

        return $this;
    }

    /**
     * Get BHA_SID_der_AE_Nomenklatur
     *
     * @return integer 
     */
    public function getBHASIDDerAENomenklatur()
    {
        return $this->BHA_SID_der_AE_Nomenklatur;
    }

    /**
     * Set BHB_Beginndatum
     *
     * @param \DateTime $bHBBeginndatum
     * @return N50300
     */
    public function setBHBBeginndatum($bHBBeginndatum)
    {
        $this->BHB_Beginndatum = $bHBBeginndatum;

        return $this;
    }

    /**
     * Get BHB_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBHBBeginndatum()
    {
        return $this->BHB_Beginndatum;
    }

    /**
     * Set BHD_Hinweisart
     *
     * @param string $bHDHinweisart
     * @return N50300
     */
    public function setBHDHinweisart($bHDHinweisart)
    {
        $this->BHD_Hinweisart = $bHDHinweisart;

        return $this;
    }

    /**
     * Get BHD_Hinweisart
     *
     * @return string 
     */
    public function getBHDHinweisart()
    {
        return $this->BHD_Hinweisart;
    }

    /**
     * Set BHE_Hinweis
     *
     * @param string $bHEHinweis
     * @return N50300
     */
    public function setBHEHinweis($bHEHinweis)
    {
        $this->BHE_Hinweis = $bHEHinweis;

        return $this;
    }

    /**
     * Get BHE_Hinweis
     *
     * @return string 
     */
    public function getBHEHinweis()
    {
        return $this->BHE_Hinweis;
    }

    /**
     * Set BHC_Endedatum
     *
     * @param \DateTime $bHCEndedatum
     * @return N50300
     */
    public function setBHCEndedatum($bHCEndedatum)
    {
        $this->BHC_Endedatum = $bHCEndedatum;

        return $this;
    }

    /**
     * Get BHC_Endedatum
     *
     * @return \DateTime 
     */
    public function getBHCEndedatum()
    {
        return $this->BHC_Endedatum;
    }
}
