<?php

namespace Endo\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AbstractControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
abstract class AbstractControllerTest extends WebTestCase
{

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        self::bootKernel();
        $this->container = static::$kernel->getContainer();

        $this->setUpTest();
    }

    /**
     *
     * @return void
     */
    abstract protected function setUpTest();

    /**
     * @param $name
     * @param array $params
     * @param bool|false $ref
     *
     * @return string
     */
    protected function routerGenerateUrl($name, $params = array(), $ref = false)
    {
        return $this->container->get('router')->generate($name, $params, $ref);
    }

    /**
     * @param Response $response
     */
    protected function standardResponseTest(Response $response)
    {
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-Type'));
        $this->assertJson($response->getContent());
    }
}