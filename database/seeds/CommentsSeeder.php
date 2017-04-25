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
        DB::table('comments')->delete();
        $this->create_comment_model('Try Create thread #1', 'This is thread filler',1, 1 );
        $this->create_comment_model('Make thread #2', 'SpamGate',1, 2 );
        $this->create_comment_model('Summon #3', 'This_is_fine.jpg',1, 3 );
        $this->create_comment_model('Is it even #4 real', 'Reality check',1, 4 );
        $this->create_comment_model('#5: are we even?', 'Can not stop this',1, 5 );
        $this->create_comment_model('NO!', 'I am the thread filler',1, 1 );
        $this->create_comment_model(':|', 'LoL, are you even trying?',1, 2 );
        $this->create_comment_model('Are you serious?', 'Nope.gif',1, 3 );
        $this->create_comment_model('No Joke', 'yeah',1, 4 );
        $this->create_comment_model('The truth?', 'Yes i can',1, 5 );
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
        $comment->comment_by = \App\User::where('id', '=', $commentby)->first()->id;
        $comment->thread_id = $threadid;
        $comment->save();

//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('comments')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
