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
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if($request->$type="url"){
            $path = $request->$resource;
            $filename = basename($path);
            $image=Image::make($path);
        }else{
            //param
        }
        // http://stackoverflow.com/questions/31893439/image-validation-in-laravel-5-intervention
        // max 10000kb
        $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' 
            );
        $fileArray = array('image' => $image);
        $validator = Validator::make($fileArray, $rules);
        if ($validator->fails()){
        // todo : tambah notification
             return redirect()->back();
        }
        else
        {
            //Lempar ke API
            $result = postToMachine($image);
            json_encode($result);
        }

    }
}
