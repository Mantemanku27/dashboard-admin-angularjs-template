<?php

/**
 * Laravel - Framework PHP untuk Developer Web.
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Daftar Auto Loader.
|--------------------------------------------------------------------------
|
| Komposer menyediakan loader Class yang mudah dibuat secara otomatis
| aplikasi kami. Kita hanya perlu memanfaatkannya! Kita hanya membutuhkannya
| ke script disini agar kita tidak perlu khawatir dengan manual
| loading salah satu Class kami nanti. Rasanya enak untuk bersantai.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Nyalakan lampunya.
|--------------------------------------------------------------------------
|
| Kita perlu menerangi perkembangan PHP, jadi mari kita nyalakan lampu.
| Ini bootstrap kerangka dan mendapatkannya siap untuk digunakan, maka dari itu
| akan memuat aplikasi ini sehingga kita bisa menjalankannya dan mengirimnya
| tanggapan kembali ke browser dan menyenangkan pengguna kami.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Running Aplikasi.
|--------------------------------------------------------------------------
|
| Begitu kita memiliki aplikasi, kita bisa menangani permintaan masuk
| melalui kernel, dan mengirim tanggapan terkait kembali
| browser klien memungkinkan mereka menikmati kreatifitas
| dan aplikasi hebat yang telah kami siapkan untuk mereka.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
