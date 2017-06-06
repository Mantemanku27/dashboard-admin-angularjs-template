<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap layanan aplikasi apapun.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        /*
         * Mengautentikasi saluran pribadi pengguna ...
         *
         */
        Broadcast::channel('App.User.*', function ($user, $userId) {
            return (int) $user->id === (int) $userId;
        });
    }
}
