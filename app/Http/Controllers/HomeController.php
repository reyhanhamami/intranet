<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Event;
use App\Pencerahan;
use App\mastertype;

class HomeController extends Controller
{
    public function index(){
        // panggil data event 
        $events = Event::all();

        // panggil data pencerahan
        // $pencerahan = Pencerahan::all();
        // panggil data inner join pencerahan on mastertype
        $mastertype = DB::table('pencerahan')->join('mastertype', 'pencerahan.type', '=', 'mastertype.id_type')->select('pencerahan.*', 'mastertype.nama')->get();

        return view('index', compact('events' , 'mastertype'));
    }
}
