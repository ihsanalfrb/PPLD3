<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShowProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_profile_page_response()
    {
        $response = $this->get('/show_profile/');

        if(is_null(Auth::user())){
            $response->assertStatus(404);
        } else {
            $response->assertStatus(200);
        }
    }
}
