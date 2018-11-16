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

    'facebook' => [
        'client_id' => '107421709904919',
        'client_secret' => 'fe1b27cd86a92a68296aaa96e246500f',
        'redirect' => 'cars.local/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'MBEwlc1USeudaDt0MajgXNk6S',
        'client_secret' => 'z2S8C3f9PYioB0xEO5znaR5gvft6n9hH3YQRWZrUKCBkTssUed',
        'redirect' => 'http://cars.local/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '981542536735-33tlpgs3a95os2qhbjb9f7qha379bclt.apps.googleusercontent.com',
        'client_secret' => '49qkJtp_L7sOo-IlPZ3bSbTz',
        'redirect' => 'https://ghyarati.herokuapp.com/auth/twitter/callback',
    ],

    'github' => [
        'client_id' => 'amine8ghandi8amine',
        'client_secret' => 'islam022',
        'redirect' => 'http://your-callback-url',
    ],

];
