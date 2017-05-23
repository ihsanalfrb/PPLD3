<?php

namespace Tests\Feature;

use App\Batik;
use App\TagBatik;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{

    use DatabaseMigrations;
    use WithoutMiddleware;

    public function test_home_page()
    {
        factory(TagBatik::class, 23)->create();
        $response = $this->get(action('PageController@index'));
        $response->assertStatus(200);
    }

    public function test_show_tag_not_found(){
        $tag = factory(TagBatik::class)->create();
        $response = $this->get(action('PageController@show_tag', $tag->id + 1));
        $response->assertStatus(404);
    }

    public function test_show_tag_success(){
        $tag = factory(TagBatik::class)->create();
        factory(Batik::class, 3)->create();
        $response = $this->get(action('PageController@show_tag', $tag->id));
        $response->assertStatus(200);
    }

    public function test_search_batik_without_keywords(){
        factory(Batik::class,16)->create();
        $response = $this->get(action('PageController@search_batik', null));
        $response->assertStatus(200);
    }

//    public function test_search_batik_with_keywords(){
//        factory(Batik::class,16)->create();
//        factory(TagBatik::class,4)->create();
//        $response = $this->get(action('PageController@search_batik', 'example'));
//        $response->assertStatus(200);
//    }

    public function test_categories(){
        factory(Batik::class,16)->create();
        $response = $this->get(action('PageController@categories'));
        $response->assertStatus(200);
    }

    public function test_categories_with_null_cluster_batik(){
        $batiks = factory(Batik::class,16)->make();
        foreach ($batiks as $batik){
            $batik->cluster_batik = null;
            $batik->save();
        }
        $response = $this->get(action('PageController@categories'));
        $response->assertStatus(200);
    }

    public function test_categories_with_not_null_cluster_batik(){
        $batiks = factory(Batik::class,16)->make();
        foreach ($batiks as $batik){
            $batik->cluster_batik = 'example';
            $batik->save();
        }
        $response = $this->get(action('PageController@categories'));
        $response->assertStatus(200);
    }

    public function test_edit_profile_unathenticated_user(){
        $response = $this->get(action('PageController@edit_profile'));
        $response->assertStatus(404);
    }

    public function test_edit_profile_authenticated_user(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(action('PageController@edit_profile'));
        $response->assertStatus(200);
    }

    public function test_show_profile_unathenticated_user(){
        $response = $this->get(action('PageController@show_profile'));
        $response->assertStatus(404);
    }

    public function test_show_profile_authenticated_user(){
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(action('PageController@show_profile'));
        $response->assertStatus(200);
    }

}
