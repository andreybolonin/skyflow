<?php

namespace Skywox\AppBundle;

/**
 * Class Compliance
 * @package Skywox\AppBundle
 */
class TrackingNumber
{
    /**
     * @return bool
     */
    public function generate()
    {
        return uniqid();
    }
}