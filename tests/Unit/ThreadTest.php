<?php

namespace Tests\Unit;

use App\Comment;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadTest extends TestCase
{

    use DatabaseMigrations;

    protected $limit = 4;

    public function setUp()
    {
        parent::setUp();
        $user = factory(User::class)->create();
        $thread = factory(Thread::class)->make();
        $this->thread = $user->create_thread()->save($thread);
        $comment = factory(Comment::class)->make();
        $comment->thread_id = $thread->id;
        $user->comments()->save($comment);
        $this->user = $user;
    }



    public function test_a_model_batik_has_a_nama_thread_attribute()
    {
        $this->assertArrayHasKey('nama_thread',$this->thread->getAttributes());
    }

    public function test_a_model_batik_has_a_views_attribute()
    {
        $this->assertArrayHasKey('views',$this->thread->getAttributes());
    }

    public function test_a_model_batik_has_a_replies_attribute()
    {
        $this->assertArrayHasKey('replies',$this->thread->getAttributes());
    }

    public function test_a_model_batik_has_a_content_attribute()
    {
        $this->assertArrayHasKey('content',$this->thread->getAttributes());
    }

    public function test_a_model_batik_has_a_created_by_attribute()
    {
        $this->assertArrayHasKey('created_by',$this->thread->getAttributes());
    }

    public function test_a_model_has_success_created_a_comment(){
        $comment = factory(Comment::class)->make();
        $comment->comment_by = $this->user->id;
        $this->thread->comments()->save($comment);
    }



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
