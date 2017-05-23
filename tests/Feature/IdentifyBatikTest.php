<?php

namespace Tests\Feature;
use Tests\TestCase;
use App\Batik;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class IdentifyBatikTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseMigrations;

    public function setUp()
    {

        parent::setUp();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_image_caching_by_url_real()
    {
        $batik = factory(Batik::class, 10)->create();
        $response = $this
          ->post(action('IdentifyBatikController@store',[
              'link' => 'https://s.imgur.com/images/imgur-logo.svg'
          ]));
        $response->assertStatus(200);
    }
    public function test_image_caching_by_url_fake()
    {
        $response = $this
          ->post(action('IdentifyBatikController@store',[
            'link' => 'http://xzcnj.ksndowh834rjwrikjweklrfeknjkfndkjfntkjer.sadsadasdawsmjiejiow.xom/'
          ]));
        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public function test_image_caching_by_url_unsupported_format()
    {
      $response = $this
        ->post(action('IdentifyBatikController@store',[
          'link' => 'http://eeweb.poly.edu/~yao/EL5123/image/lena_gray.bmp'
        ]));
      $response->assertStatus(302);
      $response->assertRedirect('/');
    }

    public function test_upload_valid_image()
    {
      $batik = factory(Batik::class, 10)->create();
      $local_file = __DIR__ . '/test-files/test-image.jpg';

      $uploadedFile = new \Symfony\Component\HttpFoundation\File\UploadedFile(
          $local_file,
          'test-image.jpg',
          'image/jpeg',
          95582,
          null,
          true
      );
      $response = $this->call('POST', action('IdentifyBatikController@store'), [], [], ['image' => $uploadedFile], ['Content-Type' => 'multipart/form-data']);
      $response->assertStatus(200);

    }

    public function test_upload_invalid_image()
    {
      $batik = factory(Batik::class, 10)->create();
      $local_file = __DIR__ . '/test-files/test-not-image.jpg';

      $uploadedFile = new \Symfony\Component\HttpFoundation\File\UploadedFile(
          $local_file,
          'test-not-image.jpg',
          'application/php',
          95582,
          null,
          true
      );
      $response = $this->call('POST', action('IdentifyBatikController@store'), [], [], ['image' => $uploadedFile], ['Content-Type' => 'multipart/form-data']);
      $response->assertStatus(302);
      $response->assertRedirect('/');

    }

    public function test_upload_non_image_file()
    {
      $batik = factory(Batik::class, 10)->create();
      $local_file = __DIR__ . '/test-files/test-php.php';

      $uploadedFile = new \Symfony\Component\HttpFoundation\File\UploadedFile(
          $local_file,
          'test-php.php',
          'application/php',
          95582,
          null,
          true
      );
      $response = $this->call('POST', action('IdentifyBatikController@store'), [], [], ['image' => $uploadedFile], ['Content-Type' => 'multipart/form-data']);
      $response->assertStatus(302);
      $response->assertRedirect('/');

    }

    public function test_upload_empty_image()
    {
      $batik = factory(Batik::class, 10)->create();
      $local_file = __DIR__ . '/test-files/test-php.php';

      $uploadedFile = new \Symfony\Component\HttpFoundation\File\UploadedFile(
          $local_file,
          'test-php.php',
          'application/php',
          95582,
          null,
          true
      );
      $response = $this->call('POST', action('IdentifyBatikController@store'), [], [], ['file' => $uploadedFile], ['Content-Type' => 'multipart/form-data']);
      $response->assertStatus(302);
      $response->assertRedirect('/');

    }
}
