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
	use DatabaseTransactions;


	public function setUp()
    {
        parent::setUp();
        $this->batik = factory(Batik::class)->create();
        $tag_batiks = factory(TagBatik::class,3)->create();
        $tag_batik_sync = [$tag_batiks[0]->id, $tag_batiks[2]->id];
        $this->batik->tag_batik()->sync($tag_batiks);
        $this->tag_batiks = $tag_batiks;
    }


    public function test_database_has_column_nama_batik(){
        $this->assertDatabaseHas('batik', [
            'nama_batik' => $this->batik->nama_batik
        ]);
    }

    public function test_database_has_column_makna_batik(){
        $this->assertDatabaseHas('batik', [
            'makna_batik' => $this->batik->makna_batik
        ]);
    }

    public function test_database_has_column_sejarah_batik(){
        $this->assertDatabaseHas('batik', [
            'sejarah_batik' => $this->batik->sejarah_batik
        ]);
    }

    public function test_database_has_column_cluster_batik(){
        $this->assertDatabaseHas('batik', [
            'cluster_batik' => $this->batik->cluster_batik
        ]);
    }

    public function test_database_has_column_asal_daerah(){
        $this->assertDatabaseHas('batik', [
            'asal_daerah' => $this->batik->asal_daerah
        ]);
    }

    public function test_database_has_column_gambar_pola_batik(){
        $this->assertDatabaseHas('batik', [
            'gambar_pola_batik' => $this->batik->gambar_pola_batik
        ]);
    }

    public function test_database_has_column_matriks_pola_batik(){
        $this->assertDatabaseHas('batik', [
            'matriks_pola_batik' => $this->batik->matriks_pola_batik
        ]);
    }

    public function test_batik_has_nama_batik_attribute()
    {
        $this->assertArrayHasKey('nama_batik',$this->batik->getAttributes());
    }

    public function test_batik_has_makna_batik_attribute()
    {
        $this->assertArrayHasKey('makna_batik',$this->batik->getAttributes());
    }

    public function test_batik_has_sejarah_batik_attribute()
    {
        $this->assertArrayHasKey('sejarah_batik',$this->batik->getAttributes());
    }

    public function test_batik_has_asal_daerah_attribute()
    {
        $this->assertArrayHasKey('asal_daerah',$this->batik->getAttributes());
    }



    public function test_batik_has_gambar_pola_batik_attribute()
    {
        $this->assertArrayHasKey('gambar_pola_batik',$this->batik->getAttributes());
    }

    public function test_batik_has_matriks_pola_batik_attribute()
    {
        $this->assertArrayHasKey('matriks_pola_batik',$this->batik->getAttributes());
    }

}
