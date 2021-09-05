<?php

namespace App\Tests\Api;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\EventReservation;

class GreetingsTest extends ApiTestCase
{
    public function testCreateGreeting()
    {
        $response = static::createClient()->request('POST', '/greetings', ['json' => [
            'name' => 'Kévin',
        ]]);

        $this->assertResponseStatusCodeSame(201);
        $this->assertJsonContains([
            '@context' => '/contexts/Greeting',
            '@type' => 'Greeting',
            'name' => 'Kévin',
        ]);
    }
}
