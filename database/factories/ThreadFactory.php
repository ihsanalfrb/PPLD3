<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 4/1/17
 * Time: 12:47 AM
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
$factory->define(App\Thread::class, function (Faker\Generator $faker) {
    return [
        'nama_thread' => $faker->title,
        'created_by' => $faker->randomDigitNotNull,
        'views' => $faker->randomDigitNotNull,
        'replies' => $faker->randomDigitNotNull
    ];
});