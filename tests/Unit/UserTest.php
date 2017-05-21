<?php

namespace Tests\Unit;

use App\Comment;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

    use DatabaseMigrations;


    public function setUp()
    {
        parent::setUp();

        $user = factory(User::class)->create();
        $thread = factory(Thread::class)->make();
        $user->create_thread()->save($thread);
        $comment = factory(Comment::class)->make();
        $comment->thread_id = $thread->id;
        $user->comments()->save($comment);
        $this->comment = $comment;
        $this->user = $user;
        $this->thread = $thread;


    }

    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_database_has_column_name(){
        $this->assertDatabaseHas('users', [
            'name' => $this->user->name
        ]);
    }

    public function test_database_has_column_password(){
        $this->assertDatabaseHas('users', [
            'password' => $this->user->password
        ]);
    }

    public function test_database_has_column_email(){
        $this->assertDatabaseHas('users',[
            'email' => $this->user->email
        ]);
    }


    public function test_database_has_column_remember_token(){
        $this->assertDatabaseHas('users',[
            'remember_token' => $this->user->remember_token
        ]);
    }

    public function test_user_has_name_attribute(){
        $this->assertArrayHasKey('name', $this->user->getAttributes());
    }

    public function test_user_has_password_attribute(){
        $this->assertArrayHasKey('password', $this->user->getAttributes());
    }

    public function test_user_has_remember_token_attribute(){
        $this->assertArrayHasKey('remember_token', $this->user->getAttributes());
    }

    public function test_user_has_email_attribute(){
        $this->assertArrayHasKey('email', $this->user->getAttributes());
    }



}
