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

    public function show_category($id)
    {
      $tag_batik = TagBatik::where('id','=',$id)->first();
      if(is_null($tag_batik)){
        abort(404);
      }
      $batiks = $tag_batik->batiks()->get();

      return view('daftar_kategori', [
        'judulKategori' => $tag_batik->tag_batik,
        'batiks' => $batiks,
        'tag_batiks' => TagBatik::all()
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

    public function daftar_batik($filter) {
        $asal_daerah = $filter['asal_daerah'];
        $tag = $filter['tag'];
        $cluster = $filter['cluster'];
        $batik = Batik::all();
        if (is_null($asal_daerah)) {

        } else {
            $batik = $batik->where('asal_daerah','=',$asal_daerah);
        }

        if (is_null($cluster)) {

        } else {
            $batik = $batik->where('cluster_batik','=',$cluster);
        }

        if (is_null($tag)) {

        } else {
            $tags_id = TagBatik::all()->where('tag_batik','=',$tag)->pluck('id');
            $batiks_id = DB::table('batik_tag_batik')->where('tag_batik_id',$tags_id)->value('batik_id');
            $batik = $batik->whereIn('id',$batiks_id,true)->;
        }

        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik
        ]);
    }
}
