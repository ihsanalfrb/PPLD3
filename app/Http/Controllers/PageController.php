<?php

namespace App\Http\Controllers;

use App\Batik;
use App\TagBatik;
use App\Thread;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $user = Auth::user();
        $tag_batiks = TagBatik::all();
    	return view('index',[
    	    'user' => $user,
    		'title' => 'Welcome Batique',
            'tag_batiks' => $tag_batiks
      ]);
    }

    public function show_tag($id)    {
        $user = Auth::user();
        $tag_batik = TagBatik::where('id','=',$id)->first();
      if(is_null($tag_batik)){
        abort(404);
      }
      $batiks = $tag_batik->batiks()->get();

      return view('show_tag', [
          'user' => $user,
        'judulKategori' => $tag_batik->tag_batik,
        'batiks' => $batiks,
        'tag_batiks' => TagBatik::all()
      ]);
    }

    public function categories()
    {
        $user = Auth::user();
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
          'user' => $user,
          'asal_daerahs' => $asal_daerahs,
          'clusters' => $clusters
      ]);
    }

    public function rincian_informasi($id){
        $user = Auth::user();
        $batik = Batik::where('id','=',$id)->first();
        if(is_null($batik)){
          abort(404);
        }
        $tag_batiks = TagBatik::all();
        return view('rincian_info',[
            'user' => $user,
            'title' => $batik->nama_batik,
            'data' => $batik,
            'tag_batiks' => $tag_batiks
        ]);
    }

    public function daftar_thread() {
        $user = Auth::user();
        $threads = Thread::orderBy('id', 'DESC')->paginate(4);

        return view('daftar_thread',[
            'user' => $user,
            'title' => 'Forums',
            'threads' => $threads
        ]);
    }
//    public function daftar_batik_filter($cluster, $asal_daerah, $tag) {
//        $batik = Batik::all();
//
//        $batik = $batik->where('asal_daerah','=',$asal_daerah);
//        $batik = $batik->where('cluster_batik','=',$cluster);
//
//        $tags_id = TagBatik::all()->where('tag_batik','=',$tag)->pluck('id');
//        $batiks_id = DB::table('batik_tag_batik')->where('tag_batik_id',$tags_id)->value('batik_id');
//        $batik = $batik->whereIn('id',$batiks_id,true)->all();
//
//        $sum = $batik->count();
//        return view('daftar_batik',[
//            'title' => 'Batiks',
//            'data' => $batik,
//            'sum' => $sum
//        ]);
//    }

    public function daftar_batik_cluster($cluster) {
        $user = Auth::user();
        $batik = Batik::where('cluster_batik','=',$cluster)->paginate(16);
        $sum = $batik->count();
        return view('daftar_batik',[
            'user' => $user,
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Batik dengan pola ' . $cluster
        ]);
    }

    public function daftar_batik_uncategorized(){
        $user = Auth::user();
        $batik = Batik::where('cluster_batik','=',"")->paginate(16);
      $sum = $batik->count();
      return view('daftar_batik',[
          'user' => $user,
          'title' => 'Batiks',
          'data' => $batik,
          'sum' => $sum,
          'header' => 'Batik dengan pola yang belum dikategorikan'
      ]);
    }

    public function daftar_batik_daerah($asal_daerah) {
        $user = Auth::user();
        $batik = Batik::where('asal_daerah','=',$asal_daerah)->paginate(16);
        $sum = $batik->count();
        return view('daftar_batik',[
            'user' => $user,
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Batik yang berasal dari ' . $asal_daerah
        ]);
    }

    public function daftar_batik_tag($tag) {
        $user = Auth::user();
        $batik = Batik::all();
        $tags_id = TagBatik::all()->where('tag_batik','=',$tag)->pluck('id');
        $batiks_id = DB::table('batik_tag_batik')->where('tag_batik_id',$tags_id)->value('batik_id');
        $batik = $batik->whereIn('id',$batiks_id,true)->all();
        $sum = $batik->count();
        return view('daftar_batik',[
            'user' => $user,
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum
        ]);
    }

    public function daftar_batik_all() {
        $user = Auth::user();
        $batik = Batik::paginate(16);
        $sum = count($batik);
        return view('daftar_batik',[
            'user' => $user,
            'title' => 'Batiks',
            'data' => $batik,
            'sum' => $sum,
            'header' => 'Semua Batik'
        ]);
    }

    public function search_batik($keywords = null) {
//        $keywords = $request->input('keywords');
        $user = Auth::user();
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
            'user' => $user,
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

    public function show_profile(){
        $user = Auth::user();
        if(is_null($user)){
            abort(404);
        } else {
            return view('show_profile', [
                'title' => 'User Profile',
                'user' => $user
            ]);
        }
    }

    public function edit_profile(){
        $user = Auth::user();
        if(is_null($user)){
            abort(404);
        } else {
            return view('edit_profile', [
                'title' => 'Edit Information',
                'user' => $user
            ]);
        }
    }

}
