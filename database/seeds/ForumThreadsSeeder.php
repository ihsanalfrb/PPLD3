<?php

use App\Thread;
use App\UserAccount;
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
        $this->create_thread_model('Parang vs Kawung', '10', '0');
        $this->create_thread_model('Asal mula Batik', '11', '0');
        $this->create_thread_model('Batik Modern atau Keraton?', '3', '0');
        $this->create_thread_model('Cara merawat kain batik', '2', '0');
        $this->create_thread_model('Cara membuat batik tulis', '8', '0');
    }


    public function create_thread_model($namathread, $views, $replies) {

        $thread = new Thread();
        $thread->nama_thread = $namathread;
        $thread->created_by = \App\User::where('is_admin', '=', true)->first()->id;
        $thread->views = $views;
        $thread->replies = $replies;
        $thread->content = 'Mari berdiskusi mengenai ' . $namathread;
        $thread->save();

//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('threads')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
