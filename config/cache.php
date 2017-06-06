<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Toko Cache Default.
    |--------------------------------------------------------------------------
    |
    | Opsi ini mengontrol koneksi cache standar yang akan digunakan. Sementara
    | menggunakan perpustakaan caching ini dan sambungan ini digunakan saat yang lain
    | tidak secara eksplisit ditentukan saat menjalankan fungsi caching yang diberikan.
    |
    | didukung: "apc", "array", "database", "file", "memcached", "redis"
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Toko Cache.
    |--------------------------------------------------------------------------
    |
    | Di sini anda bisa mendefinisikan semua cache "store" untuk aplikasi anda
    | Juga driver mereka bahkan dapat menentukan beberapa toko untuk
    | driver cache yang sama untuk mengelompokkan jenis item yang tersimpan di cache anda.
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Awalan Kunci Cache.
    |--------------------------------------------------------------------------
    |
    | Saat menggunakan toko berbasis RAM seperti APC atau Memcached, mungkin ada
    | jadilah aplikasi lain yang memanfaatkan cache yang sama. Jadi, kita akan menentukan
    | nilai untuk mendapatkan awalan untuk semua kunci kita sehingga kita dapat menghindari konflik.
    |
    */

    'prefix' => 'laravel',

];
