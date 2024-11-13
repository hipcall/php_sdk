<?php

namespace Hipcall\Resource;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class BaseResource
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function http_get($endpoint)
    {
        try {
            $response = $this->client->get($endpoint);
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            return $e->getResponse()->getBody()->getContents();
        }
    }

    protected function http_post($endpoint, array $data)
    {
        try {
            $response = $this->client->post($endpoint, [
                'json' => $data,
            ]);
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            return $e->getResponse()->getBody()->getContents();
        }
    }
}
