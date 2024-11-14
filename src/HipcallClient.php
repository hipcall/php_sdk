<?php

namespace Hipcall;

use GuzzleHttp\Client;
use Hipcall\Resource\Calls;
use Hipcall\Resource\Extensions;
use Hipcall\Resource\Users;

class HipcallClient
{
    private $client;
    private $baseUri;
    private $token;
    
    public $calls;
    public $extensions;
    public $users;

    public function __construct($token, $baseUri = 'https://use.hipcall.com.tr/api/v3/')
    {
        $this->token = $token;
        $this->baseUri = $baseUri;
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
            ],
        ]);

        $this->calls = new Calls($this->client);
        $this->extensions = new Extensions($this->client);
        $this->users = new Users($this->client);
    }
}
