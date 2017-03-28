<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fascades\DB;

class PageController extends Controller
{
    public function index(){

    	return view('index',[
    		'title' => 'Welcome Batique'
    	]);
    }

    public function daftar_kategori()
    {
      $clusters = DB::table('batik')->pluck('cluster');
      $asalDaerahs = DB::table('batik')->pluck('asal_daerah');

      return view('daftar_kategori', [
        'clusters' => $clusters, 'asalDaerahs' => $asalDaerahs
      ]);
    }
}
