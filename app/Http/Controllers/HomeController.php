<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{
    public function index(){
        $events = Event::get();
        return view('index', compact('events'));
    }
}
