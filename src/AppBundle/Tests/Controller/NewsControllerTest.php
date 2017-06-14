<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsControllerTest extends WebTestCase
{
    public function testNewslist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testNewsdetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newsDetail/{id}');
    }

}
