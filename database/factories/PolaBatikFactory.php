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
$factory->define(App\PolaBatik::class, function (Faker\Generator $faker) {

    return [
        'gambar_pola_batik' => $faker->imageUrl('900','300'),
        'matriks_pola_batik' => $faker->address,
        'batik_id' => factory(\App\Batik::class)->create()->id
    ];
});
