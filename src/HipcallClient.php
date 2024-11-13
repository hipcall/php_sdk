<?php

namespace Hipcall;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class HipcallClient
{
    private $client;
    private $baseUri = 'https://use.hipcall.com.tr/api/v3/';
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
            ],
        ]);
    }

    public function getEndpoint($endpoint)
    {
        try {
            $response = $this->client->get($endpoint);
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            return $e->getResponse()->getBody()->getContents();
        }
    }

    public function postEndpoint($endpoint, array $data)
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
