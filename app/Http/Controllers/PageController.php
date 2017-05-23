<?php

namespace App\Http\Controllers;

use App\Batik;
use App\TagBatik;
use App\Thread;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
      $user = Auth::user();
      $batiks = Batik::orderBy('views','desc')->limit(3)->get();
      $tag_batiks = TagBatik::all();

      return view('index',[
    		'title' => 'Welcome Batique',
        'tag_batiks' => $tag_batiks,
        'batiks' => $batiks,
        'user' => $user,
        'errors' => array()
      ]);
    }

    public function show_tag($id)    {
        $user = Auth::user();
        $tag_batik = TagBatik::where('id','=',$id)->first();

      if(is_null($tag_batik)){
        return abort(404);
      } else {
          $batiks = $tag_batik->batiks()->get();

          return view('show_tag', [
              'user' => $user,
              'judulKategori' => $tag_batik->tag_batik,
              'batiks' => $batiks,
              'tag_batiks' => TagBatik::all()
          ]);
      }
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
        if(!is_null($batik)){
          $batik->views++;
          $batik->save();
        }
        if(is_null($batik)){
          return abort(404);
        } else {
            $tag_batiks = TagBatik::all();
            return view('rincian_info', [
                'user' => $user,
                'title' => $batik->nama_batik,
                'data' => $batik,
                'tag_batiks' => $tag_batiks
            ]);
        }
    }

    public function daftar_thread() {
        $user = Auth::user();
        $threads = Thread::orderBy('id', 'DESC')->paginate(4);
        $tag_batiks = TagBatik::all();

        return view('daftar_thread',[
            'user' => $user,
            'title' => 'Forums',
            'threads' => $threads,
            'tag_batiks' => $tag_batiks
        ]);
    }


    public function daftar_batik_cluster($cluster) {
        $user = Auth::user();
        if (is_null(Batik::where('cluster_batik','=',$cluster)->first())) {
            return abort('404');
        } else {
            $batik = Batik::where('cluster_batik', '=', $cluster)->paginate(16);
            $sum = $batik->count();
            return view('daftar_batik', [
                'user' => $user,
                'title' => 'Batiks',
                'data' => $batik,
                'sum' => $sum,
                'header' => 'Batik dengan pola ' . $cluster
            ]);
        }
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
        if (is_null(Batik::where('asal_daerah','=',$asal_daerah)->first())) {
            return abort('404');
        } else {
            $batik = Batik::where('asal_daerah', '=', $asal_daerah)->paginate(16);
            $sum = $batik->count();
            return view('daftar_batik', [
                'user' => $user,
                'title' => 'Batiks',
                'data' => $batik,
                'sum' => $sum,
                'header' => 'Batik yang berasal dari ' . $asal_daerah
            ]);
        }
    }

    public function daftar_batik_tag($tag) {
        $user = Auth::user();
        if (is_null(TagBatik::where('tag_batik','=',$tag)->first())) {
            return abort('404');
        } else {
            $tags_id = TagBatik::where('tag_batik', '=', $tag)->pluck('id')->all();
            $batiks_id = DB::table('batik_tag_batik')->where('tag_batik_id', '=', $tags_id)->pluck('batik_id')->all();
            $batik = Batik::whereIn('id', $batiks_id)->paginate(16);
            $sum = count($batik);
            return view('daftar_batik', [
                'user' => $user,
                'title' => 'Batiks',
                'data' => $batik,
                'sum' => $sum,
                'header' => 'Batik yang memiliki tag ' . $tag
            ]);
        }
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
            $batiks_sum = 0;
        } else {
            $batiks = Batik::whereRaw('lower(nama_batik) like ?', array('%'.strtolower($keywords).'%'))
                ->orwhereRaw('lower(sejarah_batik) like ?', array('%'.strtolower($keywords).'%'))
                ->orWhereRaw('lower(makna_batik) like ?', array('%'.strtolower($keywords).'%'))
                ->orWhereRaw('lower(cluster_batik) like ?', array('%'.strtolower($keywords).'%'))
                ->orWhereRaw('lower(asal_daerah) like ?', array('%'.strtolower($keywords).'%'))->paginate(10);
            $batiks_sum = $batiks->count();
        }
        $tag_batiks = TagBatik::all();
        return view('search_batik',[
            'user' => $user,
            'title' => 'Pencarian Batik',
            'batiks' => $batiks,
            'tag_batiks' => $tag_batiks,
            'batiks_sum' => $batiks_sum,
            'keywords' => $keywords,
            'header' => 'Hasil Pencarian '.$keywords
        ]);
    }
    public function show_profile(){
        $user = Auth::user();
        if(is_null($user)){
            return abort(404);
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
            return abort(404);
        } else {
            return view('edit_profile', [
                'title' => 'Edit Information',
                'user' => $user,

            ]);
        }
    }

    public function identify_batik(){
      $user = Auth::user();

      $tag_batiks = TagBatik::all();
        return view('index',[
            'title' => 'Welcome Batique',
            'tag_batiks' => $tag_batiks,
            'user' => $user,
            'errors' => array()
      ]);
    }
}
