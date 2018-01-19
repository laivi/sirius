<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyCebkSI0S5no1hiHQDwP1K-Co-TX_sTRzo',
        'auth_domain' => 'my-p-9d3e3.firebaseapp.com',
        'database_url' => 'https://my-p-9d3e3.firebaseio.com',
        'secret' => '1yD5UHxMjm726FbLt1ftxQr6rmVVEsO1lLYQUFKI',
        'storage_bucket' => 'my-p-9d3e3.appspot.com',
    ]

];
