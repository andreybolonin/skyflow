<?php

namespace SkyFlow\Sonata\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SkyFlowSonataUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}