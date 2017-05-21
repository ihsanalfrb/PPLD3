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
        $this->create_comment_model('Make thread #2', 'SpamGate',2, 2 );
        $this->create_comment_model('Summon #3', 'This_is_fine.jpg',3, 3 );
        $this->create_comment_model('Is it even #4 real', 'Reality check',1, 4 );
        $this->create_comment_model('#5: are we even?', 'Can not stop this',2, 5 );
        $this->create_comment_model('NO!', 'I am the thread filler',3, 1 );
        $this->create_comment_model(':|', 'LoL, are you even trying?',1, 2 );
        $this->create_comment_model('Are you serious?', 'Nope.gif',2, 3 );
        $this->create_comment_model('No Joke', 'yeah',2, 4 );
        $this->create_comment_model('The truth?', 'Yes i can',3, 5 );
    }

    public function create_comment_model($judulkomentar, $isikomentar, $commentby, $threadid) {

        $comment = new Comment();
        $comment->judul_komentar = $judulkomentar;
        $comment->isi_komentar = $isikomentar;
        $comment->comment_by = $commentby;
        $comment->thread_id = $threadid;
        $comment->save();

        $thread = \App\Thread::where('id', '=', $threadid)->first();
        $thread->replies = $thread->replies + 1;
        $thread->save();
//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('comments')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
