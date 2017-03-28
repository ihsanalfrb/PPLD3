<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

    	return view('index',[
    		'title' => 'Welcome Batique'
    	]);
    }
    public function rincian_informasi(){

    	return view('rincian_informasi',[
    		'title' => 'Rincian Informasi'
    	]);
    }
}
