<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T21000
 */
class T21000
{
    /**
     * @var string
     */
    private $ACK_Maßeinheitscode;

    /**
     * @var \DateTime
     */
    private $ACL_Datum_des_Gültigkeitsbeginns_des_Maßeinheitscodes;

    /**
     * @var \DateTime
     */
    private $ACM_Gültigkeitsendedatum_des_Maßeinheitscodes;

    /**
     * @var string
     */
    private $ACN_Beschreibung_der_Maßeinheit;


    /**
     * Set ACK_Maßeinheitscode
     *
     * @param string $aCKMaßeinheitscode
     * @return T21000
     */
    public function setACKMaßeinheitscode($aCKMaßeinheitscode)
    {
        $this->ACK_Maßeinheitscode = $aCKMaßeinheitscode;

        return $this;
    }

    /**
     * Get ACK_Maßeinheitscode
     *
     * @return string 
     */
    public function getACKMaßeinheitscode()
    {
        return $this->ACK_Maßeinheitscode;
    }

    /**
     * Set ACL_Datum_des_Gültigkeitsbeginns_des_Maßeinheitscodes
     *
     * @param \DateTime $aCLDatumDesGültigkeitsbeginnsDesMaßeinheitscodes
     * @return T21000
     */
    public function setACLDatumDesGültigkeitsbeginnsDesMaßeinheitscodes($aCLDatumDesGültigkeitsbeginnsDesMaßeinheitscodes)
    {
        $this->ACL_Datum_des_Gültigkeitsbeginns_des_Maßeinheitscodes = $aCLDatumDesGültigkeitsbeginnsDesMaßeinheitscodes;

        return $this;
    }

    /**
     * Get ACL_Datum_des_Gültigkeitsbeginns_des_Maßeinheitscodes
     *
     * @return \DateTime 
     */
    public function getACLDatumDesGültigkeitsbeginnsDesMaßeinheitscodes()
    {
        return $this->ACL_Datum_des_Gültigkeitsbeginns_des_Maßeinheitscodes;
    }

    /**
     * Set ACM_Gültigkeitsendedatum_des_Maßeinheitscodes
     *
     * @param \DateTime $aCMGültigkeitsendedatumDesMaßeinheitscodes
     * @return T21000
     */
    public function setACMGültigkeitsendedatumDesMaßeinheitscodes($aCMGültigkeitsendedatumDesMaßeinheitscodes)
    {
        $this->ACM_Gültigkeitsendedatum_des_Maßeinheitscodes = $aCMGültigkeitsendedatumDesMaßeinheitscodes;

        return $this;
    }

    /**
     * Get ACM_Gültigkeitsendedatum_des_Maßeinheitscodes
     *
     * @return \DateTime 
     */
    public function getACMGültigkeitsendedatumDesMaßeinheitscodes()
    {
        return $this->ACM_Gültigkeitsendedatum_des_Maßeinheitscodes;
    }

    /**
     * Set ACN_Beschreibung_der_Maßeinheit
     *
     * @param string $aCNBeschreibungDerMaßeinheit
     * @return T21000
     */
    public function setACNBeschreibungDerMaßeinheit($aCNBeschreibungDerMaßeinheit)
    {
        $this->ACN_Beschreibung_der_Maßeinheit = $aCNBeschreibungDerMaßeinheit;

        return $this;
    }

    /**
     * Get ACN_Beschreibung_der_Maßeinheit
     *
     * @return string 
     */
    public function getACNBeschreibungDerMaßeinheit()
    {
        return $this->ACN_Beschreibung_der_Maßeinheit;
    }
}
