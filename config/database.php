<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Ambil Gaya.
    |--------------------------------------------------------------------------
    |
    | Secara default, hasil database akan dikembalikan sebagai contoh dari PHP
    | objek stdClass; Namun, Anda mungkin ingin mengambil catatan di
    | format array untuk kesederhanaan. Di sini anda bisa men-tweak gaya pengambilan.
    |
    */

    'fetch' => PDO::FETCH_OBJ,

    /*
    |--------------------------------------------------------------------------
    | Nama Koneksi Basis Data Default.
    |--------------------------------------------------------------------------
    |
    | Di sini anda bisa menentukan koneksi database mana yang anda inginkan
    | untuk digunakan sebagai koneksi default anda untuk semua pekerjaan database. Tentu saja
    | anda mungkin menggunakan banyak koneksi sekaligus menggunakan pustaka Database.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Koneksi Database.
    |--------------------------------------------------------------------------
    |
    | Berikut adalah konfigurasi database untuk aplikasi anda.
    | Tentu saja, contoh mengonfigurasi setiap platform database itu
    | didukung oleh Laravel, ditunjukkan di bawah ini untuk membuat pengembangan menjadi sederhana.
    |
    | Semua pekerjaan database di Laravel dilakukan melalui fasilitas PDO PHP,
    | jadi pastikan anda memiliki driver untuk database khusus anda.
    | Pilihan terinstal di komputer anda sebelum memulai pembangunan.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Tabel Repositori Migration.
    |--------------------------------------------------------------------------
    |
    | Tabel ini melacak semua migration yang telah dijalankan
    | aplikasi anda dengan menggunakan informasi ini kita bisa menentukan mana dari
    | migration pada disk belum benar-benar dijalankan dalam database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases.
    |--------------------------------------------------------------------------
    |
    | Redis adalah open source, fast, dan advanced key-value store yang juga
    | menyediakan seperangkat perintah yang lebih kaya daripada sistem nilai-kunci yang khas
    | seperti APC atau Memcached. Laravel membuatnya mudah digali.
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
