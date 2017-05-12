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
       if($request->$type=="url"){
            $path = $request->$resource;
            $filename = basename($path);
            $image=Image::make($path);
        }else if($request->$type="file"){
            //file(filename)
        }else{
            //catch exception
        }
        // http://stackoverflow.com/questions/31893439/image-validation-in-laravel-5-intervention
        // max 10000kb
        if(!is_null($request)){

        $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' 
            );
        $fileArray = array('image' => $image);
        $validator = Validator::make($fileArray, $rules);
            if ($validator->fails()){
            // todo : tambah notification
                 return redirect()->back();
            }
            else{
                //Lempar ke API
                $result = post_to_machine($image);
                json_encode($result);

            }
         }else{

            return 0;
         }

    }

 function post_to_machine($image){
        // //http://php.net/manual/en/function.stream-context-create.php#111032
        // $data = array ('image' => '$image');
        // $data = http_build_query($data);

        // $context_options = array (
        //         'http' => array (
        //             'method' => 'POST',
        //             'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
        //                 . "Content-Length: " . strlen($data) . "\r\n",
        //             'content' => $data
        //             )
        //         );

        // $context = context_create_stream($context_options)
        // $fp = fopen('https://api.batique/identify.php', 'r', false, urlencode($context));
        // if (!$fopen) { /* Handle error */ } fclose($fp);
        $data = array ('image' => '$image');
        $data = http_build_query($data);
        $client = new \GuzzleHttp\Client();
        $APIurl="";
        $res = $client->request('POST', $APIurl, [
                    'multipart' => [
                    [
                        'image'=>$image
                    ]
                ]
            ]);
        asjson_decode($res);
    }

    
    function augment_batik_info($batikDump){
        $batikObject=
        foreach ($batikIDs as $id) {
           $batikInfoRAW = DB::table('batik')->where('id', $id)->first();
           //deprecated
           // $result = $result->merge($batikInfoRAW);
           $result->push($batikInfoRAW);
       }

        
    }
