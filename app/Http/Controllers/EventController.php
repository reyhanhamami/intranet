<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;
use File;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
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
        $calendar = Calendar::addEvents($events);
        return view('events.cooporatecalender', compact('calendar'));
    }
    public function add(){
        return view('events.addcooporatecalender');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=357,min_height=210,max_width=457,max_height=310',
            'start_date' => 'required',
            'end_date' => 'required',
            'deskripsi' => 'required',
        ]);
        
        // simpan di variabel untuk request file
        $foto = $request->file('foto');

        // kasih nama untuk foto
        $nama_foto = time()."-".$foto->getClientOriginalName();

        // kasih rumah untuk nyimpen nama 
        $lokasi = 'public/assets/cooporateevent';
        // pindahin tuh nama ke rumahnya
        $foto->move($lokasi,$nama_foto);


        Event::create([
            'title' => $request->title,
            'foto' => $nama_foto,
            'color' => $request->color,
            'deskripsi' => $request->deskripsi,
            'url' => $request->url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect()->route('events.cooporatecalender')->with('success', 'Acara berhasil ditambahkan');
    }
    public function edit(){
        $editevents = Event::get();
        // $event = Event::find($id);
        return view('events.editcooporatecalender', compact('editevents'));
    }
    public function getedit(Event $event){
        return view('events.geteditcooporatecalender', compact('event'));
    }
    public function update(Request $request, Event $event){
          $request->validate([
            'title' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=357,min_height=210,max_width=457,max_height=401',
            'start_date' => 'required',
            'end_date' => 'required',
            'deskripsi' => 'required',
        ]);
        
        // simpan di variabel untuk request file
        $foto = $request->file('foto');

        // kasih nama untuk foto
        $nama_foto = time()."-".$foto->getClientOriginalName();

        // kasih rumah untuk nyimpen nama 
        $lokasi = 'public/assets/cooporateevent';
        // pindahin tuh nama ke rumahnya
        $foto->move($lokasi,$nama_foto);
        
        Event::where('id_eventcooporate', $event->id_eventcooporate)
                ->update([
                    'title' => $request->title,
                    'foto' => $nama_foto,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'deskripsi' => $request->deskripsi,
                    'url' => $request->url
                ]);
        return redirect()->route('events.cooporatecalender')->with('update','Data '.$event->title. ' berhasil di update'); 
    }

    public function destroy(Event $event){
        // cari lokasi fotonya 
        $image_path = "public/assets/cooporateevent/$event->foto";
        // klo ditemuin hapus klo engak yaudah 
        if(File::exists($image_path)){
            File::delete($image_path);
        };
        Event::destroy($event->id_eventcooporate);
        return redirect()->back()->with('delete','Acara '.$event->title.' berhasil dihapus');
    }
}
