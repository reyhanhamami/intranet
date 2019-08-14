<?php

namespace App\Http\Controllers;

use App\wiki;
use Illuminate\Http\Request;

class WikiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wiki.wikiindex');
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
     * @param  \App\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function show(wiki $wiki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function edit(wiki $wiki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wiki $wiki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function destroy(wiki $wiki)
    {
        //
    }
}
