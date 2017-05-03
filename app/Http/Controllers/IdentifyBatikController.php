<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IdentifyBatik;

class IdentifyBatikController extends Controller
{
	 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function IdentifyByUrl($url){
  		// $path = 'https://i.stack.imgur.com/koFpQ.png';
		// $filename = basename($path);

		// Image::make($path)->save(public_path('images/' . $filename));


        return 0;

    }

}
