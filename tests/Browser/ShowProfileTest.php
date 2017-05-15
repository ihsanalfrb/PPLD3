<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ShowProfileTest extends DuskTestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_show_profile()
    {
        $this->browse(function (Browser $browser) {
            $user = Auth::user();
            if(is_null($user)) {
                $browser->visit('/show_profile/')
                        ->assertSee('404');
                $this->assertTrue(false);
            } else {
                $browser->visit('/show_profile/')
                    ->assertPathIs('/show_profile/')
                    ->assertTitle('User Profile')
                    ->assertSee('Name')
                    ->assertSee($user->getAuthIdentifierName())
                    ->assertSee('E-Mail Address')
                    ->assertSee($user->getAuthIdentifier()->email)
                    ->assertSee('Date of Birth')
                    ->assertSee($user->getAuthIdentifier()->birthday)
                    ->assertSee('Gender')
                    ->assertSee($user->getAuthIdentifier()->gender)
                    ->assertSee('Bio')
                    ->assertSee($user->getAuthIdentifier()->bio)
                    ->assertSee('Telephone')
                    ->assertSee($user->getAuthIdentifier()->telephone)
                    ->assertSee('Address')
                    ->assertSee($user->getAuthIdentifier()->address)
                    ->assertSee('Edit Profile');
                $this->assertTrue(true);
            }
        });
    }

    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }
}
