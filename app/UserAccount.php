<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccount extends Model
{
    use SoftDeletes;

    protected $table = 'user_accounts';
    protected $fillable = ['email','username','password','first_name', 'last_name', 'tanggal_lahir', 'jenis_kelamin', 'created_at'];
    protected $dates = ['delete_at'];

    public function post_comment() {
        return $this->hasMany('App\Comment', 'comment_by');
    }

    public function create_thread() {
        return $this->belongsToMany('App\Thread', 'created_by');
    }
}
