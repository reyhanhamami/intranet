<?php

namespace App\Http\Controllers;

use App\artikel;
use Illuminate\Http\Request;
use File;
use Image;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $halaman = 'artikel';
        $artikels = Artikel::get();
        return view('artikel.artikelindex', compact('artikels'));
    }
    public function addartikel(){
        return view('artikel.addartikelindex');
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
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=308,min_height=200',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);
        
        // simpan foto di variabel foto 
        $foto = $request->file('foto');

        // namain dulu 
        $input['imagename'] = time()."-".$foto->getClientOriginalName();

        // mau ditaro mana
        $folder = public_path('/assets/artikel');
        
        // ambil real pathnya 
        $img = Image::make($foto->getRealPath());
        
        // trus di resize 
        $img->crop(658,530)->resize(358,250)->save($folder.'/'.$input['imagename']);
        $folder = public_path("/assets/artikel/realsize");

        $foto->move($folder,$input['imagename']);


        Artikel::create([
            'judul' => $request->judul,
            'foto' => $input['imagename'],
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('artikel.index')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
        //
    }
    public function detail(artikel $artikel) 
    {
        return view('artikel.detailartikel', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        return view('artikel.editartikel', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        $data = $request->except(['_method','_token']);
        $request->validate([
            'judul' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|dimensions:max_width=358,max_height=250',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);

        if($request->hasFile('foto')){
        // cari lokasi foto
        $image_path = "public/assets/artikel/$artikel->foto";

        // kasih kondisi jika ada fotonya hapus 
        if(File::exists($image_path)){
            File::delete($image_path);
        };

        // simpan foto di variabel foto 
        $foto = $request->file('foto');

        // namain dulu 
        $input['imagename'] = time()."-".$foto->getClientOriginalName();

        // mau ditaro mana
        $folder = public_path('/assets/artikel');
        
        // ambil real pathnya 
        $img = Image::make($foto->getRealPath());
        
        // trus di resize 
        $img->crop(658,530)->resize(358,250)->save($folder.'/'.$input['imagename']);
        $folder = public_path("/assets/artikel/realsize");

        $foto->move($folder,$input['imagename']);
        $data['foto'] = $input['imagename'];
        }

        Artikel::where('id_artikel', $artikel->id_artikel)->update($data);
        return redirect()->route('artikel.index')->with('update', 'Judul '.$request->judul.' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        // cari lokasi foto
        $image_path = "public/assets/artikel/$artikel->foto";

        // kasih kondisi jika ada fotonya hapus 
        if(File::exists($image_path)){
            File::delete($image_path);
        };

        Artikel::destroy('id_artikel', $artikel->id_artikel);
        return redirect()->back()->with('delete','Judul '. $artikel->judul . ' Berhasil dihapus!');
    }
}
