<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShowProfileTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_profile_page_response()
    {
        $this->users = factory(User::class, 3)->create();

        $response = $this->get('/show_profile/'.$this->users[0]->id);
        $response-> assertStatus(200);
        $response = $this->get('/show_profile/'.$this->users[1]->id);
        $response-> assertStatus(200);
        $response = $this->get('/show_profile/'.$this->users[2]->id);
        $response-> assertStatus(200);

        while(true){
            $randomID = rand();

            if($randomID != $this->users[0]->id && $randomID != $this->users[1]->id && $randomID != $this->users[2]->id){
                $response = $this->get('/show_profile/'.$this->users[]->id);
                $response-> assertStatus(404);
                break;
            }
        }
    }
}
