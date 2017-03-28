<?php

use Illuminate\Database\Seeder;

class TagBatikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tag_batik')->insert([
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => ''),
            array('id_batik' => '', 'tag_batik' => '')
        ]);
    }
}
