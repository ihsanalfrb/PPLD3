<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
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

    public function create_comment_model($judulkomentar, $isikomentar, $commentby, $threadid) {

        $comment = new Comment();
        $comment->judul_komentar = $judulkomentar;
        $comment->isi_komentar = $isikomentar;
        $comment->comment_by = $commentby;
        $comment->thread_id = $threadid;
        $comment->save();

//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('comments')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
