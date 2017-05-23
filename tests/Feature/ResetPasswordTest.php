<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;

class ResetPasswordTest extends TestCase
{
    use DatabaseMigrations;

    public function test_reset_password_form_by_unauthenticated_user(){
        $response = $this->get(action('Auth\ResetPasswordController@showResetForm',''));
        $response->assertStatus(200);
    }

    public function test_reset_password_form_by_unauthenticated_user_with_token(){
        $user = factory(User::class)->create();
        DB::table('password_resets')->insert(
            ['email' => $user->email, 'token' => 'token12345']
        );
        $response = $this->get(action('Auth\ResetPasswordController@showResetForm', 'token12345'));
        $response->assertStatus(200);
    }


    public function test_reset_password_form_by_authenticated_user(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(action('Auth\ResetPasswordController@showResetForm', $user->remember_token));
        $response->assertStatus(302);
    }

    public function test_reset_password_form_wrong_token(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(action('Auth\ResetPasswordController@showResetForm', "sasasasas"));
        $response->assertStatus(302);
    }

}
