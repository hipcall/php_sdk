<?php

namespace Tests\Resource;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use Hipcall\Resource\Calls;

class CallsTest extends TestCase
{
    public function testCreateCard()
    {
        // Set up a mock response
        $responseBody = [
            "data" => [
              "call_id" => "6c64f58d-65fc-4415-8a3e-958f0cd05504",
              "card" => [
                [
                  "link" => "https://my-crm.com",
                  "text" => "My CRM",
                  "type" => "title"
                ]
              ]
            ]
        ];
        $mock = new MockHandler([
            new Response(201, [], json_encode($responseBody))
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        // Create instance of Calls with the mock client
        $callsResource = new Calls($client);

        // Define test data
        $callId = '6c64f58d-65fc-4415-8a3e-958f0cd05504';
        $cardParams = [
            [
                'link' => 'https://my-crm.com',
                'text' => 'My CRM',
                'type' => 'title'
            ],
        ];

        // Call the method
        $response = $callsResource->createCard($callId, $cardParams);

        // Assert the response
        $this->assertIsArray($response);
        $this->assertArrayHasKey('data', $response);
        $this->assertEquals($response['data']['call_id'], $callId);
    }
}
