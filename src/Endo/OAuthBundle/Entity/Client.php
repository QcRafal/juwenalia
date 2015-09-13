<?php

namespace Endo\OAuthBundle\Entity;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;

/**
 * Class Client
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\OAuthBundle\Entity
 */
class Client extends BaseClient
{
    /**
     * @var integer
     */
    protected $id;
}