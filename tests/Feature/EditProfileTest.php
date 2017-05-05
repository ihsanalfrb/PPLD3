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
        $this->users = factory(User::class, 3)->create();

        $response = $this->get('/edit_profile/'.$this->users[0]->id);
        $response-> assertStatus(200);
        $response = $this->get('/edit_profile/'.$this->users[1]->id);
        $response-> assertStatus(200);
        $response = $this->get('/edit_profile/'.$this->users[2]->id);
        $response-> assertStatus(200);

        while(true){
            $randomID = rand();

            if($randomID != $this->users[0]->id && $randomID != $this->users[1]->id && $randomID != $this->users[2]->id){
                $response = $this->get('/edit_profile/'.$this->users[]->id);
                $response-> assertStatus(404);
                break;
            }

        }
    }
}
