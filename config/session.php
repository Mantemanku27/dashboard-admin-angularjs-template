<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sesi Driver Default.
    |--------------------------------------------------------------------------
    |
    | Opsi ini mengontrol sesi default "driver" yang akan digunakan
    | permintaan. Secara default, kita akan menggunakan driver asli ringan, tapi
    | anda dapat menentukan driver hebat lainnya yang disediakan di sini.
    |
    | Didukung: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Seso Lifetime.
    |--------------------------------------------------------------------------
    |
    | Di sini anda dapat menentukan jumlah menit yang anda inginkan, dalam sesi ini
    | agar diizinkan untuk tetap siaga sebelum kadaluarsa. Jika anda menginginkannya
    | untuk segera berakhir pada penutupan browser, atur opsi itu.
    |
    */

    'lifetime' => 120,

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Sesi Enkripsi.
    |--------------------------------------------------------------------------
    |
    | Pilihan ini memungkinkan anda menentukan dengan mudah semua data, sesi anda
    | harus dienkripsi sebelum disimpan. Semua enkripsi akan dijalankan
    | secara otomatis oleh Laravel dan anda bisa menggunakan sesi seperti biasa.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Sesi Lokasi file.
    |--------------------------------------------------------------------------
    |
    | Saat menggunakan driver sesi asli, kita membutuhkan lokasi di mana sesi
    | file bisa disimpan Default, dan telah ditetapkan untuk anda. Tapi berbeda
    | lokasi dapat ditentukan. Ini hanya diperlukan untuk sesi file.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Sesi Koneksi Database.
    |--------------------------------------------------------------------------
    |
    | Saat menggunakan driver sesi "database" atau "redis", anda dapat menentukan
    | koneksi yang harus digunakan untuk mengelola sesi ini. Ini harus
    | sesuai dengan koneksi dalam pilihan konfigurasi database anda.
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Sesi Tabel Database.
    |--------------------------------------------------------------------------
    |
    | Bila menggunakan driver "database", anda bisa menentukan tabel kita
    | sebaiknya gunakan untuk mengelola sesi. Tentu saja, default yang masuk akal adalah
    | disediakan untuk anda; Namun, anda bebas untuk mengubah ini sesuai kebutuhan.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Sesi Toko Cache.
    |--------------------------------------------------------------------------
    |
    | Bila menggunakan driver sesi "apc" atau "memcached", Anda dapat menentukan
    | toko cache yang harus digunakan untuk sesi ini. Nilai ini harus
    | sesuai dengan salah satu toko cache yang dikonfigurasi aplikasi.
    |
    */

    'store' => null,

    /*
    |--------------------------------------------------------------------------
    | Sesi Sweeping Lottery.
    |--------------------------------------------------------------------------
    |
    | Beberapa driver sesi harus secara manual menyapu lokasi penyimpanan mereka untuk dapat
    | menyingkirkan sesi lama dari penyimpanan. Inilah yang kemungkinan akan terjadi
    | pada permintaan tertentu secara default, kemungkinannya adalah 2 dari 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Nama Sesi Cookie.
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat mengubah nama cookie yang digunakan untuk mengidentifikasi sesi,
    | misalnya dengan ID Nama yang ditentukan, disini akan bisa digunakan setiap saat
    | cookie sesi baru dibuat oleh kerangka kerja untuk setiap pengemudi.
    |
    */

    'cookie' => 'laravel_session',

    /*
    |--------------------------------------------------------------------------
    | Sesi Cookie Path.
    |--------------------------------------------------------------------------
    |
    | Jalur sesi cookie menentukan jalur yang akan digunakan cookie
    | dianggap tersedia biasanya, ini akan menjadi jalur akar
    | Aplikasi anda, tapi anda bebas untuk mengubah ini bila diperlukan.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Sesi Cookie Domain.
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat mengubah domain cookie yang digunakan untuk mengidentifikasi sesi.
    | Di aplikasi kamu ini akan menentukan domain cookie mana yang
    | tersedia di aplikasi default anda yang masuk akal telah ditetapkan.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies.
    |--------------------------------------------------------------------------
    |
    | Dengan menyetel opsi ini ke true, session cookies hanya akan dikirim kembali
    | ke server jika browser memiliki koneksi HTTPS. Cookies ini akan terus
    | dikirim ke Anda jika tidak bisa dilakukan dengan aman.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE', false),

    /*
    |--------------------------------------------------------------------------
    | Hanya Akses HTTP.
    |--------------------------------------------------------------------------
    |
    | Menetapkan nilai ini ke true akan mencegah JavaScript mengakses
    | nilai cookie, dan cookie hanya dapat diakses melalui
    | protokol HTTP. Anda bebas memodifikasi pilihan ini jika diperlukan.
    |
    */

    'http_only' => true,

];
