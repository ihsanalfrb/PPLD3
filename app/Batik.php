<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Batik extends Model
{
	use SoftDeletes;

    protected $table = 'batik';
    protected $fillable = ['nama_batik','makna_batik','sejarah_batik','asal_daerah'];
    protected $dates = ['delete_at'];


    public function pola_batik(){
    	return $this->hasOne('App\PolaBatik');
    }

    public function tag_batik(){
    	return $this->belongsToMany('App\TagBatik','batik_tag_batik','batik_id','tag_batik_id');
    }
}
