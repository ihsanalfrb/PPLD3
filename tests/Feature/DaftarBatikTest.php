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
        $batiks = factory(Batik::class, 3)->create();
        $tag = $batiks[0]['tag'];
        $cluster = $batiks[0]['cluster'];
        $asal_daerah = $batiks[0]['asal_daerah'];
        $response = $this->get('/daftar_batik/'.$cluster.'/'.$asal_daerah.'/'.$tag);
        $response-> assertStatus(200);
    }
}
