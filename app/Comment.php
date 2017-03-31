<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $table = 'comments';
    protected $fillable = ['judul_komentar','isi_komentar','comment_by','thread_id', 'created_at'];
    protected $dates = ['delete_at'];

    public function in_thread() {
        return $this->belongsTo('App\Thread', 'thread_id');
    }

    public function comment_by() {
        return $this->belongsTo('App\UserAccounts','comment_by');
    }
}
