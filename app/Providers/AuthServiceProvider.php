<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Pemetaan kebijakan untuk aplikasi.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Daftar layanan otentikasi / otorisasi apapun.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }

}
