<?php

namespace App\Http\Controllers;

use App\education;
use App\masterdivisi;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Untuk Education Produk IT 
    public function productit()
    {
        // $education = Education::get();
        $masterdivisi = DB::table('education')->join('masterdivisi','education.divisi','masterdivisi.id_divisi')->select('education.*','masterdivisi.nama_divisi')->paginate(20);
        // $first = DB::table('education')->pluck('file')->first();
        // $path = 'public/assets/document/'.$first;
        // return  response()->file($path);
        return view ('education.productit', compact('masterdivisi'));
    }
    public function cari(Request $request)
    {
        
        // menangkap data pencarian
        $cari = $request->cari;
        $masterdivisi = DB::table('education')->where('judul','like',"%".$cari."%")->orWhere('nama_divisi','like','%'.$cari.'%')->join('masterdivisi','education.divisi','masterdivisi.id_divisi')->select('education.*','masterdivisi.nama_divisi')->paginate(20);
        // membuat query pencarian 
        
        return view ('education.productit', compact('masterdivisi'));
    }
    public function addproductit()
    {
        $masterdivisi = Masterdivisi::get();
        return view('education.addproductit', compact('masterdivisi'));
    }
    public function storeproductit(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'divisi' => 'required',
            'file' => 'file|mimes:pdf',
        ]);

        // kasih nama foto 
        $file = $request->file('file');

        // kasih nama
        $nama_file = rand().'-'.$file->getClientOriginalName();

        // kasih rumah
        $lokasi_file = 'public/assets/document';

        // pindahin nama ke rumah yang seharusnya
        $file->move($lokasi_file,$nama_file);

        Education::create([
            'judul' => $request->judul,
            'divisi' => $request->divisi,
            'file' => $nama_file,
        ]);
        return redirect()->route('education.productit')->with('success','Data berhasil ditambahkan');
    }

    public function destroyproductit(Education $education){
        // cari lokasi foldernya
        $file_path = "public/assets/document/$education->file";

        // cek kondisi jika ada maka hapus
        if(File::exists($file_path)){
            File::delete($file_path);
        };

        Education::destroy($education->id_education);
        return redirect()->back()->with('delete', 'Data '.$education->judul.' berhasil dihapus');
    }

    public function editproductit(Education $education)
    {
        $masterdivisi = Masterdivisi::get();
        return view('education.editproductit', compact('education','masterdivisi'));
    }
    
    public function updateproductit(Request $request, Education $education)
    {
           $request->validate([
            'judul' => 'required',
            'divisi' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        // kasih nama foto 
        $file = $request->file('file');

        // kasih nama
        $nama_file = rand().'-'.$file->getClientOriginalName();

        // kasih rumah
        $lokasi_file = 'public/assets/document';
        
        // pindahin nama ke rumah yang seharusnya
        $file->move($lokasi_file,$nama_file);

        // cek kondisi jika ada maka hapus
        if(File::exists($file_path)){
            File::delete($file_path);
        };

        Education::where('id_education', $education->id_education)
                ->update([
            'judul' => $request->judul,
            'divisi' => $request->divisi,
            'file' => $nama_file,
        ]);
        return redirect()->route('education.productit')->with('update','Data '.$education->judul.' Berhasil di rubah');
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
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(education $education)
    {
        //
    }
}
