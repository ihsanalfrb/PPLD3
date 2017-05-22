<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostThreadRequest;
use App\Thread;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth-admin', ['only' => ['store', 'destroy']]);
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
        $curruser = Auth::user();
        if(!is_null($curruser)){
            $pass = null;
            $edituser = User::where('id', '=', $id)->first();
            $emails = User::where('id', '<>', $id)->groupBy('email')->pluck('email')->all();
            if (is_null($request->input('new_password'))) {
                $pass = $request->input('confirm_changes');
            } else {
                $pass = $request->input('old_password');
            }
            if (Hash::check($pass, $curruser['password'])) {
                $edituser->name = $request->input('name');
                if(in_array($request->input('email'), $emails)) {
                    Session::flash('email_already_used', 'Email already used, please use another email');
                    return redirect()->back();
                }
                $edituser->email = $request->input('email');
                $edituser->birthday = $request->input('birthday');
                $edituser->gender = $request->input('gender');
                $edituser->bio = $request->input('bio');
                $edituser->telephone = $request->input('telephone');
                $edituser->address = $request->input('address');
                if (!is_null($request->input('new_password'))) {
                    $edituser->password = bcrypt($request->input('new_password'));
                }
                $edituser->save();
            } else {
                Session::flash('password_not_match', 'You\'ve submit wrong password');
                return redirect()->back();
            }

            return view('show_profile', [
                'title' => 'User Profile',
                'user' => $edituser
            ]);
        } else {
            return abort(401);
        }
    }

}
