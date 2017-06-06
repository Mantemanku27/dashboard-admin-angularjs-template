<?php

/*
|--------------------------------------------------------------------------
| Model Factories.
|--------------------------------------------------------------------------
|
| Di sini anda bisa menentukan semua model factories anda. Model factories memberi
| anda cara mudah membuat model, untuk pengujian dan Seeder
| Database. Katakan saja pada factories bagaimana model default seharusnya terlihat.
|
*/

$factory->define(App\Domain\Entities\Contact::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address
    ];
});
