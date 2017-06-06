<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Ruang nama ini diterapkan ke rute pengendali anda.
     *
     * Selain itu, ini ditetapkan sebagai root namespace root URL.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Menentukan bindings model rute anda, filter pola, dll.
     *
     * @return void
     */
    public function boot()
    {
        //
        parent::boot();
    }

    /**
     * Menentukan rute untuk aplikasi.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Menentukan rute "web" untuk aplikasi.
     *
     * Rute ini semuanya menerima status sesi, perlindungan CSRF, dll.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Menentukan rute "api" untuk aplikasi.
     *
     * Rute ini biasanya tanpa kewarganegaraan.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }

}
