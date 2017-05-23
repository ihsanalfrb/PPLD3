<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Comment;
use App\User;
use App\Thread;
class DeleteCommentTest extends TestCase
{

  use DatabaseMigrations;
  use WithoutMiddleware;

     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_delete_comment_by_authenticated_user()
    {

        $user = factory(User::class)->create();
        $user->create_thread()->save(factory(Thread::class)->make());
        $thread = $user->create_thread()->first();
        $comment = factory(Comment::class)->make();
        $comment->thread_id = $thread->id;
        $user->comments()->save($comment);
        $response = $this->actingAs($user)
                ->delete(action('CommentController@destroy', $comment->id));
        $response->assertStatus(302);


    }

    public function test_delete_comment_by_authenticated_user_but_not_creator_of_comment()
    {


        $user = factory(User::class,2)->create();
        $user[0]->create_thread()->save(factory(Thread::class)->make());
        $thread = $user[0]->create_thread()->first();
        $comment = factory(Comment::class)->make();
        $comment->thread_id = $thread->id;
        $user[0]->comments()->save($comment);
        $response = $this->actingAs($user[1])
            ->delete(action('CommentController@destroy', $comment->id));
        $response->assertStatus(403);

    }

    public function test_delete_comment_by_unauthenticated_user()
    {


        $user = factory(User::class,2)->create();
        $user[0]->create_thread()->save(factory(Thread::class)->make());
        $thread = $user[0]->create_thread()->first();
        $comment = factory(Comment::class)->make();
        $comment->thread_id = $thread->id;
        $user[0]->comments()->save($comment);
        $response = $this
            ->delete(action('CommentController@destroy', $comment->id));
        $response->assertStatus(401);

    }


}
