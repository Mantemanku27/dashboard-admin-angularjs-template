<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Layanan Pihak Ketiga.
    |--------------------------------------------------------------------------
    |
    | File ini untuk menyimpan kredensial untuk layanan pihak ketiga
    | seperti Stripe, Mailgun, SparkPost dan lain-lain. File ini menyediakan
    | lokasi default untuk jenis informasi, memungkinkan paket
    | untuk memiliki tempat konvensional untuk menemukan berbagai kepercayaan anda.
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

];
