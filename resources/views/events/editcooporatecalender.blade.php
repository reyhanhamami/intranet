@extends('templates.main')
@section('title', 'Intranet - Add Event')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Event')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card shadow border-left-warning">
                       <!-- upcoming events personal-->
                        <div class="col-12">
                            <div class="card shadow">
                            <div class="card-header">
                                <h6>Upcoming Personal Events</h6>
                                <a href="{{ route('events.cooporatecalender')}}" class="btn btn-secondary mt-2"><i class="fas fa-undo mr-2"></i>Kembali</a>
                                   @if(session('delete'))
                                        <div class="alert alert-danger mt-2">
                                        {{session('delete')}}
                                        </div>
                                    @endif
                            </div>
                            <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Acara</th>
                                    <th scope="col">Klik foto untuk download foto</th>
                                    <th scope="col">Tanggal</th>
                                    @if(!Auth::user())
                                    @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
                                    <th scope="col"><i class="fas fa-cogs"></i></th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($editevents as $event)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$event->title}}</td>
                                    <td>
                                    <a href='{{url("public/assets/cooporateevent/realsize/".$event->foto)}}' download>
                                    <img src='{{url("public/assets/cooporateevent/realsize/".$event->foto)}}' alt="Gambar tidak ditemukan" width="100" height="100" download>
                                    </a>
                                    </td>
                                    <td>{{$event->start_date}}</td>
                                    @if(!Auth::user())
                                    @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
                                    <td>
                                        <a href="{{$event->id_eventcooporate}}/geteditcooporatecalender" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{$event->id_eventcooporate}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                            <button  class="btn btn-danger btn-sm " type="submit"><i class="fas fa-trash"></i> hapus</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div> <!-- end upcoming event personal -->
                        <div class="form-group row ml-3 mt-4">
                       
                        </div>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
