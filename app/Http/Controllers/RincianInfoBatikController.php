<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RincianInfoBatikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rincian_informasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
 