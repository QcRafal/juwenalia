<?php

namespace Endo\OAuthBundle\Entity;

use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;
use Endo\UserBundle\Entity\User;

/**
 * Class AuthCode
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\OAuthBundle\Entity
 */
class AuthCode extends BaseAuthCode
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