<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default otentikasi.
    |--------------------------------------------------------------------------
    |
    | Opsi ini mengontrol otentikasi "guard" dan password default,
    | atur ulang pilihan untuk aplikasi anda. Anda dapat mengubah default ini
    | sesuai kebutuhan, tapi ini awal yang sempurna untuk sebagian besar aplikasi.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Otentikasi Penjaga.
    |--------------------------------------------------------------------------
    |
    | Selanjutnya, anda dapat menentukan setiap penjaga otentikasi untuk aplikasi anda.
    | Tentu saja, konfigurasi default yang besar telah ditetapkan untuk anda
    | di sini yang menggunakan penyimpanan sesi dan penyedia pengguna Eloquent.
    |
    | Semua driver autentikasi memiliki penyedia pengguna. Ini mendefinisikan bagaimana
    | pengguna benar-benar diambil dari database anda atau penyimpanan lainnya.
    | Mekanisme yang digunakan oleh aplikasi ini untuk mempertahankan data pengguna anda.
    |
    | Didukung: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Penyedia Informasi.
    |--------------------------------------------------------------------------
    |
    | Semua driver autentikasi memiliki penyedia pengguna. Ini mendefinisikan bagaimana
    | pengguna benar-benar diambil dari database anda atau penyimpanan lainnya.
    | Mekanisme yang digunakan oleh aplikasi ini untuk mempertahankan data pengguna anda.
    |
    | Jika anda memiliki beberapa tabel pengguna atau model, anda dapat mengkonfigurasi beberapa
    | sumber yang mewakili setiap model / tabel. Sumber-sumber ini mungkin kemudian
    | ditugaskan ke penjaga otentikasi tambahan yang telah anda tetapkan.
    |
    | Didukung: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Reset kata sandi.
    |--------------------------------------------------------------------------
    |
    | Anda dapat menentukan beberapa konfigurasi reset kata sandi jika anda memiliki lebih banyak
    | dari satu tabel pengguna atau model dalam aplikasi dan anda ingin memiliki
    | pengaturan reset password terpisah berdasarkan tipe pengguna tertentu.
    |
    | Waktu kedaluwarsa adalah jumlah menit yang harus ditetapkan token reset
    | dianggap sah. Fitur keamanan ini menyimpan token berumur pendek,
    | Mereka memiliki sedikit waktu untuk bisa ditebak. Anda bisa mengubah ini sesuai kebutuhan.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
