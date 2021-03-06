<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use JMS\Serializer\SerializationContext;

/**
 * Class AbstractApiController
 * @package Endo\ApiBundle\Controller
 */
abstract class AbstractApiController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @param null $name
     *
     * @return \Doctrine\Common\Persistence\ObjectManager|object
     */
    protected function getManager($name = null)
    {
        $doctrine = $this->getDoctrine();

        return $doctrine->getManager($name);
    }

    /**
     * @param array $groups
     *
     * @return SerializationContext
     */
    protected function getSerializationContext(array $groups = ['api'])
    {
        // TODO add groups based on user credentials

        return SerializationContext::create()->setGroups($groups);
    }
}
