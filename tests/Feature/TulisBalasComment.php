<?php

namespace Tests\Feature;

use App\Comment;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TulisBalasComment extends TestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->thread = factory(Thread::class)->create();
        $this->params = [
            'isi_komentar' => 'Hello',
            'judul_komentar' => 'World',
            'thread_id' => $this->thread->id,
            'comment_by' => $this->user->id ];

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_successfully_create_a_comment()
    {
        $this->be($this->user);
        $response = $this->call('post', '/comments', $this->params);
        $response->assertStatus(200);
    }

    public function test_a_user_unsuccessfully_create_a_comment()
    {
        $response = $this->call('post', '/comments', $this->params);
        $response->assertStatus(302);
    }


}
