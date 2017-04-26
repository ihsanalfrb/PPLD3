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
        if (count($asal_daerahs[$batik->asal_daerah]) < 3)
          array_push($asal_daerahs[$batik->asal_daerah], $batik);

        if(is_null($batik->cluster_batik) || $batik->cluster_batik == '' ){
          if(!array_key_exists('uncategorized', $clusters)){
            $clusters['uncategorized'] = [];
          }
          if (count($clusters['uncategorized']) < 3)
            array_push($clusters['uncategorized'], $batik);
        }else {
          if(!array_key_exists($batik->cluster_batik, $clusters)){
            $clusters[$batik->cluster_batik] = [];
          }
          if (count($clusters[$batik->cluster_batik]) < 3)
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

    public function search_batik(Request $request) {
        $keywords = $request->input('keywords');
        $batiks = Batik::where('upper(nama_batik)', 'like', '%upper('.$keywords.')%')
            ->orWhere('upper(sejarah_batik)', 'like', '%upper('.$keywords.')%')
            ->orWhere('upper(makna_batik)', 'like', '%upper('.$keywords.')%')->paginate(10);

        $categories = Batik::where('upper(cluster_batik)', 'like', '%upper('.$keywords.')%')->all();
        $cities = Batik::where('upper(asal_daerah)', 'like', '%upper('.$keywords.')%')->all();
        $tags = TagBatik::where('upper(tag_batik)', 'like', '%upper('.$keywords.')%')->all();

        $sum = $batiks->count();
        return view('daftar_batik',[
            'title' => 'Hasil Pencarian "'.$keywords.'"' ,
            'batiks' => $batiks,
            'categories' => $categories,
            'cities' => $cities,
            'tags' => $tags,
            'sum' => $sum
        ]);
    }
}
