<?php

namespace Tests\Unit;

use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;
    
    protected $limit = 4;

    public function setUp()
    {
        parent::setUp();
        $this->thread = factory(Thread::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_has_column_nama_thread(){
        $this->assertDatabaseHas('forum_threads', [
            'nama_thread' => $this->thread->nama_thread
        ]);
    }

    public function test_database_has_column_created_by(){
        $this->assertDatabaseHas('forum_threads', [
            'created_by' => $this->thread->created_by
        ]);
    }

    public function test_database_has_column_views(){
        $this->assertDatabaseHas('forum_threads', [
            'views' => $this->thread->views
        ]);
    }

    public function test_database_has_column_replies(){
        $this->assertDatabaseHas('forum_threads', [
            'replies' => $this->thread->replies
        ]);
    }

    public function test_database_has_column_content(){
        $this->assertDatabaseHas('forum_threads', [
            'content' => $this->thread->content
        ]);
    }

    public function test_thread_has_nama_thread_attribute(){
        $this->assertArrayHasKey('nama_thread', $this->thread->getAttributes());
    }

    public function test_thread_has_created_by_attribute(){
        $this->assertArrayHasKey('created_by', $this->thread->getAttributes());
    }

    public function test_thread_has_views_attribute(){
        $this->assertArrayHasKey('views', $this->thread->getAttributes());
    }

    public function test_thread_has_replies_attribute(){
        $this->assertArrayHasKey('replies', $this->thread->getAttributes());
    }

    public function test_thread_has_content_attribute(){
        $this->assertArrayHasKey('content', $this->thread->getAttributes());
    }
}
