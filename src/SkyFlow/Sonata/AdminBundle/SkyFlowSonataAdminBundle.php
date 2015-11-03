<?php

namespace SkyFlow\Sonata\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SkyFlowSonataAdminBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}