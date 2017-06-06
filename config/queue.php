<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pengandar Antrian Default.
    |--------------------------------------------------------------------------
    |
    | Laravel queue API mendukung berbagai back-end melalui unified
    | API, memberi anda akses mudah ke setiap back-end dengan menggunakan sintaks yang
    | sama untuk masing-masing. Di sini anda dapat mengatur driver antrian default.
    |
    | Didukung: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Koneksi Antrian.
    |--------------------------------------------------------------------------
    |
    | Disini anda bisa mengkonfigurasi koneksi informasi untuk tiap server. Server itu
    | digunakan oleh aplikasi anda. Konfigurasi default telah ditambahkan
    | untuk setiap back-end yang dikirim bersama Laravel. Anda bebas untuk menambahkan lebih banyak.
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => 'your-public-key',
            'secret' => 'your-secret-key',
            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
            'queue' => 'your-queue-name',
            'region' => 'us-east-1',
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Pekerjaan Antrian Gagal.
    |--------------------------------------------------------------------------
    |
    | Pilihan ini mengonfigurasi perilaku job queue logging yang gagal, jadi anda
    | dapat mengontrol basis data dan tabel mana yang digunakan untuk menyimpan pekerjaan itu
    | telah gagal. Anda bisa mengubahnya ke database / tabel yang anda inginkan.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
