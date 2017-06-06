<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Melihat Jalur Penyimpanan.
    |--------------------------------------------------------------------------
    |
    | Sebagian besar template dari disk, dan di sini anda bisa menentukannya.
    | Deret jalur yang harus diperiksa untuk pandangan anda. Tentu saja
    | jalur pandang Laravel yang biasa telah terdaftar untuk anda.
    |
    */

    'paths' => [
        realpath(base_path('resources/views')),
    ],

    /*
    |--------------------------------------------------------------------------
    | Melihat Jalur yang Disusun.
    |--------------------------------------------------------------------------
    |
    | Opsi ini menentukan di mana semua template Blade yang dikompilasi nantinya
    | disimpan untuk aplikasi anda biasanya, ini ada di dalam penyimpanan
    | direktori. Namun, seperti biasa, anda bebas mengubah nilai ini.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
