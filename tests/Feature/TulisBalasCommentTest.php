<?php

namespace Tests\Feature;

use App\Comment;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TulisBalasCommentTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->thread = factory(Thread::class)->make();
        $this->user->create_thread()->save($this->thread);
        $this->params = [
            'isi_komentar' => 'Hello',
            'judul_komentar' => 'World',
            'thread_id' => $this->thread->id,
            'comment_by' => $this->user->id ];

    }


    public function test_a_user_successfully_create_a_comment()
    {
        $response = $this
            ->actingAs($this->user)
            ->post(action('CommentController@store'), $this->params);
        $response->assertStatus(302);
    }

    public function test_a_user_unsuccessfully_create_a_comment()
    {
        $response = $this
            ->actingAs($this->user)
            ->post(action('CommentController@store'), [
                'isi_komentar' => null,
                'judul_komentar' => 'World',
                'thread_id' => $this->thread->id,
                'comment_by' => $this->user->id ]);
        $response->assertStatus(302);
    }


}
