<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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
            $user = User::all()->first();
            $browser->visit('/show_profile/'.$user->id)
                    ->assertPathIs('/show_profile/'.$user->id)
                    ->assertTitle('User Profile')
                    ->assertSee('Name')
                    ->assertSee('E-Mail Address')
                    ->assertSee('Date of Birth')
                    ->assertSee('Gender')
                    ->assertSee('Bio')
                    ->assertSee('Telephone')
                    ->assertSee('Address')
                    ->assertSee('Edit Profile');
            $this->assertTrue(true);
        });
    }
}
