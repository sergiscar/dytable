<?php

namespace App\Http\Controllers;

use App\Mysource;
use Illuminate\Http\Request;

class MysourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mysource = Mysource::All();
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
       Mysource::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mysource  $mysource
     * @return \Illuminate\Http\Response
     */
    public function show(Mysource $mysource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mysource  $mysource
     * @return \Illuminate\Http\Response
     */
    public function edit(Mysource $mysource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mysource  $mysource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mysource $mysource)
    {
        //
        $mysource->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mysource  $mysource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mysource $mysource)
    {
        //
        $mysource->delete();
    }
}
