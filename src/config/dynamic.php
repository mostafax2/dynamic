<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dynamic Services
    |--------------------------------------------------------------------------
    |
    |
    */

    'domain' => env('DYNAMIC_DOMAIN',''),

    'token' => env('DYNAMIC_TOKEN',''),
    'timeout' => env('DYNAMIC_TIMEOUT',50000),
    // if you need generate token use auto
    //  ('static' or 'auto')
    'token_status' => env('DYNAMIC_TOCKEN_STATUS','auto'),

    // required when use generate token
    "tenant_id"=>env('tenant_id',''),
    "client_id"=>env('client_id',''),
    "client_secret"=>env('client_secret',''),
    "resource"=>env('resource',''),
    "grant_type"=>env('grant_type','')
];
