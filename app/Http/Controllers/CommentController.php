<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCommentRequest;
use App\Thread;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['store', 'destroy']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCommentRequest $request)
    {
        $user = Auth::user();
        if(!is_null($user)){
            $comment = new Comment($request->all());
            $saved = $user->comments()->save($comment);
            Session::flash('comment_success', 'Komentar berhasil ditambahkan');
            return redirect()->back();
        } else {
            return abort(401);
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
        $destroyTarget=Comment::where('id', $id)->first();
        if(is_null(Auth::user())){
            return abort(401);
        } else {
            if($destroyTarget->comment_author->id==Auth::user()->id){

                $destroyTarget->delete();
                Session::flash('comment_success', 'Komentar berhasil dihapus');
                return redirect()->back();
            }else{
                return response()->view('error_403', [], 403);
            }
        }

    }
}
