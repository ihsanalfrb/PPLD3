<?php

namespace Tests\Feature;

use App\User;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function test_update_user_unauthenticated_user(){
        $user = factory(User::class)->create();
        $response = $this->put(action('UserController@update', $user->id), [
            'name' => 'Rizqy',
            'email' => 'rizqyfaishal@hotmail.com',
            'birthday' => Carbon::now(),
            'gender' => 'Male',
            'bio' => 'Gemar membaca',
            'telephone' => '089672987967',
            'address' => 'Jalan Pala',
            'new_password' => 'secret',
            'old_password' => 'password'
        ]);
        $response->assertStatus(401);
    }

    public function test_update_user_authenticated_user_without_password(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
            'name' => 'Rizqy',
            'email' => 'rizqyfaishal@hotmail.com',
            'birthday' => Carbon::now(),
            'gender' => 'Male',
            'bio' => 'Gemar membaca',
            'telephone' => '089672987967',
            'address' => 'Jalan Pala',
//            'new_password' => 'secret',
//            'old_password' => 'password'
        ]);
        $response->assertStatus(302);
    }

    public function test_update_user_authenticated_user_email_already_exists(){
        $user2 = factory(User::class)->create();
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
                'name' => 'Rizqy',
                'email' => $user2->email,
                'birthday' => Carbon::now(),
                'gender' => 'Male',
                'bio' => 'Gemar membaca',
                'telephone' => '089672987967',
                'address' => 'Jalan Pala',
                'confirm_changes' => 'secret'
            ]);
        $response->assertStatus(302);
    }

    public function test_update_user_authenticated_user_wrong_password(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
                'name' => 'Rizqy',
                'email' => 'rizqyfaishal@hotmail.com',
                'birthday' => Carbon::now(),
                'gender' => 'Male',
                'bio' => 'Gemar membaca',
                'telephone' => '089672987967',
                'address' => 'Jalan Pala',
                'confirm_changes' => 'passwordngaco'
            ]);
        $response->assertStatus(302);
    }

    public function test_update_user_authenticated_user_succesfully(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
                'name' => 'Rizqy',
                'email' => 'rizqyfaishal@hotmail.com',
                'birthday' => Carbon::now(),
                'gender' => 'Male',
                'bio' => 'Gemar membaca',
                'telephone' => '089672987967',
                'address' => 'Jalan Pala',
                'confirm_changes' => 'secret'
            ]);
        $response->assertStatus(200);
    }

    public function test_update_password_authenticated_user_succesfully(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
                'old_password' => 'secret',
                'new_password' => 'mantap',
                'confirm_password' => 'mantap',
            ]);
        $response->assertStatus(302);
    }

    public function test_update_password_authenticated_user_wrong_old_password(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
                'old_password' => 'secret1',
                'new_password' => 'mantap',
                'confirm_password' => 'mantap',
            ]);
        $response->assertStatus(302);
    }

    public function test_update_password_authenticated_user_not_match_confirmation_password(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->put(action('UserController@update', $user->id), [
                'old_password' => 'secret',
                'new_password' => 'mantap1',
                'confirm_password' => 'mantap',
            ]);
        $response->assertStatus(302);
    }


}
