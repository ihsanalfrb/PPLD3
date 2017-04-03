<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Kirkbater\Testing\SoftDeletes;
use App\Batik;

class DeleteCommentTest extends TestCase
{

  use DatabaseMigrations;
  use SoftDeletes;
     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_delete_comment_response()
    {

        $comment = [
        "id" => 1,
        "first" => "Test",
        "last" => "Name",
        "username" => "txltwc"
        ];

    $response = $this->call('delete', '/Comments/'.$comment->id, []);
    $this->assertEquals(200, $response->status());
    $this->seeInDatabase("users", $user);
    $this->seeIsSoftDeletedInDatabase("users", $user);
}



}
