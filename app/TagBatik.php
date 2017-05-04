<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagBatik extends Model
{
	use SoftDeletes;

    protected $table = 'tag_batik';
    protected $fillable = ['tag_batik'];
    protected $dates = ['delete_at'];


    public function batiks(){
    	return $this->belongsToMany('App\Batik','batik_tag_batik','tag_batik_id','batik_id');
    }


}
