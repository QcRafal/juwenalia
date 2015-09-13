<?php

namespace Endo\ApiBundle\Tests\Controller;

/**
 * Class EventControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
class EventControllerTest extends AbstractControllerTest
{

    /**
     * {@inheritdoc}
     */
    protected function setUpTest()
    {

    }

    /**
     * ArtistApiController:cgetAction test
     */
    public function testCGetArtists()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_events'));

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * ArtistApiController:getAction test
     */
    public function testGetArtistNotFound()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_event', ['slug' => 'test-event',]));

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertEquals('application/json', $client->getResponse()->headers->get('Content-Type'));
        $this->assertJson($client->getResponse()->getContent());
    }
}
