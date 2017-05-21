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

        $thread = factory(Thread::class)->make();
        $user = factory(User::class)->make();
        $user->is_admin = true;
        $user->save();
        $user->create_thread()->save($thread);

        $response = $this->actingAs($user)
            ->delete(action('ThreadController@destroy', $thread->id));
        $response->assertStatus(302);

    }

}
