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


        $response = $this->get('/categories');
        $response-> assertStatus(200);


    }

}

