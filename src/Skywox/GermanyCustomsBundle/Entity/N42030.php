<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N42030
 */
class N42030
{
    /**
     * @var integer
     */
    private $BFV_SID_der_nationalen_Warennomenklatur;

    /**
     * @var string
     */
    private $BFW_Beginndatum_der_Saison;

    /**
     * @var string
     */
    private $BFX_Endedatum_der_Saison;

    /**
     * @var integer
     */
    private $BFY_SID_der_Verweiscodenummer;

    /**
     * @var string
     */
    private $BFZ_Verweiscodenummer;


    /**
     * Set BFV_SID_der_nationalen_Warennomenklatur
     *
     * @param integer $bFVSIDDerNationalenWarennomenklatur
     * @return N42030
     */
    public function setBFVSIDDerNationalenWarennomenklatur($bFVSIDDerNationalenWarennomenklatur)
    {
        $this->BFV_SID_der_nationalen_Warennomenklatur = $bFVSIDDerNationalenWarennomenklatur;

        return $this;
    }

    /**
     * Get BFV_SID_der_nationalen_Warennomenklatur
     *
     * @return integer 
     */
    public function getBFVSIDDerNationalenWarennomenklatur()
    {
        return $this->BFV_SID_der_nationalen_Warennomenklatur;
    }

    /**
     * Set BFW_Beginndatum_der_Saison
     *
     * @param string $bFWBeginndatumDerSaison
     * @return N42030
     */
    public function setBFWBeginndatumDerSaison($bFWBeginndatumDerSaison)
    {
        $this->BFW_Beginndatum_der_Saison = $bFWBeginndatumDerSaison;

        return $this;
    }

    /**
     * Get BFW_Beginndatum_der_Saison
     *
     * @return string 
     */
    public function getBFWBeginndatumDerSaison()
    {
        return $this->BFW_Beginndatum_der_Saison;
    }

    /**
     * Set BFX_Endedatum_der_Saison
     *
     * @param string $bFXEndedatumDerSaison
     * @return N42030
     */
    public function setBFXEndedatumDerSaison($bFXEndedatumDerSaison)
    {
        $this->BFX_Endedatum_der_Saison = $bFXEndedatumDerSaison;

        return $this;
    }

    /**
     * Get BFX_Endedatum_der_Saison
     *
     * @return string 
     */
    public function getBFXEndedatumDerSaison()
    {
        return $this->BFX_Endedatum_der_Saison;
    }

    /**
     * Set BFY_SID_der_Verweiscodenummer
     *
     * @param integer $bFYSIDDerVerweiscodenummer
     * @return N42030
     */
    public function setBFYSIDDerVerweiscodenummer($bFYSIDDerVerweiscodenummer)
    {
        $this->BFY_SID_der_Verweiscodenummer = $bFYSIDDerVerweiscodenummer;

        return $this;
    }

    /**
     * Get BFY_SID_der_Verweiscodenummer
     *
     * @return integer 
     */
    public function getBFYSIDDerVerweiscodenummer()
    {
        return $this->BFY_SID_der_Verweiscodenummer;
    }

    /**
     * Set BFZ_Verweiscodenummer
     *
     * @param string $bFZVerweiscodenummer
     * @return N42030
     */
    public function setBFZVerweiscodenummer($bFZVerweiscodenummer)
    {
        $this->BFZ_Verweiscodenummer = $bFZVerweiscodenummer;

        return $this;
    }

    /**
     * Get BFZ_Verweiscodenummer
     *
     * @return string 
     */
    public function getBFZVerweiscodenummer()
    {
        return $this->BFZ_Verweiscodenummer;
    }
}
