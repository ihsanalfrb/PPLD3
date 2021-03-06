<?php

namespace Tests\Unit;

use App\Comment;
use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TulisBalasComment extends TestCase
{

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        factory(Thread::class, 10)->create();
        factory(Comment::class, 10)->create();
        $this->comment = factory(Comment::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_comment_has_a_judul_komentar_attribute()
    {
        $this->assertArrayHasKey('judul_komentar', $this->comment->getAttributes());
    }

    public function test_a_comment_has_a_isi_komentar_attribute()
    {
        $this->assertArrayHasKey('isi_komentar', $this->comment->getAttributes());
    }

    public function test_a_comment_has_a_thread_id_attribute()
    {
        $this->assertArrayHasKey('thread_id', $this->comment->getAttributes());
    }

    public function test_a_comment_has_a_comment_by_attribute()
    {
        $this->assertArrayHasKey('comment_by', $this->comment->getAttributes());
    }

    public function test_a_comment_has_a_correct_isi_komentar(){
        $comment = Comment::find($this->comment->id);
        $this->assertEquals($this->comment->isi_komentar, $comment->isi_komentar);
    }

    public function test_a_comment_has_a_correct_judul_komentar(){
        $comment = Comment::find($this->comment->id);
        $this->assertEquals($this->comment->judul_komentar, $comment->judul_komentar);
    }

    public function test_a_comment_has_a_correct_thread_id(){
        $comment = Comment::find($this->comment->id);
        $this->assertEquals($this->comment->thread_id, $comment->thread_id);
    }

    public function test_a_comment_has_a_correct_comment_by(){
        $comment = Comment::find($this->comment->id);
        $this->assertEquals($this->comment->comment_by, $comment->comment_by);
    }
}
