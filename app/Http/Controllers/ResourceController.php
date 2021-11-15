<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resource::where('state','active')->get();
        return view('resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create');
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
            'name'     => 'required',
            'file'    => 'required',
        ]);
        $resource = new Resource();
        $resource['name'] = $request['name'];

        if($request->file){

            $fileName = $request->file->getClientOriginalName();
            $request->file->storeAs('resources', $fileName);
            $resource['file'] = $request->file->getClientOriginalName();
            $resource->save();
        }




        return redirect()->route('resource.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = Resource::where('id',$id)->first();

        return Storage::download('resources/'.$resource->file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
    }

    public function search(Request $request)
    {
        $name = $request['name'];

        $resources = Resource::where('state','active')->where('name', 'LIKE', '%'.$name.'%')->orderBy('name')->get();

        return view('recursos', compact('resources'));


    }

}
