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
            if (is_null($request->input('new_password'))) {
                $pass = null;
                $edituser = User::where('id', '=', $id)->first();
                $emails = User::where('id', '<>', $id)->groupBy('email')->pluck('email')->all();

                $edituser->name = $request->input('name');
                $edituser->email = $request->input('email');
                $edituser->birthday = $request->input('birthday');
                $edituser->gender = $request->input('gender');
                $edituser->bio = $request->input('bio');
                $edituser->telephone = $request->input('telephone');
                $edituser->address = $request->input('address');

                $pass = $request->input('confirm_changes');
                if(is_null($pass)){
                  Session::flash('password_not_match', 'Please confirm your password');
                  return redirect()->back()->with('edituser', $edituser);
                }
                if(in_array($request->input('email'), $emails)) {
                    Session::flash('email_already_used', 'Email already used, please use another email');
                    return redirect()->back()->with('edituser', $edituser);
                }

                if (Hash::check($pass, $curruser['password'])) {
                    $edituser->save();
                }else {
                  Session::flash('password_not_match', 'You\'ve submitted wrong password');
                  return redirect()->back()->with('edituser', $edituser);
                }
            } else {
                if($request->input('new_password') !== $request->input('confirm_password')){
                  Session::flash('wrong_new_password', 'Your password confirmation didn\'t match each other');
                  return redirect()->back()->with('edituser');
                }
                $edituser = User::where('id', '=', $id)->first();
                $edituser->password = bcrypt($request->input('new_password'));
                $pass = $request->input('old_password');

                if (Hash::check($pass, $curruser['password'])) {
                    $edituser->save();
                    Session::flash('success_change_password', 'You\'ve succesfully change your password');
                }else {
                    Session::flash('wrong_new_password', 'You\'ve submitted wrong old password');

                }
                return redirect()->back()->with('edituser', $edituser);
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
