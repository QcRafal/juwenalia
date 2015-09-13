<?php

namespace Endo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class EndoUserBundle
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\UserBundle
 */
class EndoUserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
