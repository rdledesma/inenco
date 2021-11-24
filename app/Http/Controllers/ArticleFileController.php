<?php

namespace App\Http\Controllers;

use App\ArticleFile;
use Illuminate\Http\Request;
use Storage;
class ArticleFileController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleFile  $articleFile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articleFile = ArticleFile::where('id',$id)->first();
        return Storage::download('articles/'.$articleFile->file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleFile  $articleFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleFile $articleFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleFile  $articleFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleFile $articleFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleFile  $articleFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleFile $articleFile)
    {
        //
    }
}
