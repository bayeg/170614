<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{
    public function testCategorylist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/category');
    }

    public function testCategorydetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/category/{id}');
    }

}
