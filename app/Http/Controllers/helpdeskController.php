<?php

namespace App\Http\Controllers;

use App\helpdesk;
use Illuminate\Http\Request;

class helpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('helpdesk.helpindex');
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
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function show(helpdesk $helpdesk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function edit(helpdesk $helpdesk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, helpdesk $helpdesk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function destroy(helpdesk $helpdesk)
    {
        //
    }
}
