<?php

namespace Hipcall\Resource;

class Calls extends BaseResource
{
    const BASE_ENDPOINT = 'calls';

    public function list($query = '')
    {
        $endpoint = self::BASE_ENDPOINT;   
        if (!empty($query)) {
            $endpoint .= '?' . $query;
        }
        return $this->http_get($endpoint);
    }

    public function get($id = '', $date = '')
    {
        $endpoint = self::BASE_ENDPOINT . "/" . $id . "?date=" . $date;  
        return $this->http_get($endpoint);
    }
}
