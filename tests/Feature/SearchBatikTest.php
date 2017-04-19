<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchBatikTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_search_batik_page_response()
    {
        $this->batik = factory(Batik::class)->make();
        $this->batiks = factory(Batik::class, 3)->create();
        $random_id = rand(0,2);
        $cluster_sample = $this->batiks[$random_id]->cluster;
        $asal_daerah_sample = $this->batiks[$random_id]->asal_daerah;
        $array_of_words = explode(' ', trim($this->batiks[$random_id]->makna_batik));
        $content_sample = $array_of_words[0].' '.$array_of_words[1].' '.$array_of_words[2];
        $nama_sample = $this->batiks[$random_id]->nama_batik;

        $response = $this->get('/search_batik/'.$cluster_sample);
        $response-> assertStatus(200);

        $response = $this->get('/search_batik/'.$asal_daerah_sample);
        $response-> assertStatus(200);

        $response = $this->get('/search_batik/'.$content_sample);
        $response-> assertStatus(200);

        $response = $this->get('/search_batik/'.$nama_sample);
        $response-> assertStatus(200);
    }
}
