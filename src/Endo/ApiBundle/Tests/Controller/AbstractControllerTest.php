<?php

namespace Endo\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AbstractControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
abstract class AbstractControllerTest extends WebTestCase
{
    /**
     * @param $name
     * @param array $params
     * @param bool|false $ref
     *
     * @return string
     */
    protected function routerGenerateUrl($name, $params = array(), $ref = false)
    {
        $client = static::createClient();

        return $client->getContainer()->get('router')->generate($name, $params, $ref);
    }

    /**
     * @param Response $response
     */
    protected function standardResponseTest(Response $response)
    {
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-Type'));
    }
}