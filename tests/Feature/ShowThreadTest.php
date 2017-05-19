<?php

namespace Tests\Feature;

use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\TagBatik;

class ShowThreadTest extends TestCase
{

    use DatabaseMigrations;
    use DatabaseTransactions;

     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_thread_page_response()
    {
        $this->threads = factory(Thread::class, 3)->create();

        $response = $this->get('/forum_threads/');
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
