<?php

namespace Endo\ApiBundle\Tests\Controller;

/**
 * Class DefaultControllerTest
 * @package Endo\ApiBundle\Tests\Controller
 */
class DefaultControllerTest extends AbstractControllerTest
{

    /**
     * {@inheritdoc}
     */
    protected function setUpTest()
    {}

    /**
     * ArtistApiController:cgetAction test
     */
    public function testCGetArtists()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_artists'));

        $this->standardResponseTest($client->getResponse());
    }

    /**
     * ArtistApiController:getAction test
     */
    public function testGetArtist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_artist', [
            'slug' => 'test-artist'
        ]));

        $this->standardResponseTest($client->getResponse());
    }


}
