<?php

namespace SkyFlow\GermanyCustomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * N20300
 */
class N20300
{
    /**
     * @var string
     */
    private $AUI_Abkürzung;

    /**
     * @var string
     */
    private $AUJ_Erläuternder_Text_zur_Abkürzung;


    /**
     * Set AUI_Abkürzung
     *
     * @param string $aUIAbkürzung
     * @return N20300
     */
    public function setAUIAbkürzung($aUIAbkürzung)
    {
        $this->AUI_Abkürzung = $aUIAbkürzung;

        return $this;
    }

    /**
     * Get AUI_Abkürzung
     *
     * @return string 
     */
    public function getAUIAbkürzung()
    {
        return $this->AUI_Abkürzung;
    }

    /**
     * Set AUJ_Erläuternder_Text_zur_Abkürzung
     *
     * @param string $aUJErläuternderTextZurAbkürzung
     * @return N20300
     */
    public function setAUJErläuternderTextZurAbkürzung($aUJErläuternderTextZurAbkürzung)
    {
        $this->AUJ_Erläuternder_Text_zur_Abkürzung = $aUJErläuternderTextZurAbkürzung;

        return $this;
    }

    /**
     * Get AUJ_Erläuternder_Text_zur_Abkürzung
     *
     * @return string 
     */
    public function getAUJErläuternderTextZurAbkürzung()
    {
        return $this->AUJ_Erläuternder_Text_zur_Abkürzung;
    }
}
