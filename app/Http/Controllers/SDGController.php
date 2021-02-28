<?php

namespace App\Http\Controllers;

use App\SDG;
use Illuminate\Http\Request;

class SDGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sdgs = SDG::All();
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
        SDG::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SDG  $sDG
     * @return \Illuminate\Http\Response
     */
    public function show(SDG $sDG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SDG  $sDG
     * @return \Illuminate\Http\Response
     */
    public function edit(SDG $sDG)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SDG  $sDG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SDG $sDG)
    {
        //
        $sDG->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SDG  $sDG
     * @return \Illuminate\Http\Response
     */
    public function destroy(SDG $sDG)
    {
        
        $sDG->delete();
    }
}
