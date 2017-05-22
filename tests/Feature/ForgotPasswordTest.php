<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ForgotPasswordTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_forget_password_form_by_unathenticated_user()
    {
        $response = $this->get(action('Auth\ForgotPasswordController@showLinkRequestForm'));
        $response->assertStatus(200);
    }

    public function test_forget_password_form_by_authenticated_user()
    {
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(action('Auth\ForgotPasswordController@showLinkRequestForm'));
        $response->assertStatus(302);
    }

    public function test_forget_password_form_by_athenticated_user_as_admin()
    {
        $user = factory(User::class)->make();
        $user->is_admin = true;
        $user->save();
        $response = $this
            ->actingAs($user)
            ->get(action('Auth\ForgotPasswordController@showLinkRequestForm'));
        $response->assertStatus(302);
    }
}
