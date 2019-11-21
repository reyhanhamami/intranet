<?php

namespace App\Http\Controllers;

use App\forum;
use Illuminate\Http\Request;

class ForumdiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = Forum::paginate(20);
        return view('forumdiskusi.forumindex', compact('forum'));
    }
    public function post()
    {
        return view('forumdiskusi.postdiskusi');
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
        $data = $request->all();
        $request->validate([
            'topic_diskusi' => 'required',
            'label_diskusi' => 'required',
            'deskripsi_diskusi' => 'required'
        ]);
        $tes = $request->label_diskusi;
        $data['label_diskusi'] = implode($tes, ' ');
        $data['tanggal_diskusi'] = date("d M Y");
        Forum::create($data);
        return redirect()->route('forum.index')->with('success', 'Topic discussion has created!!');
    }
    public function topic(forum $forum)
    {
        return view('forumdiskusi.topic', compact('forum'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(forum $forum)
    {
        //
    }
}
