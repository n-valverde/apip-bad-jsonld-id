<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FooTest extends WebTestCase
{

    public function testFoo(): void
    {
        $client = self::createClient();

        $client->request('GET', '/api/foo/1/something');
        $this->assertResponseIsSuccessful();

        $response = json_decode($client->getResponse()->getContent(), true);

        // With BC flag OFF, this becomes '/api/foo/1/something'
        $this->assertSame('/api/foo/1', $response['@id']);
    }
}