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
public function store(PostCommentRequest $request)
    {
       if(!is_null($request->$url)){
            // $path = $request->$resource;
            // $filename = basename($path);
            // $image=Image::make($path);
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET', $request->$url);
            if($res->getStatusCode()!="200"){
                // url not valid
            }else{
                $image=$res->$image;
                //dd
            }
            $type=$res->getHeaderLine('content-type');
            // throws unsuported image
            if($type!="image/jpeg"||$type!="image/gif"||$type!="image/png"||$type!="image/jpg"||$type!="image/tiff"){
            //throws unsuporrted file type
            }
            //file size more than 100MiB
            if($res->getHeaderLine('content-type')>=100000000){
            //throw file size exceed allowed size
            }
            // validate url upload
        }else if(!is_null($request->$file)){
            //file(filename)
        }else{
            //catch exception
        }
        // http://stackoverflow.com/questions/31893439/image-validation-in-laravel-5-intervention
        // max 10000kb
            //Lempar ke API
            $result = post_to_machine($image);
            json_encode($result);
    }
    function post_to_machine($image){
        //http://php.net/manual/en/function.stream-context-create.php#111032
        $data = array ('image' => '$image');
        $data = http_build_query($datao);

        $context_options = array (
                'http' => array (
                    'method' => 'POST',
                    'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
                        . "Content-Length: " . strlen($data) . "\r\n",
                    'content' => $data
                    )
                );

        $context = context_create_stream($context_options)
        $fp = fopen('https://api.batique/identify.php', 'r', false, $context);
        if ($fp === FALSE) { /* Handle error */ }

        return augment_batik_info($fp);
    }
  

}
