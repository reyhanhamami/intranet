<?php

namespace App\Http\Controllers;

use App\projects;
use App\Masterdivisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampung = Projects::count();
        $projects = Projects::get();
        $masterdivisi = Masterdivisi::get();

        $join = DB::table('projects')->join('masterdivisi','divisi_projects','=','masterdivisi.id_divisi')->select('masterdivisi.*','projects.*')->get();
        $satu = $join->where('id_divisi','=',1);
        $dua = $join->where('id_divisi','=',2);
        $tiga = $join->where('id_divisi','=',3);
        $empat = $join->where('id_divisi','=',4);
        $lima = $join->where('id_divisi','=',5);
        return view('projects.projectsindex', compact('join', 'tampung','masterdivisi','projects','satu','dua','tiga','empat','lima'));
        // dd($tes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masterdivisi = Masterdivisi::get();

        return view('projects.addprojects', compact('masterdivisi'));
    }
    public function detail()
    {
        $join = DB::table('projects')->join('masterdivisi','divisi_projects','=','masterdivisi.id_divisi')->select('masterdivisi.*','projects.*')->orderBy('nama_divisi','ASC')->paginate(10);
        return view('projects.detailprojects', compact('join'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'nama_projects' => 'required',
            'divisi_projects' => 'required',
            'status_projects' => 'required',
            'persentase_projects' => 'required|numeric|max:100'
        ]);

        Projects::create($data);
        return redirect()->route('projects.index')->with('update','projects berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(projects $projects)
    {
        $masterdivisi = Masterdivisi::get();
        return view('projects.editprojects', compact('projects','masterdivisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projects $projects)
    {
        $data = $request->except('_method','_token');
        $request->validate([
            'nama_projects' => 'required',
            'divisi_projects' => 'required',
            'status_projects' => 'required',
            'persentase_projects' => 'required|numeric|max:100'
        ]);
        Projects::where('id_projects',$projects->id_projects)->update($data);
        return redirect()->route('detailprojects')->with('update','projects '.$projects->nama_projects.' berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(projects $projects)
    {
        Projects::destroy('id_projects', $projects->id_projects);
        return redirect()->route('detailprojects')->with('delete','projects '.$projects->nama_projects.' berhasil dihapus');
    }
}
