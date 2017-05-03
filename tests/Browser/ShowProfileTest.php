<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_successfully_register()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertPathIs('/register')
                    ->assertTitle('Register')
                    ->assertSee('Name')
                    ->assertSee('E-Mail Address')
                    ->assertSee('Password')
                    ->assertSee('Confirm Password')
                    ->type('name', 'Rizqy Faishal')
                    ->type('email', 'rizqyfaishal27@gmail.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Button')
                    ->assertPathIs('/home');
            $user = User::where('email','=','rizqyfaishal27@gmail.com')->first();
            if(is_null($user)){
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
        });
    }
}
