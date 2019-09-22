<?php

namespace App\Http\Controllers;

use App\tasks;
use App\User;
use App\masterdivisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        // ambil data join antara tasks dan user 
        $join = DB::table('tasks')
                ->where('nama_divisi','=','Teknologi Informasi')
                ->join('users', 'tasks.employee','=','users.id')
                ->join('masterdivisi','users.divisi','=','masterdivisi.id_divisi')
                ->select('tasks.nama_tasks','users.*','masterdivisi.nama_divisi')->get();
        // dd($join);
                return view('tasks.tasksindex', compact('user','join'));
    }

    public function add(Request $request)
    {
        return view('tasks.addtasks');
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
            'nama_tasks' => 'required',
        ]);
        
        Tasks::create($request->all());
        return redirect()->route('dashboard')->with('success','tugas baru sudah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(tasks $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tasks $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(tasks $tasks)
    {
        Tasks::destroy('id_tasks' , $tasks->id_tasks);
        return redirect()->back();
    }
}
