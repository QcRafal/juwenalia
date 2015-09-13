<?php

namespace Endo\ApiDocBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class EndoApiDocBundle
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\ApiDocBundle
 */
class EndoApiDocBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'NelmioApiDocBundle';
    }

}
