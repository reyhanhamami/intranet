@extends('templates.main')
@section('title', 'Intranet - Detail Personal Event')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Detail Personal Event')
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
                                <a href="{{ route('personalevent')}}" class="btn btn-secondary mt-2"><i class="fas fa-undo mr-2"></i>Kembali</a>
                                   @if(session('delete'))
                                        <div class="alert alert-danger mt-2">
                                        {{session('delete')}}
                                        </div>
                                    @endif
                                   @if(session('update'))
                                        <div class="alert alert-info mt-2">
                                        {{session('update')}}
                                        </div>
                                    @endif
                            </div>
                            <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Acara</th>
                                    <th scope="col">klik untuk download foto</th>
                                    <th scope="col">Tanggal</th>
                                    @if(!Auth::user())
                                    @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
                                    <th scope="col"><i class="fas fa-cogs"></i></th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($personal as $person)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$person->title}}</td>
                                    <td>
                                    <a href='{{url("public/assets/personalevent/realsize/".$person->foto)}}' download>
                                        <img src=' {{url("public/assets/personalevent/realsize/".$person->foto)}}' alt="Gambar tidak ditemukan" width="100" height="100">
                                    </a>
                                    </td>
                                    <td>{{$person->start_date}}</td>
                                    @if(!Auth::user())
                                    @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
                                    <td>
                                        <a href="{{$person->id_eventpersonal}}/geteditpersonalevent" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{$person->id_eventpersonal}}" method="post" class="d-inline">
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
