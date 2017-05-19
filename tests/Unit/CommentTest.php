<?php

namespace Tests\Unit;

use App\Comment;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommentTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;

    protected $limit = 4;

    public function setUp()
    {
        parent::setUp();
        $this->comment = factory(Comment::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_has_column_judul_komentar(){
        $this->assertDatabaseHas('comments', [
            'judul_komentar' => $this->comment->judul_komentar
        ]);
    }

    public function test_comment_has_judul_komentar_attribute()
    {
        $this->assertArrayHasKey('judul_komentar',$this->comment->getAttributes());
    }

    public function test_database_has_column_isi_komentar(){
        $this->assertDatabaseHas('comments', [
            'isi_komentar' => $this->comment->isi_komentar
        ]);
    }

    public function test_comment_has_isi_komentar_attribute()
    {
        $this->assertArrayHasKey('isi_komentar',$this->comment->getAttributes());
    }

    public function test_database_has_column_comment_by(){
        $this->assertDatabaseHas('comments', [
            'comment_by' => $this->comment->comment_by
        ]);
    }

    public function test_comment_has_comment_by_attribute()
    {
        $this->assertArrayHasKey('comment_by',$this->comment->getAttributes());
    }

    public function test_database_has_column_thread_id(){
        $this->assertDatabaseHas('comments', [
            'thread_id' => $this->comment->thread_id
        ]);
    }

    public function test_comment_has_thread_id_attribute()
    {
        $this->assertArrayHasKey('thread_id',$this->comment->getAttributes());
    }
}
