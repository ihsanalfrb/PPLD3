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
        $this->middleware('auth-admin', ['only' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(PostThreadRequest $request)
    {
        $thread = new Thread($request->all());
        $saved = Auth::user()->create_thread()->save($thread);
        if(!is_null($saved)){
            return redirect()->back();
        } else {
            abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::where('id', '=', $id)->with('comments')->first();
        if(is_null($thread)){
            abort(404);
        }
        $thread->views = $thread->views + 1;
        $thread->save();
        return view('show_thread', [
            'title' => $thread->nama_thread,
            'thread' => $thread,
            'user' => Auth::user()
        ]);
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
        $curruser = Auth::user();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $destroyTarget=Thread::where('id', $id)->first();
      //Soft Delete
      if(is_null(Auth::user()) or !Auth::user()->is_admin){
          abort(401);
      }
      if(is_null($destroyTarget)){
          abort(404);
      }
      $destroyTarget->delete();
      return redirect()->back();

    }
}
