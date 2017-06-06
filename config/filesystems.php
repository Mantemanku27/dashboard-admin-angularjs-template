<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Disk Filesystem Default.
    |--------------------------------------------------------------------------
    |
    | Di sini anda dapat menentukan disk sistem berkas default yang harus digunakan
    | dengan kerangka kerja. Sopir "lokal", serta beragam awan
    | driver berbasis tersedia untuk anda pilih. Simpan saja!
    |
    | didukung: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk.
    |--------------------------------------------------------------------------
    |
    | Banyak aplikasi menyimpan file baik lokal maupun di awan. Untuk ini,
    | alasannya Anda bisa menentukan driver "cloud" default di sini. Pengemudi ini
    | akan terikat sebagai implementasi cloud disk dalam wadah.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Disk Filesystem.
    |--------------------------------------------------------------------------
    |
    | Di sini anda dapat mengkonfigurasi sebanyak mungkin filesystem "disk" yang anda inginkan, dan anda
    | bahkan mungkin mengkonfigurasi beberapa disk dari driver yang sama. Default telah
    | punya dan disetel untuk setiap pengemudi sebagai contoh opsi yang diperlukan.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

    ],

];
