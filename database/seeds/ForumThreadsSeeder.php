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
    }

    public function create_thread_model($namathread, $createdby, $views, $replies) {
        $thread = new Thread();
        $thread->nama_thread = $namathread;
        $thread->created_by = $createdby;
        $thread->views = $views;
        $thread->replies = $replies;
        $thread->save();

//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('threads')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
