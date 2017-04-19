<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $with = ['comment_author'];

    protected $table = 'comments';
    protected $fillable = ['judul_komentar','isi_komentar', 'thread_id'];
    protected $dates = ['delete_at'];

    public function in_thread() {
        return $this->belongsTo('App\Thread', 'thread_id');
    }

    public function comment_author() {
        return $this->belongsTo('App\User','comment_by');
    }
}
