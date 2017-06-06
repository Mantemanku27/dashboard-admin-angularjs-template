<?php

/*
|--------------------------------------------------------------------------
| Rute Web.
|--------------------------------------------------------------------------
|
| File ini adalah tempat anda dapat menentukan semua rute yang ditangani.
| Dengan aplikasi anda, katakan saja kepada Laravel bahwa URI seharusnya merespon
| untuk menggunakan metode Closure atau controller. Bangun sesuatu yang hebat!
|
*/

Route::get('/', function () {
    return view('welcome');
});

