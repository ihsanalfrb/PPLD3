<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Kirkbater\Testing\SoftDeletes;
use App\Comment;

class DeleteCommentTest extends TestCase
{

  use DatabaseMigrations;
  use SoftDeletes;
  use WithoutMiddleware;
     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_delete_comment_response()
    {
        factory(Comment::class)->make();
        $this->comments = factory(Comment::class, 10)->create();
        $randomID = rand(0,9);
        $randomComment=Comment::where('id','=',$randomID)->first();
        
        $response = $this->call('delete', '/comments/'.$randomComment->id, []);
        $this->assertEquals(200, $response->status());
        $this->seeIsSoftDeletedInDatabase("comments", ['id'=>$randomComment->id]);
    }

}
