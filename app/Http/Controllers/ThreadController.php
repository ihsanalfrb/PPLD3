<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostThreadRequest;
use App\TagBatik;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostThreadRequest $request)
    {
        $thread = new Thread($request->all());
        $user = Auth::user();
        if(is_null($user)){
            return abort(401);
        } else {
            $saved = $user->create_thread()->save($thread);
            return redirect()->back();
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
        $tag_batiks = TagBatik::all();
        if(is_null($thread)){
            return abort(404);
        } else {
            $thread->views = $thread->views + 1;
            $thread->save();
            return view('show_thread', [
                'title' => $thread->nama_thread,
                'thread' => $thread,
                'tag_batiks' => $tag_batiks,
                'user' => Auth::user()
            ]);
        }
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
          return abort(401);
      } elseif(is_null($destroyTarget)){
          return abort(404);
      } else {
          $destroyTarget->delete();
          return redirect()->back();
      }
    }
}
