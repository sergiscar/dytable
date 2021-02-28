<?php

namespace App\Http\Controllers;

use App\Mysubhigh;
use Illuminate\Http\Request;

class MysubhighController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mysubhigh = Mysubhigh::All();
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
        Mysubhigh::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mysubhigh  $mysubhigh
     * @return \Illuminate\Http\Response
     */
    public function show(Mysubhigh $mysubhigh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mysubhigh  $mysubhigh
     * @return \Illuminate\Http\Response
     */
    public function edit(Mysubhigh $mysubhigh)
    {
        //
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mysubhigh  $mysubhigh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mysubhigh $mysubhigh)
    {
        //
        $mysubhigh->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mysubhigh  $mysubhigh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mysubhigh $mysubhigh)
    {
        //
        $mysubhigh->delete();
    }
}
