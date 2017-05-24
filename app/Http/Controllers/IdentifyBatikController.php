<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Batik;

use Illuminate\Support\Facades\DB;

class IdentifyBatikController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
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

        if(!is_null($path) and $path !== ""){
            $client = new \GuzzleHttp\Client();
            $res;
            try{
              $res = $client->request('GET', $request->input('link'));
              $image=$res->getBody();
              $type=$res->getHeaderLine('content-type');
            }catch (\Exception $e){
              Session::flash('error', 'An error has occured, are you sure it was a valid url?');
              return redirect('/');
            }
        }else  {

            if(is_null($request['image'])){
              Session::flash('error', 'Please submit an image');
              return redirect('/');
            }
            try{
                $image = file_get_contents($request['image']->getRealPath());
                $type = $request['image']->getMimeType();
            }catch (\Exception $e){
                Session::flash('error', 'An error has occured, your image can not been processed');
                return redirect('/');
            }


        }
        if($type!="image/jpeg" and $type!="image/gif" and $type!="image/png" and $type!="image/jpg" and $type!="image/tiff" and $type!="image/svg" and $type !="image/svg+xml"){

          Session::flash('error', 'The type of the image is not supported');
          return redirect('/');
        }
        // http://stackoverflow.com/questions/31893439/image-validation-in-laravel-5-intervention
        // max 10000kb

        //Lempar ke API
        return$this->post_to_machine($image, $type);

    }



    function post_to_machine($image, $type){
        /*
        $data = array ('image' => '$image');
        $data = http_build_query($data);
        $client = new \GuzzleHttp\Client();
        $client->getCurlOptions()->set(CURLOPT_SSL_VERIFYHOST, false);
        $client->getCurlOptions()->set(CURLOPT_SSL_VERIFYPEER, false);

        $APIurl=action('IdentifyBatikController@identify');
        $response = $client->request(
            'POST',
            $APIurl,
            [
                'form_params' => [
                    'key1' => 'value1',
                    'key2' => 'value2'
                ]
            ]
        );

        //$this->augment_batik_info(json_decode($res)->$images);
        */

        $result = $this->identify($image);
        return $this->augment_batik_info($result['batiks'], $result['cluster'], $image, $type);
    }

    function identify($image){
        $clusters = DB::table('batik')
                     ->select(DB::raw('distinct cluster_batik'))
                     ->get();
        $idx = rand(1, sizeof($clusters));

        $i = 0;

        foreach ($clusters as $key => $cluster1) {
          $cluster = $cluster1->cluster_batik;

          $i++;
          if($i == $idx){
            break;
          }
        }

        $batiks = Batik::where('cluster_batik', $cluster)->limit(4)->get();
        $result = array();
        $result['cluster']= $cluster;
        $result['batiks']= $batiks;
        return $result;
    }

    function augment_batik_info($batiks, $cluster, $original_image, $type){
        return view('identify_batik',[
            'title' => 'Identify Batik',
            'batiks' => $batiks,
            'cluster' => $cluster,
            'original_image' => base64_encode($original_image),
            'type' => $type
        ]);
    }

}
