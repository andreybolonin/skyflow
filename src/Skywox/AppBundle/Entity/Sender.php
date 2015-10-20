<?php

namespace Skywox\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sender
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sender extends Base
{
    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * Set company
     *
     * @param string $company
     * @return Sender
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }
}
