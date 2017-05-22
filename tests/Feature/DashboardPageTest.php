<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardPageTest extends TestCase
{
    use DatabaseMigrations;

    public function test_dashboard_page_unauthenticated_return_302()
    {
        $response = $this->get(action('DashboardController@home'));
        $response->assertStatus(302);
    }

    public function test_dashboard_page_authenticated_as_user_return_302()
    {
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(action('DashboardController@home'));

        $response->assertStatus(302);
    }

    public function test_dashboard_page_authenticated_as_admin_return_200()
    {

        $user = factory(User::class)->create();
        $user->is_admin = true;
        $response = $this
            ->actingAs($user)
            ->get(action('DashboardController@home'));

        $response->assertStatus(200);
    }
}
