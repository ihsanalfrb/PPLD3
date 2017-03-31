<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    use SoftDeletes;

    protected $table = 'comments';
    protected $fillable = ['judul_komentar','isi_komentar','comment_by','thread_id', 'created_at'];
    protected $dates = ['delete_at'];
}
