<?php

namespace App\Http\Controllers;

use App\jobrequest;
use Illuminate\Http\Request;

class JobrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobrequest.jobindex');
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
     * @param  \App\jobrequest  $jobrequest
     * @return \Illuminate\Http\Response
     */
    public function show(jobrequest $jobrequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobrequest  $jobrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(jobrequest $jobrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobrequest  $jobrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobrequest $jobrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobrequest  $jobrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobrequest $jobrequest)
    {
        //
    }
}
