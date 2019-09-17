<?php

namespace App\Http\Controllers;

use App\personal;
use Illuminate\Http\Request;
use Calendar;
use File;


class PersonalController extends Controller
{
   public function index()
    {
        $personals = [];
        $data = Personal::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $personals[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
                        'color' => $value->color,
	                    // 'url' => '{{ route("events.detailcooporatecalender") }}',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($personals);
        return view('personalevent.personalevent', compact('calendar'));
    }
    public function add(){
        return view('personalevent.addpersonalevent');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=357,min_height=210,max_width=457,max_height=400',
            'start_date' => 'required',
            'end_date' => 'required',
            'deskripsi' => 'required',
        ]);
        
        // simpan di variabel untuk request file
        $foto = $request->file('foto');

        // kasih nama untuk foto
        $nama_foto = time()."-".$foto->getClientOriginalName();

        // kasih rumah untuk nyimpen nama 
        $lokasi = 'public/assets/personalevent';
        // pindahin tuh nama ke rumahnya
        $foto->move($lokasi,$nama_foto);


        Personal::create([
            'title' => $request->title,
            'foto' => $nama_foto,
            'color' => $request->color,
            'deskripsi' => $request->deskripsi,
            'url' => $request->url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect()->route('personalevent')->with('success', 'Acara berhasil ditambahkan');
    }
    
    public function edit(){
        $personal = Personal::get();
        return view('personalevent.editpersonalevent', compact('personal'));
    }

    public function getedit(personal $personal){
        return view('personalevent.geteditpersonalevent', compact('personal'));
    }
    public function update(Request $request, Personal $personal){
          $request->validate([
            'title' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=357,min_height=210,max_width=457,max_height=401',
            'start_date' => 'required',
            'end_date' => 'required',
            'deskripsi' => 'required',
        ]);
        
        // cari lokasi fotonya 
        $image_path = "public/assets/personalevent/$personal->foto";
        // klo ditemuin hapus klo engak yaudah 
        if(File::exists($image_path)){
            File::delete($image_path);
        };
        
        // simpan di variabel untuk request file
        $foto = $request->file('foto');

        // kasih nama untuk foto
        $nama_foto = time()."-".$foto->getClientOriginalName();

        // kasih rumah untuk nyimpen nama 
        $lokasi = 'public/assets/personalevent';
        // pindahin tuh nama ke rumahnya
        $foto->move($lokasi,$nama_foto);
        
        Personal::where('id_eventpersonal', $personal->id_eventpersonal)
                ->update([
                    'title' => $request->title,
                    'foto' => $nama_foto,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'deskripsi' => $request->deskripsi,
                    'url' => $request->url
                ]);
        return redirect()->route('editpersonalevent')->with('update','Data '.$personal->title. ' berhasil di update'); 
    }

    public function destroy(Personal $personal){
        // cari lokasi fotonya 
        $image_path = "public/assets/personalevent/$personal->foto";
        // klo ditemuin hapus klo engak yaudah 
        if(File::exists($image_path)){
            File::delete($image_path);
        };
        Personal::destroy($personal->id_eventpersonal);
        return redirect()->back()->with('delete','Acara '.$personal->title.' berhasil dihapus');
    }
}
