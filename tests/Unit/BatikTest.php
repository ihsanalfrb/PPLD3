<?php

namespace Tests\Unit;

use App\Batik;
use App\PolaBatik;
use App\TagBatik;
use phpDocumentor\Reflection\DocBlock\Tag;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BatikTest extends TestCase
{

	use DatabaseMigrations;


	public function setUp()
    {
        parent::setUp();
        $this->batik = factory(Batik::class)->create();
        $tag_batiks = factory(TagBatik::class,3)->create();
        $tag_batik_sync = [$tag_batiks[0]->id, $tag_batiks[2]->id];
        $this->batik->tag_batik()->sync($tag_batiks);
        $this->tag_batiks = $tag_batiks;
    }


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



}
