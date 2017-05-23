<?php

namespace Tests\Feature;

use App\Batik;
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
        $response = $this->get('/search_batik/');
        $response-> assertStatus(200);
    }

    public function test_search_batik_with_query_page_response()
    {
        $batik = factory(Batik::class)->create();
        $response = $this->get('/search_batik/'.$batik->nama_batik);
        $response-> assertStatus(200);
    }
}
