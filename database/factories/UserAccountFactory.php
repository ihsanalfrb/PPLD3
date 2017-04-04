<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 4/1/17
 * Time: 12:46 AM
 */

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
        'email' => $faker->email,
        'username' => $faker->userName,
        'password' => $faker->password,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'tanggal_lahir' => $faker->date(),
        'jenis_kelamin' => $faker->randomElement(['F', 'M'])
    ];
});
