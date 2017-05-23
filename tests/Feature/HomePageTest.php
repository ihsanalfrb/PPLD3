<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{
    use DatabaseMigrations;

    public function test_home_page_has_status_302_when_not_authenticated()
    {
        $response = $this->get(action('HomeController@index'));
        $response->assertStatus(302);
    }

    public function test_home_page_has_status_302_when_authenticated_as_user()
    {
        $user = factory(User::class)->create();
        $response = $this
                        ->actingAs($user)
                        ->get(action('HomeController@index'));
        $response->assertStatus(302);
    }

    public function test_home_page_has_status_200_when_authenticated_as_admin()
    {
        $user = factory(User::class)->make();
        $user->is_admin = true;
        $user->save();
        $response = $this
            ->actingAs($user)
            ->get(action('HomeController@index'));
        $response->assertStatus(200);
    }
}
