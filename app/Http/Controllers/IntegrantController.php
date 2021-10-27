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
    public function edit(Integrant $integrant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Integrant  $integrant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Integrant $integrant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Integrant  $integrant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integrant $integrant)
    {
        //
    }
}
