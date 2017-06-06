<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pengandar Email.
    |--------------------------------------------------------------------------
    |
    | Laravel mendukung fungsi "mail" SMTP dan PHP sebagai driver untuk
    | Pengiriman e-mail. Anda dapat menentukan yang mana yang anda gunakan selama ini
    | Aplikasi anda disini Secara default, Laravel disiapkan untuk email SMTP.
    |
    | didukung: "smtp", "mail", "sendmail", "mailgun", "mandrill",
    |            "ses", "sparkpost", "log"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Alamat host SMTP.
    |--------------------------------------------------------------------------
    |
    | Di sini anda bisa memberikan alamat host dari server SMTP yang digunakan oleh aplikasi
    | anda. Pilihan default disediakan yang kompatibel dengan
    | mailgun. Mail layanan yang akan memberikan pengiriman yang dapat diandalkan.
    |
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    |--------------------------------------------------------------------------
    | Port Host SMTP.
    |--------------------------------------------------------------------------
    |
    | Ini adalah port SMTP yang digunakan oleh aplikasi anda untuk mengirim e-mail ke
    | Pengguna aplikasi Seperti tuan rumah kami telah menetapkan nilai ini
    | tetap kompatibel dengan aplikasi e-mail Mailgun secara default.
    |
    */

    'port' => env('MAIL_PORT', 587),

    /*
    |--------------------------------------------------------------------------
    | Global "Dari" Alamat.
    |--------------------------------------------------------------------------
    |
    | Anda mungkin menginginkan semua e-mail yang dikirim oleh aplikasi anda untuk dikirim
    | alamat yang sama di sini, anda bisa menentukan nama dan alamat yang
    | digunakan secara global untuk semua e-mail yang dikirim oleh aplikasi anda.
    |
    */

    'from' => [
        'address' => 'hello@example.com',
        'name' => 'Example',
    ],

    /*
    |--------------------------------------------------------------------------
    | Protokol Enkripsi E-Mail.
    |--------------------------------------------------------------------------
    |
    | Di sini anda bisa menentukan protokol enkripsi yang harus digunakan, apabila
    | aplikasi mengirim pesan e-mail default yang masuk akal menggunakan
    | protokol keamanan lapisan transport harus memberikan keamanan yang besar.
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | Username SMTP Server.
    |--------------------------------------------------------------------------
    |
    | Jika server SMTP anda memerlukan nama pengguna untuk otentikasi, anda harus
    | mengatur di sini. Ini akan digunakan untuk mengotentikasi dengan server
    | koneksi anda. Anda juga dapat mengatur nilai "kata sandi" di bawah ini.
    |
    */

    'username' => env('MAIL_USERNAME'),

    /*
    |--------------------------------------------------------------------------
    | Password Server SMTP.
    |--------------------------------------------------------------------------
    |
    | Di sini anda dapat mengatur kata sandi yang diminta oleh server SMTP anda untuk dikirim
    | pesan dari aplikasi anda Ini akan diberikan ke server
    | koneksi sehingga aplikasi akan bisa mengirim pesan.
    |
    */

    'password' => env('MAIL_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Jalur Sistem Sendmail.
    |--------------------------------------------------------------------------
    |
    | Saat menggunakan driver "sendmail" untuk mengirim e-mail, kita perlu tahu
    | jalan menuju tempat Sendmail yang tinggal di server ini. Jalur default telah
    | disediakan di sini, yang akan bekerja dengan baik pada sebagian besar sistem anda.
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

];
