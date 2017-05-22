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

    public function test_database_has_column_is_admin(){
        $this->assertDatabaseHas('users',[
            'is_admin' => $this->user->is_admin
        ]);
    }

    public function test_database_has_column_birthday(){
        $this->assertDatabaseHas('users',[
            'birthday' => $this->user->birthday
        ]);
    }

    public function test_database_has_column_gender(){
        $this->assertDatabaseHas('users',[
            'gender' => $this->user->gender
        ]);
    }

    public function test_database_has_column_bio(){
        $this->assertDatabaseHas('users',[
            'bio' => $this->user->bio
        ]);
    }

    public function test_database_has_column_telephone(){
        $this->assertDatabaseHas('users',[
            'telephone' => $this->user->telephone
        ]);
    }

    public function test_database_has_column_address(){
        $this->assertDatabaseHas('users',[
            'address' => $this->user->address
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

    public function test_user_has_is_admin_attribute(){
        $this->assertArrayHasKey('is_admin', $this->user->getAttributes());
    }


    public function test_user_has_birthday_attribute(){
        $this->assertArrayHasKey('birthday', $this->user->getAttributes());
    }

    public function test_user_has_gender_attribute(){
        $this->assertArrayHasKey('gender', $this->user->getAttributes());
    }
}
