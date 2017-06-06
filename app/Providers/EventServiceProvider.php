<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Pemetaan pendengar event untuk aplikasi.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Mendaftarkan event apa pun untuk aplikasi anda.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }

}
