<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RincianInfoBatikController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $nilai = 'eksperimen '.$id;
      return view('rincian_info', ['nilai' => $nilai]);
    }




    /* Function that will match batik by its distinct value,
        will return array of batik information
    @param  batikIDs collection of id processed by identifyUserImageResult(implemented later)

    */
    function getBatikInfoFromDB($batikIDs){
        foreach ($batikIDs as $id) {
            $batikInfoRAW = DB::table('batik')->where('id', $id)->first();
            //deprecated
            // $result = $result->merge($batikInfoRAW);
            $result->push($batikInfoRAW);
        }

        if ($result->count() > 0){ // If there is releated batik
            echo Response::json($result);
        }
        else{
            // default : no object is shown as there is no related batik
            // move to another landing page
        }


    }
    /* Function that will receive image/imageURL from pattern recognition machine
    and resolve it to array of id
    */
    function identifyRelatedBatikResult($batikObjects){
        $resolvedIDs;
        // later implementation
        return getBatikInfoFromDB($resolvedIDs);
    }
}
 