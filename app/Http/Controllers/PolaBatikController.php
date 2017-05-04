<?php

namespace App\Http\Controllers;

use App\PolaBatik;
use Illuminate\Http\Request;

class PolaBatikController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($batikid, $gambar, $matriks)
    {
        //
        $polabatik = new PolaBatik();

        $polabatik->batik_id = $batikid;
        $polabatik->gambar_pola_batik = $gambar;
        $polabatik->matriks_pola_batik = $matriks;
        $polabatik->save();
    }

}
