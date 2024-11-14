<?php

namespace Hipcall\Resource;

class Extensions extends BaseResource
{
    const BASE_ENDPOINT = 'extensions';

    public function list($query = '')
    {
        $endpoint = self::BASE_ENDPOINT;   
        if (!empty($query)) {
            $endpoint .= '?' . $query;
        }
        return $this->http_get($endpoint);
    }

    public function get($id)
    {
        $endpoint = self::BASE_ENDPOINT . "/" . $id . "/";
        return $this->http_get($endpoint);
    }

    public function createCall($id, array $callParams)
    {
        $endpoint = "extensions/{$id}/call";
        return $this->http_post($endpoint, $callParams);
    }
}