<?php

namespace App\Http\Controllers;

use App\Batik;
use App\TagBatik;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

    	return view('index',[
    		'title' => 'Welcome Batique'
    	]);
    }

    public function rincian_informasi($id){
        $batik = Batik::where('id','=',$id)->first();
        if(is_null($batik)){
          abort(404);
        }
        $tag_batiks = TagBatik::all();
        return view('rincian_info',[
            'title' => $batik->nama_batik,
            'data' => $batik,
            'tag_batiks' => $tag_batiks
        ]);
    }


}
