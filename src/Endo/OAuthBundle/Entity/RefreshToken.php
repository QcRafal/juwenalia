<?php

namespace Endo\OAuthBundle\Entity;

use FOS\OAuthServerBundle\Entity\RefreshToken as BaseRefreshToken;
use Endo\UserBundle\Entity\User;

/**
 * Class RefreshToken
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\OAuthBundle\Entity
 */
class RefreshToken extends BaseRefreshToken
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var User
     */
    protected $user;
}