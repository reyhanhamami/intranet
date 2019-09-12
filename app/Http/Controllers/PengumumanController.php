<?php

namespace App\Http\Controllers;

use App\pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pengumuman.pengumumanindex");
    }
    public function add(){
        return view("pengumuman.addpengumuman");
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
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {
        //
    }
}
