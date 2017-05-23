<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batik;

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
        $path =  $request->input('link');
       if($path !== ""){
        //    $filename = basename($path);
        //     $image=Image::make($path);
        // $image=Image::make($path);
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET', $request->input('link'));
            if($res->getStatusCode()!="200"){
                // url not valid
            }else{
                $image=$res->getBody();

               // dd($image);
            }
            $type=$res->getHeaderLine('content-type');

            // throws unsuported image
            if($type!="image/jpeg" and $type!="image/gif" and $type!="image/png" and $type!="image/jpg" and $type!="image/tiff" and $type!="image/svg"){
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
        return$this->post_to_machine($image, $type);
            
    }

  function post_to_machine($image, $type){
        $data = array ('image' => '$image');
        $data = http_build_query($data);
        $client = new \GuzzleHttp\Client();
        //$client->getCurlOptions()->set(CURLOPT_SSL_VERIFYHOST, false);
        //$client->getCurlOptions()->set(CURLOPT_SSL_VERIFYPEER, false);
        /*
        $APIurl=action('PageController@show_tag',$tag->id);
        $res = $client->request('POST', $APIurl, [
                    'multipart' => [
                    [
                        'image'=>$image
                    ]
                ]
            ]);*/
        //$this->augment_batik_info(json_decode($res)->$images);
        
        
        $images = array();
        array_push($images, "PRG052-Parang Sisik.png");
        array_push($images, "PRG053-Parang Srimpi.png");
        return $this->augment_batik_info($images, $image, $type);
        
    }
    
    function augment_batik_info($batikDump, $original_image, $type){

        $result = array();

        foreach ($batikDump as $url) {
           $batikAug = Batik::where('gambar_pola_batik', $url)->first();
           array_push($result, $batikAug);
       }
        return view('identify_batik',[
            'title' => 'Identify Batik',
            'batiks' => $result,
            'original_image' => base64_encode($original_image),
            'type' => $type
        ]);
    }  

}