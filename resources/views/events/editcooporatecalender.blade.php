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
                            </div>
                            <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Acara</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col"><i class="fas fa-cogs"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($editevents as $event)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->start_date}}</td>
                                    <td>
                                        <a href="{{ route('events.updatecooporatecalender', $event['id']) }}" class="btn btn-primary mr-2 mt-2" type="submit">Ubah</a>
                                        <a href="{{action('EventController@delete', $event['id'])}}" class="btn btn-danger mr-2 mt-2" type="submit">hapus</a>
                                    </td>
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
