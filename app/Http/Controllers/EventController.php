<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;
use File;
use Image;

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
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'start_date' => 'required',
            'end_date' => 'required',
            'deskripsi' => 'required',
        ]);
        // buat variabel untuk mengambil request dari form input file 
        $image = $request->file('foto');
        
        // dikasih nama
        $input['imagename'] = time().'-'.$image->getClientOriginalName();

        // lokasi folder untuk foto yang sudah diresize 
        $destinationPath = public_path('/assets/cooporateevent');
        
        // buat variabel baru untuk mengambil size aslinya
        $img = Image::make($image->getRealPath());
        // abis itu size aslinya di resize 
        $img->resize(447, 400)->save($destinationPath.'/'.$input['imagename']);

        // lokasi folder untuk menaruh size yang asli
        $destinationPath = public_path('/assets/cooporateevent/realsize');

        // pindahin foto ke lokasinya
        $image->move($destinationPath, $input['imagename']);
        
        Event::create([
            'title' => $request->title,
            'foto' => $input['imagename'],
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
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'start_date' => 'required',
            'end_date' => 'required',
            'deskripsi' => 'required',
        ]);
        
         // buat variabel untuk mengambil request dari form input file 
        $image = $request->file('foto');
        
        // dikasih nama
        $input['imagename'] = time().'-'.$image->getClientOriginalName();

        // lokasi folder untuk foto yang sudah diresize 
        $destinationPath = public_path('/assets/cooporateevent');
        
        // buat variabel baru untuk mengambil size aslinya
        $img = Image::make($image->getRealPath());
        // abis itu size aslinya di resize 
        $img->resize(447, 400)->save($destinationPath.'/'.$input['imagename']);

        // lokasi folder untuk menaruh size yang asli
        $destinationPath = public_path('/assets/cooporateevent/realsize');
       
        // pindahin foto ke lokasinya
        $image->move($destinationPath, $input['imagename']);

        $image_path = "public/assets/cooporateevent/$event->foto";
        $image_path_real = "public/assets/cooporateevent/realsize/$event->foto";
        // klo ditemuin hapus klo engak yaudah 
        if(File::exists($image_path) and File::exists($image_path_real)){
            File::delete($image_path,$image_path_real);
        };
        
        Event::where('id_eventcooporate', $event->id_eventcooporate)
                ->update([
                    'title' => $request->title,
                    'foto' => $input['imagename'],
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
        $image_path_real = "public/assets/cooporateevent/realsize/$event->foto";
        // klo ditemuin hapus klo engak yaudah 
        if(File::exists($image_path) and File::exists($image_path_real)){
            File::delete($image_path,$image_path_real);
        };
        Event::destroy($event->id_eventcooporate);
        return redirect()->back()->with('delete','Acara '.$event->title.' berhasil dihapus');
    }
}
