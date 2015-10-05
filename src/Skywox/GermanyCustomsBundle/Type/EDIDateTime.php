<?php

namespace Skywox\GermanyCustomsBundle\Type;

/**
 * Class EDIDateTime
 * @package Skywox\GermanyCustomsBundle\Type
 */
class EDIDateTime extends \DateTime
{
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format('U');
    }

    /**
     * @param string $format
     * @param string $time
     * @return \DateTime
     */
    public static function ediCreateFromFormat($format, $time)
    {
        $d = parent::createFromFormat($format, $time);

        $edi = new self();
        $edi->setDate($d->format('Y'), $d->format('m'), $d->format('d'));
        $edi->setTime($d->format('H'), $d->format('i'), $d->format('s'));

        return $edi;
    }
}