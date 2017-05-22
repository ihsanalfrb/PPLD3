<?php

namespace Tests\Feature;

use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{

    use DatabaseMigrations;
    use WithoutMiddleware;

    public function test_delete_thread_by_unauthenticated_user()
    {
        $thread = factory(Thread::class)->make();
        $user = factory(User::class)->create()->create_thread()->save($thread);
        $response = $this->delete(action('ThreadController@destroy', $thread->id));
        $response->assertStatus(401);
    }

    public  function test_delete_thread_not_found(){
        $thread = factory(Thread::class)->make();
        $user = factory(User::class)->make();
        $user->is_admin = true;
        $user->save();
        $user->create_thread()->save($thread);
        $response = $this
            ->actingAs($user)
            ->delete(action('ThreadController@destroy', $thread->id + 1));
        $response->assertStatus(404);
    }

    public  function test_delete_thread_success(){
        $thread = factory(Thread::class)->make();
        $user = factory(User::class)->make();
        $user->is_admin = true;
        $user->save();
        $user->create_thread()->save($thread);
        $response = $this
            ->actingAs($user)
            ->delete(action('ThreadController@destroy', $thread->id));
        $response->assertStatus(302);
    }
}
