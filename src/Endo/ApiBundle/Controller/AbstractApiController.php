<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;

/**
 * Class AbstractApiController
 * @package Endo\ApiBundle\Controller
 */
abstract class AbstractApiController extends FOSRestController implements ClassResourceInterface
{

}
