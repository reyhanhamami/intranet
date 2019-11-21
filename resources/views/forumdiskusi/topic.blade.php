@extends('templates.main')
@section('title', 'Intranet - Forum diskusi')

<!-- start body  -->
<div class="container-fluid">
    @section('judul', 'Forum Diskusi')
    @section('sub', 'BWA')

    @section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <b class="card-title border-bottom">{{strtoupper($forum->topic_diskusi)}}</b>
                <a class="float-right btn btn-outline-danger btn-sm text-danger" ><i class="fas fa-trash"></i></a>
                <a class="float-right btn btn-outline-primary btn-sm text-primary" id="edit" onclick="edit()"><i class="fas fa-edit"></i></a>
                <p class="card-title text-muted">{{$forum->author_diskusi}} | <span><i class='fas fa-calendar'></i> {{strtolower(date("M Y",strtotime($forum->tanggal_diskusi)))}}</span></p>
                <p class="card-text click2edit">{!!$forum->deskripsi_diskusi!!}</p>
            </div>
            </div>
        </div>
    </div>
    @endsection('konten')
</div>
