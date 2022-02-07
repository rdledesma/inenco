<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::where('state','active')->orderBy('id','desc')->get();


        return view('publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'description'    => 'required',
            'copete'    => 'required',
            'image_1'    => 'mimes:jpg,jpeg,png',
            'image_2'     => 'mimes:jpg,jpeg,png',
            'image_3'     => 'mimes:jpg,jpeg,png',
        ]);


        $publication = new Publication($request->all());
        $image_1 = $request->file('image_1');
        $image_2 = $request->file('image_2');
        $image_3 = $request->file('image_3');
        if($image_1){
            $response = cloudinary()->upload($image_1->getRealPath(),['invalidate'=>true]);
            $publication['id_image_1'] = $response->getPublicId();
            $publication['image_1'] = $response->getSecurePath();
        }
        if($image_2){
            $response = cloudinary()->upload($image_2->getRealPath(),['invalidate'=>true]);
            $publication['id_image_2'] = $response->getPublicId();
            $publication['image_2'] = $response->getSecurePath();
        }

        if($image_3){
            $response = cloudinary()->upload($image_3->getRealPath(),['invalidate'=>true]);
            $publication['id_image_3'] = $response->getPublicId();
            $publication['image_3'] = $response->getSecurePath();
        }

        $publication['slug'] =  Str::slug($publication->title);

        if($publication->save()){
            return redirect()->route('publication.index')->with('alert', 'Nueva publicación creada con éxito');
        }






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $publication = Publication::where('slug','=', $slug)->firstOrFail();
        return view('publications.show', compact('publication'));
    }


    public function ver($slug)
    {
        $publication = Publication::where('id','=', $slug)->first();
        return view('publication', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
