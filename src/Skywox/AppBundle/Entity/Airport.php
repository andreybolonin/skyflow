<?php

namespace Skywox\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="airport")
 */
class Airport extends Base
{
    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * Set title
     *
     * @param string $title
     * @return Airport
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns a string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getTitle() ?: '-';
    }
}
