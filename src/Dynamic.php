<?php

namespace  Mostafax\Dynamic;

use Illuminate\Support\Facades\Http;

class Dynamic
{
    protected $domain;
    protected $token;
    protected $timeout;

    function __construct()
    {
        $this->domain = config('dynamic.domain');
        $this->token = config('dynamic.token');
        $this->timeout = config('dynamic.timeout');
    }

    public function getData($api, $data = null)
    {
        return Http::timeout($this->timeout)->withHeader('Content-Type', 'application/json')
            ->withBody(json_encode($data))
            ->get("{$this->domain}/{$api}/{$this->token}");
    }

    public function postData($api, $data)
    {
        return Http::timeout($this->timeout)->withHeader('Content-Type', 'application/json')
            ->withBody(json_encode($data))
            ->post("{$this->domain}/{$api}/{$this->token}");
    }
}
