<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PolaBatikTest extends TestCase
{

    use DatabaseMigrations;

    protected $limit = 4;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function setUp()
    {
      parent::setUp();
      $this->pola_batik = factory(PolaBatik::class)->make();
      $this->pola_batiks = factory(PolaBatik::class, $this->limit)->create();
    }

    public function test_pola_batik_has_a_gambar_pola_batik_attribute(){
      $this->assertArrayHasKey('gambar_pola_batik',$this->pola_batik->getAttributes());
    }
    public function test_pola_batik_has_a_matriks_pola_batik_attribute(){

      $this->assertArrayHasKey('matriks_pola_batik',$this->pola_batik->getAttributes());
    }

    // public function test_pola_batik_has_a_batik_id_attribute(){
    //
    // }
}
