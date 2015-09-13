<?php

namespace Endo\ApiBundle\Tests\Controller;

use JMS\Serializer\Serializer;

/**
 * Class OrganizerControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
class OrganizerControllerTest extends AbstractControllerTest
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
     * OrganizerApiController:cgetAction test
     */
    public function testCGetOrganizer()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET',
            $this->routerGenerateUrl('get_organizers')
        );

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * OrganizerApiController:getAction test
     */
    public function testGetOrganizer()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET',
            $this->routerGenerateUrl('get_organizer', ['slug' => 'test-organizer-1',])
        );

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * OrganizerApiController:getAction test
     */
    public function testGetOrganizerNotFound()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'GET',
            $this->routerGenerateUrl('get_organizer', ['slug' => 'non-existing-organizer',])
        );

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertEquals('application/json', $client->getResponse()->headers->get('Content-Type'));
        $this->assertJson($client->getResponse()->getContent());
    }
}
