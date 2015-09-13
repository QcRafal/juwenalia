<?php

namespace Endo\ApiBundle\Tests\Controller;

use JMS\Serializer\Serializer;

/**
 * Class EditionControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
class EditionControllerTest extends AbstractControllerTest
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * {@inheritdoc}
     */
    protected function setUpTest()
    {
        $this->serializer = $this->container->get('jms_serializer');
    }

    /**
     * EditionApiController:cgetAction test
     */
    public function testCGetEditions()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET',
            $this->routerGenerateUrl('get_editions')
        );

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * EditionApiController:getAction test
     */
    public function testGetEdition()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET',
            $this->routerGenerateUrl('get_edition', ['slug' => '2011',])
        );

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * EditionApiController:getAction test
     */
    public function testGetEditionNotFound()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET',
            $this->routerGenerateUrl('get_edition', ['slug' => 'test-edition',])
        );

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertEquals('application/json', $client->getResponse()->headers->get('Content-Type'));
        $this->assertJson($client->getResponse()->getContent());
    }
}
