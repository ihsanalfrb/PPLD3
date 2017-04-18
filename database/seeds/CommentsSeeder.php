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
        DB::table('pola_batik')->delete();
        DB::table('batik_pola_batik')->delete();
       $this->create_comment_model('Try Create thread #1', 'This is thread filler','default', 1 );.
       $this->create_comment_model('Make thread #2', 'SpamGate','admin', 2 );
       $this->create_comment_model('Summon #3', 'This_is_fine.jpg','default', 3 );
       $this->create_comment_model('Is it even #4 real', 'Reality check','admin', 4 );
       $this->create_comment_model('#5: are we even?', 'Can not stop this','default', 5 );
       $this->create_comment_model('NO!', 'I am the thread filler','admin', 1 );.
       $this->create_comment_model(':|', 'LoL, are you even trying?','default', 2 );
       $this->create_comment_model('Are you serious?', 'Nope.gif','admin', 3 );
       $this->create_comment_model('No Joke', 'yeah','default', 4 );
       $this->create_comment_model('The truth?', 'Yes i can','admin', 5 );
    }
    /**
     * Method helper to insert dummy comment.
     * param $judulkomentar string
     * param $isikomentar string
     * param $commentby string
     * param $threadid string 
     * @return void
     */
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
