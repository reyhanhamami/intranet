<?php

namespace App\Http\Controllers;

use App\listemployee;
use App\masterdivisi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use File;
use Image;

class ListemployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listemployee join divisi
        $join = DB::table('employee')->orderBy('nama','ASC')->join('masterdivisi', 'employee.divisi', '=','masterdivisi.id_divisi')->select('employee.*','masterdivisi.nama_divisi')->paginate(20);
        return view('listemployee.listindex', compact('join'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $join = DB::table('employee')->where('nama','like', "%".$cari."%")->orderBy('nama','ASC')->join('masterdivisi', 'employee.divisi','=','masterdivisi.id_divisi')->select('employee.*','masterdivisi.nama_divisi')->paginate(20);

        return view('listemployee.listindex', compact('join'));
    }
    
    public function detail(listemployee $listemployee)
    {
        $join = DB::table('employee')->join('masterdivisi','employee.divisi','=','masterdivisi.id_divisi')->select('employee.*','masterdivisi.*')->get();
        return view('listemployee.detailemployee', compact('listemployee','join'));
    }

    public function addlist()
    {
        // panggil data masterdivisi untuk looping pemilihan divisi
        $masterdivisi = Masterdivisi::all();
        return view('listemployee.addlistindex', compact('masterdivisi'));
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
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=248,min_height=140',
            'divisi' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'handphone' => 'numeric'
        ]);

        // membuat variable foto untuk menyimpan data 
        $foto = $request->file('foto');

        // membuat nama berdasarkan waktu diupdolad dan nama aslinya 
        $input['imagename'] = time()."-".$foto->getClientOriginalName();

        // nama folder tempat untuk upload 
        $tujuan_upload = public_path("/assets/listemployee");
        
        // ambil real pathnya 
        $img = Image::make($foto->getRealPath());
        
        // trus di resize 
        $img->crop(4318,2000)->resize(318,200)->save($tujuan_upload.'/'.$input['imagename']);
        $tujuan_upload = public_path("/assets/listemployee/realsize");

        $foto->move($tujuan_upload,$input['imagename']);

        Listemployee::create([
            'nama' => $request->nama,
            'foto' => $input['imagename'],
            'divisi' => $request->divisi,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'handphone' => $request->handphone
        ]);

        return redirect()->route('listemployee')->with('success', 'Data berhasil ditambah');
        
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
        $masterdivisi = Masterdivisi::get();

        return view('listemployee.editemployee',compact('masterdivisi','listemployee'));
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
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=268,min_height=180',
            'divisi' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'handphone' => 'numeric'
        ]);
        // simpan data
        $foto = $request->file('foto');
        // kasih nama
        $input['imagename'] = time().'-'.$foto->getClientOriginalName();  
        // taro dimana
        $lokasi = public_path('/assets/listemployee');

        // ambil real pathnya 
        $img = Image::make($foto->getRealPath());

        // crop dan resize 
        $img->crop(318,200)->save($lokasi.'/'.$input['imagename']);

        $lokasi = public_path('/assets/listemployee/realsize/');
        $foto->move($lokasi,$input['imagename']);

        // cari lokasinya dulu
        $lokasifoto = "public/assets/listemployee/$listemployee->foto";
        $lokasifotoreal = "public/assets/listemployee/realsize/$listemployee->foto";
        // kasih kondisi jika ada datanya maka hapus 
        if(File::exists($lokasifoto) and File::exists($lokasifotoreal)){
            File::delete($lokasifoto, $lokasifotoreal);
        }

        Listemployee::where('id_employee', $listemployee->id_employee)
            ->update([
                'nama' => $request->nama,
                'foto' => $input['imagename'],
                'divisi' => $request->divisi,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'handphone' => $request->handphone
            ]);
        return redirect()->route('listemployee')->with('update', 'Data karyawan bernama '. $listemployee->nama .' Berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\listemployee  $listemployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(listemployee $listemployee)
    {
        // cari lokasinya dulu
        $lokasifoto = "public/assets/listemployee/$listemployee->foto";
        $lokasifotoreal = "public/assets/listemployee/realsize/$listemployee->foto";
        // kasih kondisi jika ada datanya maka hapus 
        if(File::exists($lokasifoto) and File::exists($lokasifotoreal)){
            File::delete($lokasifoto, $lokasifotoreal);
        }
        Listemployee::destroy($listemployee->id_employee);
        return redirect()->back()->with('hapus','Data karyawan bernama ' . $listemployee->nama . ' berhasil dihapus');
    }
}
