<?php

namespace Skywox\Sonata\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SkywoxSonataAdminBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}