<?php

namespace App\Http\Controllers;

use App\Integrant;
use Illuminate\Http\Request;

class IntegrantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrants = Integrant::where('state','active')->orderBy('name')->get();
        return view('integrants.index', compact('integrants'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('integrants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Integrant  $integrant
     * @return \Illuminate\Http\Response
     */
    public function show(Integrant $integrant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Integrant  $integrant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $integrant = Integrant::where('id',$id)->first();

        return view('integrants.edit', compact('integrant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Integrant  $integrant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required',
            'title'    => 'required',
            'email'    => 'required',
            'description' => 'required'
        ]);


        $integrant = Integrant::where('id',$id)->first();

        $integrant['email'] = $request['email'];
        $integrant['name'] = $request['name'];
        $integrant['title'] = $request['title'];
        $integrant['description'] = $request['description'];


        $image = $request->file('url_photo');
        if($image){
            $response = cloudinary()->upload($image_1->getRealPath(),['invalidate'=>true]);
            $integrant['url_photo'] = $response->getPublicId();
            $integrant['photo_id'] = $response->getSecurePath();
        }


        if($integrant->save()){
            return redirect()->route('integrant.index')->with('alert', 'Integrante actualizado con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Integrant  $integrant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $integrant  = Integrant::where('id',$id)->first();
        $integrant['state'] = 'inactive';
        $integrant->update();

        return redirect()->route('integrant.index');
    }
}
