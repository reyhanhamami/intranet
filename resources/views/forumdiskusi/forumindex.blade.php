@extends('templates.main')
@section('title', 'Intranet - Forum diskusi')

<!-- start body  -->
<div class="container-fluid">
    @section('judul', 'Forum Diskusi')
    @section('sub', 'BWA')

    @section('konten')
    <div class="row">
        <div class="col-12">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <a href="{{route('postforum')}}" class="btn btn-sm btn-dark text-white"><i class="fas fa-plus"></i> Post</a>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Author</th>
                <th scope="col">Topic</th>
                <th scope="col">Label</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total Balesan</th>
                <th scope="col"><i class="fas fa-cogs"></i> </th>
                </tr>
            </thead>
            <tbody>
                <!-- looping topic  -->
                @foreach($forum as $forums)
                <tr>
                <td><i class="fas fa-circle text-danger"></i> {{$forums->author_diskusi}}</td>
                <td><a href="{{url('forumdiskusi/topic/'.$forums->id_diskusi)}}">{{$forums->topic_diskusi}}</a></td>
                <td><span class="badge badge-primary badge-counter">{{$forums->label_diskusi}}</span></td>
                <td><i class="fas fa-calendar-alt"> {{$forums->tanggal_diskusi}}</i></td>
                <td><span class="badge badge-info badge-counter">3</span><i class="fab fa-stack-exchange text-success"></i></td>
                @if(Auth::user()->name == $forums->author_diskusi)
                <td>
                    <a href="" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{url('forumdiskusi'.$forums->id_forum)}}" class="d-inline">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                @else
                <td></td>
                @endif
                </tr>
                @endforeach
                {{$forum->links()}}
                <!-- end looping  -->
            </tbody>
            </table>
        </div>
    </div>
    @endsection('konten')
</div>