<?php

namespace Tests\Feature;

use App\Comment;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\TagBatik;

class ShowThreadTest extends TestCase
{

    use DatabaseMigrations;
    use DatabaseTransactions;

    public function test_show_thread_page_response()
    {

        $user = factory(User::class)->create();
        $threads = factory(Thread::class, 3)->make();
        $user->create_thread()->saveMany($threads);
        $this->user = $user;
        $this->threads = $threads;


        $response = $this->get('/forum_threads/'.$this->threads[0]->id + 1);
        $response-> assertStatus(404);

        $response = $this->get('/forum_threads/'.$this->threads[0]->id);
        $response-> assertStatus(200);

        $response = $this->get('/forum_threads/'.$this->threads[1]->id);
        $response-> assertStatus(200);

        $response = $this->get('/forum_threads/'.$this->threads[2]->id);
        $response-> assertStatus(200);

        while(true){
            $randomID = rand();

            if($randomID != $this->threads[0]->id && $randomID != $this->threads[1]->id && $randomID != $this->threads[2]->id){
                $response = $this->get('/forum_threads/'.$randomID);
                $response-> assertStatus(404);
                break;
            }

        }
    }

}
