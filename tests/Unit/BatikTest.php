<?php

namespace Tests\Unit;

use App\Batik;
use App\PolaBatik;
use App\TagBatik;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BatikTest extends TestCase
{

	use DatabaseMigrations;

	protected $limit = 4;

	public function setUp()
    {
        parent::setUp();
        $this->batik = factory(Batik::class)->make();
        $this->batiks = factory(Batik::class, $this->limit)->create();

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_model_batik_has_a_nama_batik_attribute()
    {
        $this->assertArrayHasKey('nama_batik',$this->batik->getAttributes());
    }

    public function test_a_model_batik_has_a_makna_batik_attribute()
    {
        $this->assertArrayHasKey('makna_batik',$this->batik->getAttributes());
    }

    public function test_a_model_batik_has_a_sejarah_batik_attribute()
    {
        $this->assertArrayHasKey('sejarah_batik',$this->batik->getAttributes());
    }

    public function test_a_model_batik_has_a_asal_daerah_attribute()
    {
        $this->assertArrayHasKey('asal_daerah',$this->batik->getAttributes());
    }

    public function test_list_of_batiks_has_array_size_match_with_limit(){
        $this->assertCount($this->limit, $this->batiks);
    }

//    public function test_a_batik_has_a_relationship_with_pola_batik(){
//        $pola_batik = factory(PolaBatik::class)->make();
//    }
}
