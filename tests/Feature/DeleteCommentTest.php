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
    public function test_delete_comment_response()
    {
        factory(User::class,15)->create();
        factory(Thread::class,15)->create();


        factory(Comment::class)->make();
        $this->comments = factory(Comment::class,50)->create();
        $randomID = 1;
        $randomComment=Comment::where('id','=',$randomID)->first();

        $response = $this->call('delete', '/comments/'.$randomComment->id, []);
        $this->assertEquals(401, $response->status());

        $user = User::where('id', '=', $randomComment->comment_by)->first();
        $this->be($user);
        $response = $this->call('delete', '/comments/'.$randomComment->id, []);
        $this->assertEquals(302, $response->status());
        $randomCommentDeleted=Comment::where('id','=',$randomID)->first();
        $this->assertNull($randomCommentDeleted);

        $randomComment=Comment::where('comment_by', '<>', $user->id)->first();

        $response = $this->call('delete', '/comments/'.$randomComment->id, []);
        $this->assertEquals(403, $response->status());


    }

}
