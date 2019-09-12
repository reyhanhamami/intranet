<?php

namespace App\Http\Controllers;

use App\pencerahan;
use App\mastertype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PencerahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pencerahan = DB::table('pencerahan')->join('mastertype', 'pencerahan.type', '=', 'mastertype.id_type')->select('pencerahan.*','mastertype.nama')->get();
        return view('pencerahan.pencerahanindex', compact('pencerahan'));
    }
    public function add()
    {   
        $type = Mastertype::all();
        // $type = DB::table('pencerahan')->join('mastertype', 'pencerahan.id_pencerahan', '=', 'mastertype.id_type')->select('pencerahan.*','mastertype.nama')->get();
        return view('pencerahan.addpencerahan', compact('type'));
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
        $request->validate([
            'type' => 'required',
            'deskripsi' => 'required',
        ]);
        Pencerahan::create($request->all());
        return redirect()->route('pencerahan')->with('success', 'Data Berhasil ditambahkan');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pencerahan  $pencerahan
     * @return \Illuminate\Http\Response
     */
    public function show(pencerahan $pencerahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pencerahan  $pencerahan
     * @return \Illuminate\Http\Response
     */
    public function edit(pencerahan $pencerahan)
    {
        // return $pencerahan;
        $mastertype = Mastertype::all();
        // dd($mastertype);
        // dd($cerah);
        return view('pencerahan.editpencerahan', compact('pencerahan', 'mastertype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pencerahan  $pencerahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pencerahan $pencerahan)
    {
        $request->validate([
            'type' => 'required',
            'deskripsi' => 'required'
        ]);
        Pencerahan::where('id_pencerahan', $pencerahan->id_pencerahan)
                    ->update([
                        'type' => $request->type,
                        'deskripsi' => $request->deskripsi
                    ]);
        return redirect()->route('pencerahan')->with('update', 'Data berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pencerahan  $pencerahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pencerahan $pencerahan)
    {
        Pencerahan::destroy($pencerahan->id_pencerahan);
        return redirect()->back()->with('hapus', 'Data berhasil dihapus');
    }
}
