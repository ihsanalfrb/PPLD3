<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use function PHPSTORM_META\type;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditProfileTest extends DuskTestCase
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
            $user = factory(User::class)->make();
            $browser->visit('/edit_profile/'.$user->id)
                    ->assertPathIs('/edit_profile/'.$user->id)
                    ->assertTitle('Edit Information')
                    ->assertSee('Name')
                    ->assertSee('E-Mail Address')
                    ->assertSee('Password')
                    ->assertSee('Date of Birth')
                    ->assertSee('Gender')
                    ->assertSee('Bio')
                    ->assertSee('Telephone')
                    ->assertSee('Address')
                    ->type('name', 'Rizqy Faishal')
                    ->type('email', 'rizqyfaishal27@gmail.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->type('birthday','1996-01-01')
                    ->select('gender', 'male')
                    ->type('bio','Hello World! my name is Rizqy Faishal')
                    ->type('telephone', '+62812008001')
                    ->type('address','Kampus UI Depok')
                    ->press('Save Changes')
                    ->assertPathIs('/show_profile/'.$user->id);
            $user = User::where('email','=','rizqyfaishal27@gmail.com')->first();
            if(is_null($user)){
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
        });
    }
}
