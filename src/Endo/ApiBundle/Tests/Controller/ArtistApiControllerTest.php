<?php

namespace Endo\ApiBundle\Tests\Controller;

class DefaultControllerTest extends AbstractControllerTest
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $this->routerGenerateUrl('get_artists'));

        $this->standardResponseTest($client->getResponse());
    }
}
