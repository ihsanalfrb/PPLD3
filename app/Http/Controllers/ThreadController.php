<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostThreadRequest;
use Illuminate\Http\Request;
use App\Thread;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
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
        } else {
            $thread->views = $thread->views + 1;
            $thread->save();
            return view('show_thread', [
                'title' => $thread->nama_thread,
                'thread' => $thread,
                'user' => Auth::user()
            ]);
        }
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
      $destroyTarget=Thread::where('id', $id)->first();
      //Soft Delete
      if(is_null(Auth::user()) or !Auth::user()->is_admin){
          abort(401);
      } elseif(is_null($destroyTarget)){
          abort(404);
      } else {
          $destroyTarget->delete();
          return redirect()->back();
      }
    }
}
