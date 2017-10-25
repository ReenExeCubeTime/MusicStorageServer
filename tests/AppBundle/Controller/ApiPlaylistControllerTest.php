<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Client;
use Symfony\Component\HttpFoundation\Response;

class ApiPlaylistControllerTest extends WebTestCase
{
    public function testDefault()
    {
        $client = static::createClient();

        $client->request('GET', '/api/v1/playlist');

        $this->assertResponseSuccess($client);
        $this->assertResponseData([], $client);
    }

    public function testCreate()
    {
        $client = static::createClient();

        $client->request('POST', '/api/v1/playlist');

        $this->assertResponseSuccess($client);
        $this->assertResponseData([], $client);
    }

    private function assertResponseSuccess(Client $client)
    {
        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    private function assertResponseData($expect, Client $client)
    {
        $this->assertEquals($expect, json_decode($client->getResponse()->getContent(), true));
    }
}
