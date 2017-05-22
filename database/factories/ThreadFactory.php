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

//nama_thread", "created_by", "views", "replies", "thread", "updated_at", "created_at") values (Ms., 8, 5, 1, Et omnis explicabo velit quisquam. A quam placeat aut illo dolorem., 2017-04-25 18:57:17, 2017-04-25 18:57:17) returning "id")

$factory->define(App\Thread::class, function (Faker\Generator $faker) {
    return [
        'nama_thread' => $faker->title,
        'views' => $faker->randomDigitNotNull,
        'replies' => $faker->randomDigitNotNull,
        'content'=>$faker->paragraph
    ];
});