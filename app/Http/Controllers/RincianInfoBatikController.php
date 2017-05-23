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

}
 