<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Thread;

class DaftarThreadTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_daftar_thread_page_response()
    {

        $this->thread = factory(Thread::class)->make();
        $response = $this->get('/daftar_thread/');
        $response-> assertStatus(200);
    }
}
