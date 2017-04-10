<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PolaBatik extends Model
{
    use SoftDeletes;

    protected $table = 'pola_batik';
    protected $fillable = ['gambar_pola_batik','matriks_pola_batik'];
    protected $dates = ['delete_at'];


//    public function batik(){
//    	return $this->belongsTo('App\Batik','batik_id');
//    }

}
