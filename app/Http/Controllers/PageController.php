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

    public function daftar_batik_filter($cluster, $asal_daerah, $tag) {
        $batik = Batik::all();

        $batik = $batik->where('asal_daerah','=',$asal_daerah);
        $batik = $batik->where('cluster_batik','=',$cluster);

        $tags_id = TagBatik::all()->where('tag_batik','=',$tag)->pluck('id');
        $batiks_id = DB::table('batik_tag_batik')->where('tag_batik_id',$tags_id)->value('batik_id');
        $batik = $batik->whereIn('id',$batiks_id,true)->all();

        $sum = $batik->count();
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum
        ]);
    }

    public function daftar_batik_cluster($cluster) {
        $batik = Batik::where('cluster_batik','=',$cluster)->paginate(16);
        $sum = $batik->count();
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Batik dengan pola ' . $cluster
        ]);
    }

    public function daftar_batik_uncategorized(){
      $batik = Batik::where('cluster_batik','=',"")->paginate(16);
      $sum = $batik->count();
      return view('daftar_batik',[
          'title' => 'Batiks',
          'data' => $batik,
          'sum' => $sum,
          'header' => 'Batik dengan pola yang belum dikategorikan'
      ]);
    }

    public function daftar_batik_daerah($asal_daerah) {
        $batik = Batik::where('asal_daerah','=',$asal_daerah)->paginate(15);
        $sum = $batik->count();
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Batik yang berasal dari ' . $asal_daerah
        ]);
    }

    public function daftar_batik_tag($tag) {
        $batik = Batik::all();
        $tags_id = TagBatik::all()->where('tag_batik','=',$tag)->pluck('id');
        $batiks_id = DB::table('batik_tag_batik')->where('tag_batik_id',$tags_id)->value('batik_id');
        $batik = $batik->whereIn('id',$batiks_id,true)->all();
        $sum = $batik->count();
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum
        ]);
    }

    public function daftar_batik_all() {
        $batik = Batik::paginate(16);
        $sum = count($batik);
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Semua Batik'
        ]);
    }
}
