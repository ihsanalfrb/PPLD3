<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    //
    use SoftDeletes;

    protected $table = 'forum_threads';
    protected $fillable = ['nama_thread','created_by','created_at','views', 'replies'];
    protected $dates = ['delete_at'];

    public function comments() {
        return $this->hasMany('App\Comment', 'thread_id');
    }

    public function creator() {
        return $this->belongsTo('App\UserAccount','created_by');
    }
}
