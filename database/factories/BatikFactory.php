<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Batik::class, function (Faker\Generator $faker) {
    return [
        'nama_batik' => $faker->name,
        'makna_batik' => $faker->paragraph,
        'sejarah_batik' => $faker->paragraph,
        'asal_daerah' => $faker->streetName,
        'gambar_pola_batik' => $faker->imageUrl('900','300'),
        'matriks_pola_batik' => $faker->address
    ];
});
