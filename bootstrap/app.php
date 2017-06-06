<?php

/*
|--------------------------------------------------------------------------
| Membuat Aplikasi.
|--------------------------------------------------------------------------
|
| Hal pertama yang akan kita lakukan adalah membuat contoh aplikasi Laravel baru
| yang berfungsi sebagai "lem" untuk semua komponen Laravel, dan memang begitu
| wadah IOC untuk sistem yang mengikat semua dari berbagai bagian.
|
*/

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Penting Antarmuka.
|--------------------------------------------------------------------------
|
| Selanjutnya, kita perlu mengikat beberapa antarmuka penting ke dalam wadah
| kita akan bisa mengatasinya bila dibutuhkan. Kernel melayani
| permintaan masuk ke aplikasi ini dari web dan CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Mengembalikan Aplikasi.
|--------------------------------------------------------------------------
|
| Script ini mengembalikan instance aplikasi. Contohnya diberikan
| script panggilan sehingga kita dapat memisahkan bangunan dari contoh
| pelaksanaan sebenarnya dari aplikasi dan mengirim tanggapan.
|
*/

return $app;
