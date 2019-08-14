<?php

namespace App\Http\Controllers;

use App\polling;
use Illuminate\Http\Request;

class PollingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('polling.pollingindex');
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
     * @param  \App\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function show(polling $polling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function edit(polling $polling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, polling $polling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function destroy(polling $polling)
    {
        //
    }
}
