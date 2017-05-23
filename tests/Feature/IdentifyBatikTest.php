<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TulisBalasComment extends TestCase
{
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();
        $this->RealImageUrl = ['type'=>'url',
            'resource'=>'https://s.imgur.com/images/imgur-logo.svg'];
        $this->UnrealImageUrl = ['type'=>'url',
        'resource'=>'https://example.com'];

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_image_caching_by_url_real()
    {
        $response = $this->call('post', '/identify', $this->RealImageUrl);
        $response->assertStatus(200);
    }
    public function test_image_caching_by_url_fake()
    {
        $response = $this->call('post', '/identify', $this->UnrealImageUrl);
        $response->assertStatus(404);
    }

}
