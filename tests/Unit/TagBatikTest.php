<?php

namespace Tests\Unit;

use App\Batik;
use App\PolaBatik;
use App\TagBatik;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TagBatikTest extends TestCase
{

    use DatabaseMigrations;

    protected $limit = 4;

    public function setUp()
    {
        parent::setUp();
        $this->tag_batiks = factory(TagBatik::class, $this->limit)->create();

    }


    public function test_a_model_tag_batik_has_a_tag_batik_attribute()
    {
        foreach ($this->tag_batiks as $batik){
            $this->assertArrayHasKey('tag_batik',$batik->getAttributes());
        }
    }

    public function test_list_of_tag_batiks_has_array_size_match_with_limit(){
        $this->assertCount($this->limit, $this->tag_batiks);
    }

}
