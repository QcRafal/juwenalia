<?php

namespace Endo\OAuthBundle\Entity;

use FOS\OAuthServerBundle\Entity\AccessToken as BaseAccessToken;
use Endo\UserBundle\Entity\User;

/**
 * Class AccessToken
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\OAuthBundle\Entity
 */
class AccessToken extends BaseAccessToken
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