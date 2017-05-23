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
        'resource'=>'https://example.com/a.jpg'];
        $this->NotSupportedImageUrl = ['type'=>'url',
        'resource'=>'http://eeweb.poly.edu/~yao/EL5123/image/lena_gray.bmp'];
        $this->BigImageUrl = ['type'=>'url',
        'resource'=>'https://upload.wikimedia.org/wikipedia/commons/2/2c/A_new_map_of_Great_Britain_according_to_the_newest_and_most_exact_observations_%288342715024%29.jpg'];
        
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_image_caching_by_url_real()
    {
        $response = $this->call('post', '/identify', $this->RealImageUrl);
        $response->assertStatus(302);
    }
    public function test_image_caching_by_url_fake()
    {
        $response = $this->call('post', '/identify', $this->UnrealImageUrl);
        $response->assertStatus(200);
    }
    public function test_image_caching_by_url_unsupported_format()
    {
        $response = $this->call('post', '/identify', $this->NotSupportedImageUrl);
        $response->assertStatus(200);
    }
    public function test_image_caching_by_url_too_big_image()
    {
        $response = $this->call('post', '/identify', $this->BigImageUrl);
        $response->assertStatus(200);
    }

}
