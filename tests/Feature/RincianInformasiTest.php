<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RincianInformasiTest extends TestCase
{
     /**
     * A basic test example.
     *
     * @return void
     */
    public function test_rincian_informasi_page_should_return_status_200()
    {

        $response = $this->get('/rincian_info/1');
        $response->assertStatus(200);
    }

}
