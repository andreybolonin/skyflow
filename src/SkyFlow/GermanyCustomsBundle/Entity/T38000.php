<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T38000
 */
class T38000
{
    /**
     * @var string
     */
    private $ANH_Ordnungsnummer;

    /**
     * @var \DateTime
     */
    private $ANI_Gültigkeitsbeginn;

    /**
     * @var \DateTime
     */
    private $ANJ_Gültigkeitsende;

    /**
     * @var \DateTime
     */
    private $ANK_Datum_des_Erreichens_der_Höchstmenge;


    /**
     * Set ANH_Ordnungsnummer
     *
     * @param string $aNHOrdnungsnummer
     * @return T38000
     */
    public function setANHOrdnungsnummer($aNHOrdnungsnummer)
    {
        $this->ANH_Ordnungsnummer = $aNHOrdnungsnummer;

        return $this;
    }

    /**
     * Get ANH_Ordnungsnummer
     *
     * @return string 
     */
    public function getANHOrdnungsnummer()
    {
        return $this->ANH_Ordnungsnummer;
    }

    /**
     * Set ANI_Gültigkeitsbeginn
     *
     * @param \DateTime $aNIGültigkeitsbeginn
     * @return T38000
     */
    public function setANIGültigkeitsbeginn($aNIGültigkeitsbeginn)
    {
        $this->ANI_Gültigkeitsbeginn = $aNIGültigkeitsbeginn;

        return $this;
    }

    /**
     * Get ANI_Gültigkeitsbeginn
     *
     * @return \DateTime 
     */
    public function getANIGültigkeitsbeginn()
    {
        return $this->ANI_Gültigkeitsbeginn;
    }

    /**
     * Set ANJ_Gültigkeitsende
     *
     * @param \DateTime $aNJGültigkeitsende
     * @return T38000
     */
    public function setANJGültigkeitsende($aNJGültigkeitsende)
    {
        $this->ANJ_Gültigkeitsende = $aNJGültigkeitsende;

        return $this;
    }

    /**
     * Get ANJ_Gültigkeitsende
     *
     * @return \DateTime 
     */
    public function getANJGültigkeitsende()
    {
        return $this->ANJ_Gültigkeitsende;
    }

    /**
     * Set ANK_Datum_des_Erreichens_der_Höchstmenge
     *
     * @param \DateTime $aNKDatumDesErreichensDerHöchstmenge
     * @return T38000
     */
    public function setANKDatumDesErreichensDerHöchstmenge($aNKDatumDesErreichensDerHöchstmenge)
    {
        $this->ANK_Datum_des_Erreichens_der_Höchstmenge = $aNKDatumDesErreichensDerHöchstmenge;

        return $this;
    }

    /**
     * Get ANK_Datum_des_Erreichens_der_Höchstmenge
     *
     * @return \DateTime 
     */
    public function getANKDatumDesErreichensDerHöchstmenge()
    {
        return $this->ANK_Datum_des_Erreichens_der_Höchstmenge;
    }
}
