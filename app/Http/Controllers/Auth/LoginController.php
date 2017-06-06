<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller.
    |--------------------------------------------------------------------------
    |
    | Pengontrol ini menangani otentikasi pengguna untuk aplikasi dan
    | mengarahkan mereka ke layar utama anda. Pengontrol menggunakan sifat
    | untuk menyediakan fungsionalitasnya dengan mudah ke aplikasi anda.
    |
    */

    use AuthenticatesUsers;

    /**
     * Tempat untuk mengarahkan pengguna setelah masuk.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Membuat contoh pengontrol baru.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

}
