<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    //
    use SoftDeletes;

    protected $table = 'threads';
    protected $fillable = ['nama_thread','created_by','created_at','views', 'replies'];
    protected $dates = ['delete_at'];
}
