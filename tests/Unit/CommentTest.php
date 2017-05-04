<?php

namespace Tests\Unit;

use App\Comment;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommentTest extends TestCase
{
    protected $limit = 4;

    public function setUp()
    {
//        parent::setUp();
//        $this->user = factory(UserAccount::class)->make();
//        $this->users = factory(UserAccount::class, $this->limit)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

//    public function test_a_model_batik_has_a_nama_batik_attribute()
//    {
//        $this->assertArrayHasKey('nama_batik',$this->batik->getAttributes());
//    }
//
//    public function test_a_model_batik_has_a_makna_batik_attribute()
//    {
//        $this->assertArrayHasKey('makna_batik',$this->batik->getAttributes());
//    }
//
//    public function test_a_model_batik_has_a_sejarah_batik_attribute()
//    {
//        $this->assertArrayHasKey('sejarah_batik',$this->batik->getAttributes());
//    }
//
//    public function test_a_model_batik_has_a_asal_daerah_attribute()
//    {
//        $this->assertArrayHasKey('asal_daerah',$this->batik->getAttributes());
//    }
//
//    public function test_list_of_batiks_has_array_size_match_with_limit(){
//        $this->assertCount($this->limit, $this->batiks);
//    }
//
//    public function test_a_batik_has_a_relationship_with_pola_batik(){
//        $pola_batik = factory(PolaBatik::class)->make();
//    }

}
