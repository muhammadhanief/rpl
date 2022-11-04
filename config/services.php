<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '78654426922-u36mn4spjit220aa023024qhe8jpv2jq.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],
    'github' => [
        'client_id' => '4cd3cba68f68ceab8c8e',
        'client_secret' => '17ab6d1eac0324950d3ad87e59adf2f017caa6ab',
        'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],

];