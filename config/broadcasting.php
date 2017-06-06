<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Penyiar standar.
    |--------------------------------------------------------------------------
    |
    | Opsi ini mengontrol penyiar default yang akan digunakan oleh
    | kerangka kerja saat suatu event perlu disiarkan. Anda bisa mengatur ini
    | salah satu koneksi yang didefinisikan dalam array "koneksi" di bawah ini.
    |
    | didukung: "pusher", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Koneksi Siaran.
    |--------------------------------------------------------------------------
    |
    | Di sini anda bisa menentukan semua koneksi broadcast yang akan digunakan
    | untuk menyiarkan event ke sistem lain atau melalui jaring. Sampel dari
    | setiap jenis koneksi yang tersedia disediakan di dalam array ini.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_KEY'),
            'secret' => env('PUSHER_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                //
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
