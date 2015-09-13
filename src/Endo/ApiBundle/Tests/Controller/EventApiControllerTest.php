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
     * EventApiController:cgetAction test
     */
    public function testCGetEvent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_events'));

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * EventApiController:getAction test
     */
    public function testGetEvent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_event', ['slug' => 'test-event',]));

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * EventApiController:getAction test
     */
    public function testGetEventNotFound()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_event', ['slug' => 'non-existing-event',]));

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertEquals('application/json', $client->getResponse()->headers->get('Content-Type'));
        $this->assertJson($client->getResponse()->getContent());
    }
}
