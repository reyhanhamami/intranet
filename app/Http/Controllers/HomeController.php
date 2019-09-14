<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Event;
use App\Pencerahan;
use App\mastertype;
use App\Pengumuman;

class HomeController extends Controller
{
    public function index(){
        // panggil data event 
        $events = Event::get();
        $eventfirst = DB::table('events')->orderBy('id_eventcooporate', 'asc')->pluck('id_eventcooporate')->first();
        // panggil data inner join pencerahan on mastertype
        $mastertype = DB::table('pencerahan')->join('mastertype', 'pencerahan.type', '=', 'mastertype.id_type')->select('pencerahan.*', 'mastertype.nama')->get();
        // panggil data pengumuman
        $pengumuman = Pengumuman::get();
        // ambil pengumuman id pertama
        $pengumumanfirst = DB::table('pengumuman')->orderBy('id_pengumuman', 'asc')->pluck('id_pengumuman')->first();

        return view('index', compact('events' , 'mastertype','eventfirst', 'pengumuman','pengumumanfirst'));
    }
}
