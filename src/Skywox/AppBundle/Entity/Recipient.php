<?php

namespace Skywox\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipient
 *
 * @ORM\Table(name="recipient")
 * @ORM\Entity
 */
class Recipient extends Base
{
    /**
     * @var string
     *
     * @ORM\Column(name="formOfAdress", type="string", length=255)
     */
    private $formOfAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="familyName", type="string", length=255)
     */
    private $familyName;

    /**
     * Set formOfAdress
     *
     * @param string $formOfAdress
     * @return Recipient
     */
    public function setFormOfAdress($formOfAdress)
    {
        $this->formOfAdress = $formOfAdress;

        return $this;
    }

    /**
     * Get formOfAdress
     *
     * @return string 
     */
    public function getFormOfAdress()
    {
        return $this->formOfAdress;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Recipient
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

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Recipient
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set familyName
     *
     * @param string $familyName
     * @return Recipient
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Get familyName
     *
     * @return string 
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }
}
