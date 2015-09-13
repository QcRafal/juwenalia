<?php

namespace Endo\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Class User
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\UserBundle\Entity
 */
class User extends BaseUser
{
    /**
     * User id
     *
     * @var integer
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


}
