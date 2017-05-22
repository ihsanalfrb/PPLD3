<?php

namespace Tests\Feature;

use App\TagBatik;
use Faker\Factory;
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

    public function test_daftar_batik_cluster_without_cluster_name(){
        $batiks = factory(Batik::class,16)->create();
        $response =  $this->get('/daftar_batik/cluster/'.$batiks[0]->cluster_batik.'sask asa nska snaks n');
        $response->assertStatus(404);
    }

    public function test_daftar_batik_cluster_with_cluster_name(){
        $faker = Factory::create();
        $batiks = factory(Batik::class,16)->make();
        foreach ($batiks as $batik){
            $batik->cluster_batik = $faker->word;
            $batik->save();
        }
        $response =  $this->get('/daftar_batik/cluster/'.$batiks[0]->cluster_batik);
        $response->assertStatus(200);
    }


    public function test_daftar_batik_page_response()
    {
        $this->batiks = factory(Batik::class, 3)->create();
        $this->tag_batiks = factory(TagBatik::class, 3)->create();

        for ($x = 0; $x < 3; $x++) {
            $cluster = $this->batiks[$x]->cluster_batik;
            $asal_daerah = $this->batiks[$x]->asal_daerah;
            $tag_batiks = $this->tag_batiks[$x]->tag_batik;

            $response = $this->get('/daftar_batik/cluster/'.$cluster);
            $response-> assertStatus(200);
            $response = $this->get('/daftar_batik/asal/'.$asal_daerah);
            $response-> assertStatus(200);
            $response = $this->get('/daftar_batik/');
            $response-> assertStatus(200);
            $response = $this->get('/daftar_batik/cluster/');
            $response-> assertStatus(200);
            $response = $this->get('/daftar_batik/tag/'.$tag_batiks);
            $response-> assertStatus(200);
        }

        $response = $this->get('/daftar_batik/asal/');
        $response-> assertStatus(404);
        $response = $this->get('/daftar_batik/tag/');
        $response-> assertStatus(404);

        while(true){
            $randomString = str_random();
            if($randomString != $this->batiks[0]->cluster && $randomString != $this->batiks[1]->cluster && $randomString != $this->batiks[2]->cluster){
                $response = $this->get('/daftar_batik/cluster/'.$randomString);
                $response-> assertStatus(404);
                break;
            }
        }

        while(true){
            $randomString = str_random();
            if($randomString != $this->batiks[0]->asal_daerah && $randomString != $this->batiks[1]->asal_daerah && $randomString != $this->batiks[2]->asal_daerah){
                $response = $this->get('/daftar_batik/asal/'.$randomString);
                $response-> assertStatus(404);
                break;
            }
        }

        while(true){
            $randomString = str_random();
            if($randomString != $this->tag_batiks[0]->tag_batik && $randomString != $this->tag_batiks[1]->tag_batik && $randomString != $this->tag_batiks[2]->tag_batik){
                $response = $this->get('/daftar_batik/tag/'.$randomString);
                $response-> assertStatus(404);
                break;
            }
        }
    }
}
