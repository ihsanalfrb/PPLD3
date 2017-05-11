<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_profile_page_response()
    {
        $response = $this->get('/edit_profile/');

        if(is_null(Auth::user())){
            $response->assertStatus(404);
        } else {
            $response->assertStatus(200);
        }
    }
}
