<?php

namespace App\Http\Controllers;

use App\Batik;
use App\TagBatik;
use App\Thread;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
      $batiks = Batik::orderBy('views','desc')->limit(3)->get();

      $tag_batiks = TagBatik::all();
    	return view('index',[
    		'title' => 'Welcome Batique',
        'tag_batiks' => $tag_batiks,
        'batiks' => $batiks
      ]);
    }

    public function show_tag($id)    {
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
        $batik->views++;
        $batik->save();
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

    public function daftar_thread() {
        $threads = Thread::orderBy('id', 'DESC')->paginate(4);

        return view('daftar_thread',[
            'title' => 'Forums',
            'threads' => $threads,
            'current_user' => Auth::user()
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
        $batik = Batik::where('asal_daerah','=',$asal_daerah)->paginate(16);
        $sum = $batik->count();
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Batik yang berasal dari ' . $asal_daerah
        ]);
    }

    public function daftar_batik_tag($tag) {
        $tag_batik = TagBatik::where('tag_batik','=',$tag)->first();
        if(!is_null($tag_batik)){
          $batik = $tag_batik->batiks()->paginate(16);
        }else{
          $batik = TagBatik::where('tag_batik','=',$tag)->paginate(16);
        }
        $sum = $batik->count();
        return view('daftar_batik',[
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Batik dengan tag ' . $tag
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

    public function search_batik($keywords = null) {
//        $keywords = $request->input('keywords');

        if(is_null($keywords)){
            $batiks = null;
            $categories = null;
            $cities = null;
            $tags = null;
            $batiks_sum = 0;
            $tags_sum = 0;
            $cities_sum = 0;
            $categories_sum = 0;
        } else {
            $batiks = Batik::where('nama_batik', 'ilike', '%'.$keywords.'%')
                ->orWhere('sejarah_batik', 'ilike', '%'.$keywords.'%')
                ->orWhere('makna_batik', 'ilike', '%'.$keywords.'%')->paginate(10);
//            dd($batiks);
            $categories = Batik::where('cluster_batik', 'ilike', '%'.$keywords.'%');
            $cities = Batik::where('asal_daerah', 'ilike', '%'.$keywords.'%');
            $tags = TagBatik::where('tag_batik', 'ilike', '%'.$keywords.'%');
            $batiks_sum = $batiks->count();
            $categories_sum = $categories->count();
            $cities_sum = $cities->count();
            $tags_sum = $tags->count();
        }
        $tag_batiks = TagBatik::all();
        return view('search_batik',[
            'title' => 'Pencarian Batik',
            'batiks' => $batiks,
            'categories' => $categories,
            'cities' => $cities,
            'tags' => $tags,
            'tag_batiks' => $tag_batiks,
            'batiks_sum' => $batiks_sum,
            'categories_sum' => $categories_sum,
            'cities_sum' => $cities_sum,
            'tags_sum' => $tags_sum,
            'keywords' => $keywords,
            'header' => 'Hasil Pencarian '.$keywords
        ]);
    }
}
