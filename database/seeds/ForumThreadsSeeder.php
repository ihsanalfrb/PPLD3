<?php

use App\Thread;
use Illuminate\Database\Seeder;

class ForumThreadsSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('forum_threads')->delete();
        $this->create_thread_model('Parang vs Kawung', 'admin', '10', '2');
        $this->create_thread_model('Asal mula Batik', 'admin', '11', '2');
        $this->create_thread_model('Batik Modern atau Keraton?', 'admin', '3', '2');
        $this->create_thread_model('Cara merawat kain batik', 'default1', '2', '2');
        $this->create_thread_model('Cara membuat batik tulis', 'default1', '8', '2');
    }

    public function create_thread_model($namathread, $createdby, $views, $replies) {
        $faker = Faker\Factory::create();
        $thread = new Thread();
        $thread->nama_thread = $namathread;
        $thread->created_by = $createdby;
        $thread->views = $views;
        $thread->replies = $replies;
        $thread->content = $faker->paragraph;
        $thread->save();

//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('threads')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
