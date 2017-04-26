<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 4/25/17
 * Time: 5:39 PM
 */

namespace Tests\Browser;

use App\Batik;
use App\TagBatik;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;



class DaftarBatikTest extends DuskTestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;

    public function test_daftar_batik_all() {
        $this->browse(function (Browser $browser) {
            $nama_batik = Batik::all()->first()->nama_batik;
            $browser->visit('/daftar_batik')
                ->assertPathIs('/daftar_batik')
                ->assertTitle('Batiks')
                ->assertSee('Semua Batik')
                ->assertSee($nama_batik);
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

    public function test_daftar_batik_cluster() {

        $this->browse(function (Browser $browser) {
            $cluster1 = Batik::whereNotNull('cluster')->first()->cluster;
            $cluster2 = Batik::whereNotNull('cluster')->where('cluster', '<>', $cluster1)->first()->cluster;
            $nama_batik_cluster1 = Batik::where('cluster', '=', $cluster1)->first()->nama_batik;
            $nama_batik_cluster2 = Batik::where('cluster', '=', $cluster2)->first()->nama_batik;
            $nama_batik_nocluster = Batik::whereNull('cluster')->first()->nama_batik;
            $browser->visit('/daftar_batik/cluster/'.$cluster1)
                ->assertPathIs('/daftar_batik/cluster/'.$cluster1)
                ->assertTitle('Batiks')
                ->assertSee('Batik dengan pola '.$cluster1)
                ->assertSee($cluster1)
                ->assertSee($nama_batik_cluster1);
//                ->type('name', 'Rizqy Faishal')
//                ->type('email', 'rizqyfaishal27@gmail.com')
//                ->type('password', 'password')
//                ->type('password_confirmation', 'password')
//                ->press('Button')
            if ($browser->assertSee($nama_batik_nocluster)){
                $this->assertTrue(false);
            } elseif ($browser->assertSee($cluster2)) {
                $this->assertTrue(false);
            } elseif ($browser->assertSee($nama_batik_cluster2)) {
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
//            $user = User::where('email','=','rizqyfaishal27@gmail.com')->first();
//            if(is_null($user)){
//                $this->assertTrue(false);
//            } else {
//                $this->assertTrue(true);
//            }
        });
    }

    public function test_daftar_batik_daerah() {
        $this->browse(function (Browser $browser) {
            $asal_daerah1 = Batik::whereNotNull('asal_daerah')->first()->asal_daerah;
            $asal_daerah2 = Batik::whereNotNull('asal_daerah')->where('asal_daerah', '<>', $asal_daerah1)->first()->asal_daerah;
            $nama_batik1 = Batik::where('asal_daerah', '=', $asal_daerah1)->first()->nama_batik;
            $nama_batik2 = Batik::where('asal_daerah', '=', $asal_daerah2)->first()->nama_batik;
            $browser->visit('/daftar_batik/asal/'.$asal_daerah1)
                ->assertPathIs('/daftar_batik/'.$asal_daerah1)
                ->assertTitle('Batiks')
                ->assertSee('Batik yang berasal dari '.$asal_daerah1)
                ->assertSee($asal_daerah1)
                ->assertSee($nama_batik1);
//                ->type('name', 'Rizqy Faishal')
//                ->type('email', 'rizqyfaishal27@gmail.com')
//                ->type('password', 'password')
//                ->type('password_confirmation', 'password')
//                ->press('Button')
            if ($browser->assertSee($asal_daerah2)) {
                $this->assertTrue(false);
            } elseif ($browser->assertSee($nama_batik2)) {
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
//            $user = User::where('email','=','rizqyfaishal27@gmail.com')->first();
//            if(is_null($user)){
//                $this->assertTrue(false);
//            } else {
//                $this->assertTrue(true);
//            }
        });
    }

    public function test_daftar_batik_uncategorized() {
        $this->browse(function (Browser $browser) {
            $nama_batik_nocluster = Batik::whereNull('cluster')->first()->nama_batik;
            $nama_batik_cluster = Batik::whereNotNull('cluster')->first()->nama_batik;
            $browser->visit('/daftar_batik/cluster')
                ->assertPathIs('/daftar_batik/cluster')
                ->assertTitle('Batiks')
                ->assertSee('Batik dengan pola yang belum dikategorikan')
                ->assertSee($nama_batik_nocluster);
//                ->type('name', 'Rizqy Faishal')
//                ->type('email', 'rizqyfaishal27@gmail.com')
//                ->type('password', 'password')
//                ->type('password_confirmation', 'password')
//                ->press('Button')
            if ($browser->assertSee($nama_batik_cluster)){
                $this->assertTrue(false);
            } else {
                $this->assertTrue(true);
            }
//            $user = User::where('email','=','rizqyfaishal27@gmail.com')->first();
//            if(is_null($user)){
//                $this->assertTrue(false);
//            } else {
//                $this->assertTrue(true);
//            }
        });
    }
}