<?php

namespace Skywox\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N22500
 */
class N22500
{
    /**
     * @var integer
     */
    private $AVJ_SID;

    /**
     * @var string
     */
    private $AVK_Schlüssel_eines_Landes_oder_einer_Ländergruppe;

    /**
     * @var \DateTime
     */
    private $AVL_Beginndatum;

    /**
     * @var \DateTime
     */
    private $AVM_Endedatum;


    /**
     * Set AVJ_SID
     *
     * @param integer $aVJSID
     * @return N22500
     */
    public function setAVJSID($aVJSID)
    {
        $this->AVJ_SID = $aVJSID;

        return $this;
    }

    /**
     * Get AVJ_SID
     *
     * @return integer 
     */
    public function getAVJSID()
    {
        return $this->AVJ_SID;
    }

    /**
     * Set AVK_Schlüssel_eines_Landes_oder_einer_Ländergruppe
     *
     * @param string $aVKSchlüsselEinesLandesOderEinerLändergruppe
     * @return N22500
     */
    public function setAVKSchlüsselEinesLandesOderEinerLändergruppe($aVKSchlüsselEinesLandesOderEinerLändergruppe)
    {
        $this->AVK_Schlüssel_eines_Landes_oder_einer_Ländergruppe = $aVKSchlüsselEinesLandesOderEinerLändergruppe;

        return $this;
    }

    /**
     * Get AVK_Schlüssel_eines_Landes_oder_einer_Ländergruppe
     *
     * @return string 
     */
    public function getAVKSchlüsselEinesLandesOderEinerLändergruppe()
    {
        return $this->AVK_Schlüssel_eines_Landes_oder_einer_Ländergruppe;
    }

    /**
     * Set AVL_Beginndatum
     *
     * @param \DateTime $aVLBeginndatum
     * @return N22500
     */
    public function setAVLBeginndatum($aVLBeginndatum)
    {
        $this->AVL_Beginndatum = $aVLBeginndatum;

        return $this;
    }

    /**
     * Get AVL_Beginndatum
     *
     * @return \DateTime 
     */
    public function getAVLBeginndatum()
    {
        return $this->AVL_Beginndatum;
    }

    /**
     * Set AVM_Endedatum
     *
     * @param \DateTime $aVMEndedatum
     * @return N22500
     */
    public function setAVMEndedatum($aVMEndedatum)
    {
        $this->AVM_Endedatum = $aVMEndedatum;

        return $this;
    }

    /**
     * Get AVM_Endedatum
     *
     * @return \DateTime 
     */
    public function getAVMEndedatum()
    {
        return $this->AVM_Endedatum;
    }
}
