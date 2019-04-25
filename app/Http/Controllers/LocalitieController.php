<?php

namespace App\Http\Controllers;

use App\Localitie;
use Illuminate\Http\Request;

class LocalitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer la liste des localité
        $localities = Localitie::All();
        return view('localitie.index',[
            'localities' => $localities,
            'resource' => 'localitie',
        ]);
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
     * @param  \App\Localitie  $localitie
     * @return \Illuminate\Http\Response
     */
    public function show(Localitie $localitie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Localitie  $localitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Localitie $localitie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Localitie  $localitie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localitie $localitie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Localitie  $localitie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localitie $localitie)
    {
        //
    }
}
