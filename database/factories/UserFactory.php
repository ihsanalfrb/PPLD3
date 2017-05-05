<?php
/**
 * Created by PhpStorm.
 * User: rizqy
 * Date: 19/04/17
 * Time: 17:57
 */

 $factory->define(App\User::class, function (Faker\Generator $faker) {

     return [
         'name' => $faker->name,
         'email' => $faker->unique()->safeEmail,
         'password' => bcrypt('secret'),
         'remember_token' => str_random(10),
         'is_admin' => false,
         'birthday' => $faker->date(),
         'gender' => $faker->randomElement(['male', 'female', 'other'])
     ];
 });