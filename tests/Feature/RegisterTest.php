<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;


    public function test_register_post_by_unauthenticated_user(){
        $user = factory(User::class)->make();
        $response = $this
            ->post(action('Auth\RegisterController@register',$user));
        $response->assertStatus(302);
        $response->assertRedirect(action('PageController@index'));

    }
}
