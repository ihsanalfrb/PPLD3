<?php

namespace App\Http\Controllers;

use App\TagBatik;
use Illuminate\Http\Request;

class TagBatikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tag)
    {
        //
        $tagbatik = new TagBatik();

        $tagbatik->tag_batik = $tag;
        $tagbatik->save() ;
    }

    /**
     * Store a newly created resource in storage.
     ****
     * Store all variable from request to add another batik's tag
     * [Notice] WIll store all variable that has been defined by /app/TagBatik.php
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_tag_batik = TagBatik::create($request->all());
    }
    /**
     * Display the specified resource.
     ****
     * Show a row of batik's tag based on id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $selected = TagBatik::where('id', $id)->first();
         echo Response::json($selected);
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
     ****
     * [Notice] only tag_batik field that will be changed.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateTarget=TagBatik::where('id', $id)->first();
        $user->update(['tag_batik'=>($request->input("tag_batik")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $destroyTarget=TagBatik::where('id', $id)->first();
       $destroyTarget->delete();
    }
}
