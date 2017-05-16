<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TagBatik;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user["is_admin"]) {
            return view('home', [
                'user' => $user
            ]);
        } else {
            $tag_batiks = TagBatik::all();
            return view('index',[
                'user' => $user,
                'title' => 'Welcome Batique',
                'tag_batiks' => $tag_batiks
            ]);
        }
    }
}
