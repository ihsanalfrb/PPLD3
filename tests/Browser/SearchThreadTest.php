<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 4/26/17
 * Time: 9:43 PM
 */

namespace Tests\Browser;
use App\Batik;
use App\TagBatik;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SearchBatikTest extends DuskTestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;

    public function test_search_batik() {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertPathIs('/')
                ->type('keywords', 'parang')
                ->press('Search Thread')
                ->assertPathIs('/search_thread/parang')
                ->assertTitle('Pencarian Thread')
                ->assertSee('Hasil Pencarian parang')
                ->assertSee('parang');
            $this->assertTrue(true);
        });
    }
}
