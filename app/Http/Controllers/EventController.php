<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

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
    public function store(){
        Event::create([
            'title' => request('title'),
            'color' => request('color'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
        ]);
        return redirect()->route('events.cooporatecalender')->with('success', 'Events Added');
    }
    public function edit(){
        $editevents = Event::all();
        // $event = Event::find($id);
        return view('events.editcooporatecalender', compact('editevents'));
    }
    public function update(Request $request, $id){
        // validasi data 
        $this->validate($request, [
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        // mencari table event where id 
        $eventsid = Event::find($id);
        // memasukan data
        $eventsid->title = $request->input('title');
        $eventsid->color = $request->input('color');
        $eventsid->start_date = $request->input('start_date');
        $eventsid->end_date = $request->input('end_date');
        
        $eventsid->save();
        // tampilin pesan jika data disave
        echo '<script>alert("Data Berhasil diubah")</script>';
        return redirect('/')->with('success','Data Update'); 
        // return view('events.updatecooporatecalender', compact('updateevents'));
    }
}
