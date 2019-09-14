<?php

namespace App\Http\Controllers;

use App\pengumuman;
use App\masterdivisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // pengumuman join masterdivisi
        $masterdivisi = DB::table('pengumuman')->join('masterdivisi', 'pengumuman.divisi' ,'=','masterdivisi.id_divisi')->select('pengumuman.*','masterdivisi.nama_divisi')->get();

        return view("pengumuman.pengumumanindex", compact('masterdivisi'));
    }
    public function add()
    {
        $masterdivisi = Masterdivisi::get();
        return view("pengumuman.addpengumuman", compact('masterdivisi'));
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
            'judul' => 'required',
            'divisi' => 'required',
            'deskripsi' => 'required'
        ]);

        Pengumuman::create($request->all());
        return redirect()->route('pengumuman')->with('success', 'data berhasil ditambahkan');
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
        $masterdivisi = Masterdivisi::get();
        return view('pengumuman.editpengumuman', compact('masterdivisi','pengumuman'));
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
        $request->validate([
            'judul' => 'required',
            'divisi' => 'required',
            'deskripsi' => 'required'
        ]);

        Pengumuman::where('id_pengumuman',$pengumuman->id_pengumuman)
            ->update([
                'judul' => $request->judul,
                'divisi' => $request->divisi,
                'deskripsi' => $request->deskripsi
            ]);
        return redirect()->route('pengumuman')->with('update', 'Data '.$pengumuman->judul .' berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {
        Pengumuman::destroy('id_pengumuman', $pengumuman->id_pengumuman);
        return redirect()->back()->with('delete', 'Data ' .$pengumuman->judul. ' sudah terhapus');
    }
}
