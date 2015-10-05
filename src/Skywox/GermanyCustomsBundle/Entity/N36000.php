<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N36000
 */
class N36000
{
    /**
     * @var string
     */
    private $BBH_Schlüssel_der_Abgabengruppe;

    /**
     * @var \DateTime
     */
    private $BBI_Beginndatum;

    /**
     * @var \DateTime
     */
    private $BBJ_Endedatum;

    /**
     * @var string
     */
    private $BBK_Bezeichnung_der_Abgabengruppe;


    /**
     * Set BBH_Schlüssel_der_Abgabengruppe
     *
     * @param string $bBHSchlüsselDerAbgabengruppe
     * @return N36000
     */
    public function setBBHSchlüsselDerAbgabengruppe($bBHSchlüsselDerAbgabengruppe)
    {
        $this->BBH_Schlüssel_der_Abgabengruppe = $bBHSchlüsselDerAbgabengruppe;

        return $this;
    }

    /**
     * Get BBH_Schlüssel_der_Abgabengruppe
     *
     * @return string 
     */
    public function getBBHSchlüsselDerAbgabengruppe()
    {
        return $this->BBH_Schlüssel_der_Abgabengruppe;
    }

    /**
     * Set BBI_Beginndatum
     *
     * @param \DateTime $bBIBeginndatum
     * @return N36000
     */
    public function setBBIBeginndatum($bBIBeginndatum)
    {
        $this->BBI_Beginndatum = $bBIBeginndatum;

        return $this;
    }

    /**
     * Get BBI_Beginndatum
     *
     * @return \DateTime 
     */
    public function getBBIBeginndatum()
    {
        return $this->BBI_Beginndatum;
    }

    /**
     * Set BBJ_Endedatum
     *
     * @param \DateTime $bBJEndedatum
     * @return N36000
     */
    public function setBBJEndedatum($bBJEndedatum)
    {
        $this->BBJ_Endedatum = $bBJEndedatum;

        return $this;
    }

    /**
     * Get BBJ_Endedatum
     *
     * @return \DateTime 
     */
    public function getBBJEndedatum()
    {
        return $this->BBJ_Endedatum;
    }

    /**
     * Set BBK_Bezeichnung_der_Abgabengruppe
     *
     * @param string $bBKBezeichnungDerAbgabengruppe
     * @return N36000
     */
    public function setBBKBezeichnungDerAbgabengruppe($bBKBezeichnungDerAbgabengruppe)
    {
        $this->BBK_Bezeichnung_der_Abgabengruppe = $bBKBezeichnungDerAbgabengruppe;

        return $this;
    }

    /**
     * Get BBK_Bezeichnung_der_Abgabengruppe
     *
     * @return string 
     */
    public function getBBKBezeichnungDerAbgabengruppe()
    {
        return $this->BBK_Bezeichnung_der_Abgabengruppe;
    }
}
