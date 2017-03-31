<?php

namespace App\Http\Controllers;

use App\Batik;
use App\TagBatik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
      $tag_batiks = TagBatik::all();
    	return view('index',[
    		'title' => 'Welcome Batique',
        'tag_batiks' => $tag_batiks
      ]);
    }

    public function show_tag($id)
    {
      $tag_batik = TagBatik::where('id','=',$id)->first();
      if(is_null($tag_batik)){
        abort(404);
      }
      $batiks = $tag_batik->batiks()->get();

      return view('show_tag', [
        'judulKategori' => $tag_batik->tag_batik,
        'batiks' => $batiks,
        'tag_batiks' => TagBatik::all()
      ]);
    }

    public function categories()
    {
      $batiks = Batik::all();
      $asal_daerahs = [];
      $clusters = [];

      foreach($batiks as $batik){
        if(!array_key_exists($batik->asal_daerah, $asal_daerahs)){
          $asal_daerahs[$batik->asal_daerah] = [];
        }
        array_push($asal_daerahs[$batik->asal_daerah], $batik);

        if(is_null($batik->cluster_batik) || $batik->cluster_batik == '' ){
          if(!array_key_exists('uncategorized', $clusters)){
            $clusters['uncategorized'] = [];
          }
          array_push($clusters['uncategorized'], $batik);
        }else {
          if(!array_key_exists($batik->cluster_batik, $clusters)){
            $clusters[$batik->cluster_batik] = [];
          }
          array_push($clusters[$batik->cluster_batik], $batik);
        }
      }
      return view('categories',[
          'asal_daerahs' => $asal_daerahs,
          'clusters' => $clusters
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
