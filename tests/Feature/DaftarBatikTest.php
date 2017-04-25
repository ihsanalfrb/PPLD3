<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Batik;

class DaftarBatikTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_daftar_batik_page_response()
    {
        $this->batiks = factory(Batik::class, 3)->create();
        $random_number = rand(0, 2);
        $tag = $this->batiks[$random_number]->tag;
        $cluster = $this->batiks[$random_number]->cluster_batik;
        $asal_daerah = $this->batiks[$random_number]->asal_daerah;

        $response = $this->get('/daftar_batik/cluster/'.$cluster);
        $response-> assertStatus(200);
        $response = $this->get('/daftar_batik/asal/'.$asal_daerah);
        $response-> assertStatus(200);
        $response = $this->get('/daftar_batik');
        $response-> assertStatus(200);
        $response = $this->get('/daftar_batik/cluster');
        $response-> assertStatus(200);
    }
}
