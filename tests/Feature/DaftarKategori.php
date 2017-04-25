<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\TagBatik;

class DaftarKategoriTest extends TestCase
{

    use DatabaseMigrations;

     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_daftar_kategori_page_response()
    {

        $this->batik = factory(Batik::class)->make();
        $this->batiks = factory(Batik::class, 3)->create();
        $response = $this->get('/rincian_info/'.$this->batiks[0]->id);
        $response-> assertStatus(200);

        $response = $this->get('/rincian_info/'.$this->batiks[1]->id);
        $response-> assertStatus(200);

        $response = $this->get('/rincian_info/'.$this->batiks[2]->id);
        $response-> assertStatus(200);

        while(true){
          $randomID = rand();

          if($randomID != $this->batiks[0]->id && $randomID != $this->batiks[1]->id && $randomID != $this->batiks[2]->id){
            $response = $this->get('/show_category/'.$randomID);
            $response-> assertStatus(404);
            break;
          }

        }
    }

}
