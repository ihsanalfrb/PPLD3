<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 4/26/17
 * Time: 1:22 AM
 */

namespace Tests\Browser;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DaftarThreadTest extends DuskTestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;

    public function test_daftar_thread() {
        $this->browse(function (Browser $browser) {
            $nama_thread = Thread::all()->first()->nama_thread;
            $browser->visit('/daftar_thread')
                ->assertPathIs('/daftar_thread')
                ->assertTitle('Forums')
                ->assertSee('Semua Thread')
                ->assertSee($nama_thread);
//                ->type('name', 'Rizqy Faishal')
//                ->type('email', 'rizqyfaishal27@gmail.com')
//                ->type('password', 'password')
//                ->type('password_confirmation', 'password')
//                ->press('Button')
            $this->assertTrue(true);
//            $user = User::where('email','=','rizqyfaishal27@gmail.com')->first();
//            if(is_null($user)){
//                $this->assertTrue(false);
//            } else {
//                $this->assertTrue(true);
//            }
        });
    }
}