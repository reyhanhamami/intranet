<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Event;
use App\Pencerahan;
use App\mastertype;
use App\Pengumuman;
use App\Personal;
use App\Tasks;
use App\User;

class HomeController extends Controller
{
    public function index(){
        // panggil data event 
        $events = Event::paginate(5);
        $eventfirst = DB::table('events')->orderBy('id_eventcooporate', 'asc')->pluck('id_eventcooporate')->first();
        // panggil data inner join pencerahan on mastertype
        $mastertype = DB::table('pencerahan')->join('mastertype', 'pencerahan.type', '=', 'mastertype.id_type')->select('pencerahan.*', 'mastertype.nama')->get();
        // panggil data pengumuman
        $pengumuman = Pengumuman::get();
        // ambil pengumuman id pertama
        $pengumumanfirst = DB::table('pengumuman')->orderBy('id_pengumuman', 'asc')->pluck('id_pengumuman')->first();
        // panggil data personal event dan ambil juga id urutan pertamanya
        $personalevent = Personal::paginate(5);
        $personaleventfirst = DB::table('eventpersonal')->orderBy('id_eventpersonal', 'asc')->pluck('id_eventpersonal')->first();
        // panggil data tasks join user and where employee.tasks = id.user
        $tasks = DB::table('tasks')->join('users', 'tasks.employee', '=', 'users.id')->select('tasks.*', 'users.*')->get();
        
        return view('index', compact('events' , 'mastertype','eventfirst', 'pengumuman','pengumumanfirst', 'personalevent','personaleventfirst', 'tasks'));
    }
}
