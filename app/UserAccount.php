<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use SoftDeletes;

    protected $table = 'user_accounts';
    protected $fillable = ['email','username','password','nama', 'tanggal_lahir', 'jenis_kelamin', 'created_at'];
    protected $dates = ['delete_at'];
}
