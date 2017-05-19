<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 4/4/17
 * Time: 12:44 PM
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
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'judul_komentar' => $faker->title,
        'isi_komentar' => $faker->paragraph,
        'comment_by' => factory(\App\User::class)->create()->id,
        'thread_id' => factory(\App\Thread::class)->create()->id
    ];
});