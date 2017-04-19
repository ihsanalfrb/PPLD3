<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth-admin']);
    }

    public function home(){
        return view('home', [
            'title' => 'Dashboard'
        ]);
    }
}
