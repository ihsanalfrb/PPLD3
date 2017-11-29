<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PmplTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_tested_path_7(){
        $response = $this
            ->post(action('Auth\RegisterController@register',[
                'name' => 'name',
                'email' => 'email@domain.com',
                'password' => 'password',
                'password_confirmation' => 'p',
                'birthday' => '2010-02-02',
                'gender' => 'female'
            ]));
        $this->assertDatabaseMissing('users', [
            'email' => 'email@domain.com'
        ]);
    }

    public function test_tested_path_6(){
        $response = $this
            ->post(action('Auth\RegisterController@register',[
                'name' => 'name',
                'email' => 'email@domain.com',
                'password' => '',
                'password_confirmation' => 'password',
                'birthday' => '2010-02-02',
                'gender' => 'female'
            ]));
        $this->assertDatabaseMissing('users', [
            'email' => 'email@domain.com'
        ]);
    }

    public function test_tested_path_5(){
        $response = $this
            ->post(action('Auth\RegisterController@register',[
                'name' => 'name',
                'email' => '',
                'password' => 'password',
                'password_confirmation' => 'password',
                'birthday' => '2010-02-02',
                'gender' => 'female'
            ]));
        $this->assertDatabaseMissing('users', [
            'email' => 'email@domain.com'
        ]);
    }
}
