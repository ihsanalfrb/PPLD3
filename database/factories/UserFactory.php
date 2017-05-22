<?php
/**
 * Created by PhpStorm.
 * User: rizqy
 * Date: 19/04/17
 * Time: 17:57
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

 $factory->define(App\User::class, function (Faker\Generator $faker) {

     return [
         'name' => $faker->name,
         'email' => $faker->unique()->safeEmail,
         'password' => bcrypt('secret'),
         'remember_token' => null,
         'is_admin' => false,
         'birthday' => '2000-01-01',
         'gender' => $faker->randomElement(['male', 'female', 'other'])
     ];
 });