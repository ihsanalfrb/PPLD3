<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_profile_page_response()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/edit_profile/');
        $response->assertStatus(200);
    }

    public function test_edit_profile_unathenticated_user(){
        $response = $this->get(action('PageController@edit_profile'));
        $response->assertStatus(404);
    }
}
