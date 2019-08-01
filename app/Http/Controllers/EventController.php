<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
<<<<<<< HEAD
    public function index(){
=======
    public function index()
    {
>>>>>>> add calender and button
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
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
<<<<<<< HEAD
        return view('fullcalender', compact('calendar'));
=======
        return view('cooporatecalender', compact('calendar'));
    }
    public function add(){
        return view('addCooporateCalender');
>>>>>>> add calender and button
    }
}
