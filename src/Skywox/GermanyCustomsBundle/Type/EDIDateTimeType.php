<?php

namespace Skywox\GermanyCustomsBundle\Type;

use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Class EDIDateTimeType
 * @package Skywox\GermanyCustomsBundle\Type
 */
class EDIDateTimeType extends DateTimeType
{
    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return \DateTime|mixed|EDIDateTime
     * @throws \Doctrine\DBAL\Types\ConversionException
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $dateTime = parent::convertToPHPValue($value, $platform);

        if ( ! $dateTime) {
            return $dateTime;
        }

        return new EDIDateTime('@' . $dateTime->format('U'));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edidatetime';
    }
}