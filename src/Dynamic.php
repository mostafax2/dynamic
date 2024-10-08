<?php

namespace  Mostafax\Dynamic;

use Illuminate\Support\Facades\Http;

class Dynamic
{
    protected $domain;
    protected $token;
    protected $timeout=500;
    protected $useAuthorization=false;


    function __construct()
    {
        $this->domain = config('dynamic.domain');
        $this->timeout = config('dynamic.timeout');
        if (config('dynamic.token_status') == "static") {
            $this->token = config('dynamic.token');
        }else{
            $this->token = $this->generateToken();
            $this->useAuthorization=true;
        }
    }

    function generateToken() {
        $data = [
            "tenant_id" => config('dynamic.tenant_id'),
            "client_id" => config('dynamic.client_id'),
            "client_secret" => config('dynamic.client_secret'),
            "resource" => config('dynamic.resource'),
            "grant_type" => config('dynamic.grant_type'),
        ];

        $host = 'adfs.alhasawi.com';

        $response = Http::timeout(999999)
            ->withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Host' => $host,
            ])
            ->asForm()
            ->post("https://$host/adfs/oauth2/token", $data);

        if ($response->successful()) {
            $tokenData = $response->json();
            return $tokenData['access_token'] ?? null;
        } else {
            $errorMessage = $response->body();
            $statusCode = $response->status();

            \Log::error("Error fetching token: {$errorMessage}", [
                'status_code' => $statusCode,
                'request_data' => $data,
            ]);

            throw new \Exception("Error fetching token: {$errorMessage} (HTTP Status: {$statusCode})");
        }
    }




    public function getData($api, $data = null)
    {
        $headers = ['Content-Type' => 'application/json'];
        if ($this->useAuthorization) {
            $headers['Authorization'] = 'Bearer ' . $this->token;
        }
        return Http::timeout($this->timeout)
                ->withHeaders($headers)
                ->withBody(json_encode($data))
                ->get("{$this->domain}/{$api}". (!$this->useAuthorization ? "/{$this->token}" : ""));
    }


    public function postData($api, $data)
    {
        $headers = ['Content-Type' => 'application/json'];
        if ($this->useAuthorization) {
            $headers['Authorization'] = 'Bearer ' . $this->token;
        }
        return Http::timeout($this->timeout)
                ->withHeaders($headers)
                ->withBody(json_encode($data))
                ->post("{$this->domain}/{$api}" . (!$this->useAuthorization  ? "/{$this->token}" : ""));
    }
}
