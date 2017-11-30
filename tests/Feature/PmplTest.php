<?php

namespace Tests\Feature;

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

    /**
     * Valid Testcase
     */
    public function test_tested_path_1(){
        $response = $this
            ->post(action('Auth\RegisterController@register',[
                'name' => 'name',
                'email' => 'email@domain.com',
                'password' => 'password',
                'password_confirmation' => 'password',
                'birthday' => '2010-02-02',
                'gender' => 'female'
            ]));
        $this->assertDatabaseHas('users', [
            'email' => 'email@domain.com'
        ]);
    }

    /**
     * Name Invalid
     */
    public function test_tested_path_2(){
        $response = $this
            ->post(action('Auth\RegisterController@register',[
                'name' => '',
                'email' => 'email@domain.com',
                'password' => 'password',
                'password_confirmation' => 'password',
                'birthday' => '2010-02-02',
                'gender' => 'female'
            ]));
        $this->assertDatabaseMissing('users', [
            'email' => 'email@domain.com'
        ]);
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


    public function test_tested_path_4(){
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

    public function test_tested_path_3(){
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
