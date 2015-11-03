<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N28000
 */
class N28000
{
    /**
     * @var string
     */
    private $AYV_Schlüssel_der_Maßeinheit;

    /**
     * @var string
     */
    private $AYW_Qualifikator_der_Maßeinheit;

    /**
     * @var \DateTime
     */
    private $AYX_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AYY_Endedatum;

    /**
     * @var string
     */
    private $AYZ_Beschreibung_der_Kombination_Maßeinheit_Maßeinheitsqualifi;

    /**
     * @var string
     */
    private $AZA_Kombinationscode;


    /**
     * Set AYV_Schlüssel_der_Maßeinheit
     *
     * @param string $aYVSchlüsselDerMaßeinheit
     * @return N28000
     */
    public function setAYVSchlüsselDerMaßeinheit($aYVSchlüsselDerMaßeinheit)
    {
        $this->AYV_Schlüssel_der_Maßeinheit = $aYVSchlüsselDerMaßeinheit;

        return $this;
    }

    /**
     * Get AYV_Schlüssel_der_Maßeinheit
     *
     * @return string 
     */
    public function getAYVSchlüsselDerMaßeinheit()
    {
        return $this->AYV_Schlüssel_der_Maßeinheit;
    }

    /**
     * Set AYW_Qualifikator_der_Maßeinheit
     *
     * @param string $aYWQualifikatorDerMaßeinheit
     * @return N28000
     */
    public function setAYWQualifikatorDerMaßeinheit($aYWQualifikatorDerMaßeinheit)
    {
        $this->AYW_Qualifikator_der_Maßeinheit = $aYWQualifikatorDerMaßeinheit;

        return $this;
    }

    /**
     * Get AYW_Qualifikator_der_Maßeinheit
     *
     * @return string 
     */
    public function getAYWQualifikatorDerMaßeinheit()
    {
        return $this->AYW_Qualifikator_der_Maßeinheit;
    }

    /**
     * Set AYX_Beginndatum
     *
     * @param \DateTime $aYXBeginndatum
     * @return N28000
     */
    public function setAYXBeginndatum($aYXBeginndatum)
    {
        $this->AYX_Beginndatum = $aYXBeginndatum;

        return $this;
    }

    /**
     * Get AYX_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAYXBeginndatum()
    {
        return $this->AYX_Beginndatum;
    }

    /**
     * Set AYY_Endedatum
     *
     * @param \DateTime $aYYEndedatum
     * @return N28000
     */
    public function setAYYEndedatum($aYYEndedatum)
    {
        $this->AYY_Endedatum = $aYYEndedatum;

        return $this;
    }

    /**
     * Get AYY_Endedatum
     *
     * @return \DateTime 
     */
    public function getAYYEndedatum()
    {
        return $this->AYY_Endedatum;
    }

    /**
     * Set AYZ_Beschreibung_der_Kombination_Maßeinheit_Maßeinheitsqualifi
     *
     * @param string $aYZBeschreibungDerKombinationMaßeinheitMaßeinheitsqualifi
     * @return N28000
     */
    public function setAYZBeschreibungDerKombinationMaßeinheitMaßeinheitsqualifi($aYZBeschreibungDerKombinationMaßeinheitMaßeinheitsqualifi)
    {
        $this->AYZ_Beschreibung_der_Kombination_Maßeinheit_Maßeinheitsqualifi = $aYZBeschreibungDerKombinationMaßeinheitMaßeinheitsqualifi;

        return $this;
    }

    /**
     * Get AYZ_Beschreibung_der_Kombination_Maßeinheit_Maßeinheitsqualifi
     *
     * @return string 
     */
    public function getAYZBeschreibungDerKombinationMaßeinheitMaßeinheitsqualifi()
    {
        return $this->AYZ_Beschreibung_der_Kombination_Maßeinheit_Maßeinheitsqualifi;
    }

    /**
     * Set AZA_Kombinationscode
     *
     * @param string $aZAKombinationscode
     * @return N28000
     */
    public function setAZAKombinationscode($aZAKombinationscode)
    {
        $this->AZA_Kombinationscode = $aZAKombinationscode;

        return $this;
    }

    /**
     * Get AZA_Kombinationscode
     *
     * @return string 
     */
    public function getAZAKombinationscode()
    {
        return $this->AZA_Kombinationscode;
    }
}
