<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Comment;
use App\User;
use App\Thread;
class DeleteThreadTest extends TestCase
{

  use DatabaseMigrations;
  use WithoutMiddleware;
     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_delete_thread_response()
    {
        factory(User::class,15)->create();
        factory(Thread::class,15)->create();

        $randomID = 1;
        $randomComment=Thread::where('id','=',$randomID)->first();

        $response = $this->call('delete', '/forum_threads/'.$randomComment->id, []);
        $this->assertEquals(401, $response->status());

        $user = User::first();
        $this->be($user);
        $response = $this->call('delete', '/forum_threads/'.$randomComment->id, []);
        $this->assertEquals(401, $response->status());

        $user->is_admin = true;
        $user->save();

        $response = $this->call('delete', '/forum_threads/'.$randomComment->id, []);
        $this->assertEquals(302, $response->status());
        $randomCommentDeleted=Comment::where('id','=',$randomID)->first();
        $this->assertNull($randomCommentDeleted);
    }
}
