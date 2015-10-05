<?php

namespace Skywox\Sonata\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SkywoxSonataUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}