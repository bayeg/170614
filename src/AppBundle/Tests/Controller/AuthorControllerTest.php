<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testAuthorlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/author');
    }

    public function testAuthordetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/author/{id}');
    }

}
