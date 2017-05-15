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
    public function test_show_edit_profile()
    {

        $this->browse(function (Browser $browser) {
            $user = Auth::user();
            if(is_null($user)) {
                $browser->visit('/edit_profile/')
                    ->assertSee('404');
                $this->assertTrue(false);
            } else {
                $browser->visit('/edit_profile/')
                    ->assertPathIs('/edit_profile/')
                    ->assertTitle('Edit Information')
                    ->assertSee('Name')
                    ->assertSee('E-Mail Address')
                    ->assertSee('Password')
                    ->assertSee('Date of Birth')
                    ->assertSee('Gender')
                    ->assertSee('Bio')
                    ->assertSee('Telephone')
                    ->assertSee('Address');
                $this->assertTrue(true);
            }
        });
    }

    public function test_save_changes_edit_profile()
    {

        $this->browse(function (Browser $browser) {
            $user = Auth::user();
            if(!is_null($user)) {
                $browser->visit('/edit_profile/')
                    ->assertPathIs('/edit_profile/')
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
                    ->type('birthday', '1996-01-01')
                    ->select('gender', 'male')
                    ->type('bio', 'Hello World! my name is Rizqy Faishal')
                    ->type('telephone', '+62812008001')
                    ->type('address', 'Kampus UI Depok')
                    ->press('Save Changes')
                    ->type('confirm_password', $user->password)
                    ->press('Save')
                    ->assertPathIs('/show_profile/');
                $testuser = User::where('name', '=', 'Rizqy Faishal')->where('email', '=', 'rizqyfaishal27@gmail.com')->first();
                if (is_null($testuser)) {
                    $this->assertTrue(false);
                } else {
                    $this->assertTrue(true);
                }
            }
        });
    }

    public function test_change_password_edit_profile()
    {

        $this->browse(function (Browser $browser) {
            $user = Auth::user();
            if(!is_null($user)) {
                $browser->visit('/edit_profile/')
                    ->assertPathIs('/edit_profile/')
                    ->assertTitle('Edit Information')
                    ->assertSee('Name')
                    ->assertSee('E-Mail Address')
                    ->assertSee('Password')
                    ->assertSee('Date of Birth')
                    ->assertSee('Gender')
                    ->assertSee('Bio')
                    ->assertSee('Telephone')
                    ->assertSee('Address')
                    ->press('Change Password')
                    ->type('old_password', $user->password)
                    ->type('new_password','testpass123')
                    ->type('confirm_password', 'testpass123')
                    ->press('Save')
                    ->assertPathIs('/show_profile/');
                $testuser = User::where('name', '=', 'Rizqy Faishal')->where('password', '=', 'testpass123')->first();
                if (is_null($testuser)) {
                    $this->assertTrue(false);
                } else {
                    $this->assertTrue(true);
                }
            }
        });
    }

    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }
}
