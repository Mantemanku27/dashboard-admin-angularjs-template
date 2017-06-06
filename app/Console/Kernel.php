<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Perintah Artisan yang disediakan oleh aplikasi anda.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Menentukan jadwal perintah aplikasi.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Daftar perintah berdasarkan penutupan untuk aplikasi.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }

}
