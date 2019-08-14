<?php

namespace App\Http\Controllers;

use App\listemployee;
use Illuminate\Http\Request;

class ListemployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('listemployee.listindex');
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
     * @param  \App\listemployee  $listemployee
     * @return \Illuminate\Http\Response
     */
    public function show(listemployee $listemployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\listemployee  $listemployee
     * @return \Illuminate\Http\Response
     */
    public function edit(listemployee $listemployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\listemployee  $listemployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listemployee $listemployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\listemployee  $listemployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(listemployee $listemployee)
    {
        //
    }
}
