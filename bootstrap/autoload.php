<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Daftar Komposer Auto Loader.
|--------------------------------------------------------------------------
|
| Komposer menyediakan Class loader yang mudah dibuat secara otomatis
| untuk aplikasi kita. Kita hanya perlu memanfaatkannya! Kita akan membutuhkannya
| ke script disini agar kita tidak perlu khawatir dengan
| pemuatan Class kita "secara manual". Merasa senang bisa bersantai.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Sertakan File Class Terkompilasi.
|--------------------------------------------------------------------------
|
| Untuk meningkatkan kinerja aplikasi anda secara dramatis, anda dapat menggunakan
| file Class terkompilasi yang berisi semua Class yang umum digunakan
| dengan permintaan artisan "optimalkan" digunakan untuk membuat file ini.
|
*/

$compiledPath = __DIR__.'/cache/compiled.php';

if (file_exists($compiledPath)) {
    require $compiledPath;
}
