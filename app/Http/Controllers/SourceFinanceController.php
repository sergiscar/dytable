<?php

namespace App\Http\Controllers;

use App\SourceFinance;
use Illuminate\Http\Request;

class SourceFinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sdgs = SourceFinance::All();
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
     * @param  \App\SourceFinance  $sourceFinance
     * @return \Illuminate\Http\Response
     */
    public function show(SourceFinance $sourceFinance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SourceFinance  $sourceFinance
     * @return \Illuminate\Http\Response
     */
    public function edit(SourceFinance $sourceFinance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SourceFinance  $sourceFinance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SourceFinance $sourceFinance)
    {
        //
        $sourceFinance->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SourceFinance  $sourceFinance
     * @return \Illuminate\Http\Response
     */
    public function destroy(SourceFinance $sourceFinance)
    {
        //
        $sourceFinance->delete();
    }
}
