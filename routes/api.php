<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Rute API.
|--------------------------------------------------------------------------
|
| Di sinilah Anda bisa mendaftarkan rute API untuk aplikasi anda.
| Rute ini dimuat oleh RouteServiceProvider dalam grup yang
| ditugaskan kelompok middleware "api". Nikmati membangun API Anda!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
