<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $dates = ['delete_at'];  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
         

    public function comments(){
        return $this->hasMany('App\Comment', 'comment_by');
    }
     public function create_thread() {
        return $this->hasMany('App\Thread', 'created_by');
    }
}
