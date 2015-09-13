<?php

namespace Endo\ApiBundle\Tests\Controller;

/**
 * Class EditionControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
class EditionControllerTest extends AbstractControllerTest
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

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_editions'));

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * ArtistApiController:getAction test
     */
    public function testGetArtist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_edition', ['slug' => '2011',]));

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * ArtistApiController:getAction test
     */
    public function testGetArtistNotFound()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_edition', ['slug' => 'test-edition',]));

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertEquals('application/json', $client->getResponse()->headers->get('Content-Type'));
        $this->assertJson($client->getResponse()->getContent());
    }
}
