<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nama aplikasi.
    |--------------------------------------------------------------------------
    |
    | Nilai ini adalah nama aplikasi anda. Nilai ini digunakan saat
    | kerangka perlu menempatkan nama aplikasi dalam notifikasi atau
    | lokasi lain seperti yang dipersyaratkan oleh aplikasi atau paketnya.
    */

    'name' => 'Laravel',

    /*
    |--------------------------------------------------------------------------
    | Lingkungan aplikasi.
    |--------------------------------------------------------------------------
    |
    | Nilai ini menentukan "lingkungan" aplikasi anda saat ini
    | berjalan masuk. Ini mungkin menentukan bagaimana anda memilih untuk mengkonfigurasi berbagai
    | layanan yang digunakan aplikasi anda. Atur ini di file ".env" anda.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Aplikasi Debug Mode.
    |--------------------------------------------------------------------------
    |
    | Bila aplikasi anda dalam mode debug, pesan kesalahan terperinci dengan
    | jejak. Jejak akan ditunjukkan pada setiap kesalahan yang terjadi di dalam aplikasi anda.
    | Jika dinonaktifkan, halaman kesalahan generik sederhana ditampilkan.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL aplikasi.
    |--------------------------------------------------------------------------
    |
    | URL ini digunakan oleh Console untuk menghasilkan URL dengan benar saat menggunakan
    | alat baris perintah Artisan. Anda harus mengatur ini ke akar
    | aplikasi anda sehingga digunakan saat menjalankan tugas Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Aplikasi Timezone.
    |--------------------------------------------------------------------------
    |
    | Di sini anda dapat menentukan zona waktu default untuk aplikasi anda, yang mana
    | akan digunakan oleh tanggal PHP dan fungsi tanggal-waktu. Kami telah pergi
    | ke depan dan set ke default yang masuk akal untuk anda di luar kotak.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Konfigurasi Lokal Aplikasi.
    |--------------------------------------------------------------------------
    |
    | Lokal aplikasi menentukan lokal default yang akan digunakan
    | oleh penyedia layanan terjemahan. Anda bebas menentukan nilai ini
    | ke salah satu locales yang akan didukung oleh aplikasi.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    |  Aplikasi Fallback Locale.
    |--------------------------------------------------------------------------
    |
    | Lokal fallback menentukan lokal untuk digunakan saat yang sekarang
    | tidak tersedia. Anda dapat mengubah nilainya agar sesuai dengan salah satu
    | folder bahasa yang disediakan melalui aplikasi anda.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Kunci enkripsi.
    |--------------------------------------------------------------------------
    |
    | Kunci ini digunakan oleh layanan encoding Illuminate dan harus diset
    | ke string acak, 32 karakter, jika tidak, string terenkripsi ini
    | tidak akan aman Silakan lakukan ini sebelum menerapkan aplikasi!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Konfigurasi Logging.
    |--------------------------------------------------------------------------
    |
    | Di sini anda dapat mengkonfigurasi pengaturan log untuk aplikasi anda. Dari
    | kotaknya, Laravel menggunakan perpustakaan logging Monolog PHP. Ini memberi
    | anda berbagai penangan log kuat / formatters untuk memanfaatkan.
    |
    | Pengaturan yang tersedia: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    /*
    |--------------------------------------------------------------------------
    | Penyedia layanan otomatis.
    |--------------------------------------------------------------------------
    |
    | Penyedia layanan yang tercantum di sini akan dimuat secara otomatis di
    | Permintaan untuk aplikasi anda Jangan ragu untuk menambahkan layanan Anda sendiri
    | Array ini untuk memberikan fungsionalitas diperluas ke aplikasi Anda.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Penyedia Layanan Paket ...
         */

        //

        /*
         * Penyedia Layanan Aplikasi ...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases.
    |--------------------------------------------------------------------------
    |
    | Kumpulan Class alias ini akan didaftarkan saat aplikasi ini
    | dimulai. Namun, jangan ragu untuk mendaftar sebanyak yang anda mau
    | alias ​​"malas" dimuat sehingga tidak mengganggu performa.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
