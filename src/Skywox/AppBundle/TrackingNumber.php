<?php

namespace SkyFlow\AppBundle;

/**
 * Class Compliance
 * @package SkyFlow\AppBundle
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