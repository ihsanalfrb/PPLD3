<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class IdentifyBatikTest extends TestCase
{
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();
        $this->real_image_url = ['type'=>'url',
            'resource'=>'https://s.imgur.com/images/imgur-logo.svg'];
        $this->unreal_image_url = ['type'=>'url',
        'resource'=>'https://example.com'];

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_image_caching_by_url_real()
    {
        $response = $this
          ->post(action('IdentifyBatikController@store',[
              'link' => 'https://s.imgur.com/images/imgur-logo.svg'
          ]));
        $response->assertStatus(302);
        $response->assertRedirect('/identify');
    }
    public function test_image_caching_by_url_fake()
    {
        $response = $this
          ->post(action('IdentifyBatikController@store',[
            'link' => 'https://example.com'
          ]));
        $response->assertStatus(302);
        $response->assertRedirect('/identify');
    }

}
