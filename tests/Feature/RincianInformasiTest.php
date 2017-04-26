<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Batik;

class RincianInformasiTest extends TestCase
{

    use DatabaseMigrations;

     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_rincian_informasi_page_response()
    {

        $this->batik = factory(Batik::class)->make();
        $this->batiks = factory(Batik::class, 3)->create();
        $response = $this->get('/rincian_info/'.$this->batiks[0]->id);
        $response-> assertStatus(200);

        $response = $this->get('/rincian_info/'.$this->batiks[1]->id);
        $response-> assertStatus(200);

        $response = $this->get('/rincian_info/'.$this->batiks[2]->id);

        $this->batik = factory(TagBatik::class)->make();
        $this->batiks = factory(TagBatik::class, 3)->create();
        $response = $this->get('/show_tag/'.$this->batiks[0]->id);
        $response-> assertStatus(200);

        $response = $this->get('/show_tag/'.$this->batiks[1]->id);
        $response-> assertStatus(200);

        $response = $this->get('/show_tag/'.$this->batiks[2]->id);
        $response-> assertStatus(200);

        while(true){
          $randomID = rand();

          if($randomID != $this->batiks[0]->id && $randomID != $this->batiks[1]->id && $randomID != $this->batiks[2]->id){
              $response = $this->get('/rincian_info/'.$randomID);
              $response-> assertStatus(404);
              break;
          }
        }
    }

}
