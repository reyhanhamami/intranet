@extends('templates.main')
@section('title', 'Intranet - Update Event')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Update Event')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card shadow border-left-warning">
                    <input type="hidden" name="_method" value="UPDATE">
                    <form action="{{ action('EventController@update', $id) }}" method="POST">
                    {!! csrf_field() !!}
                        <div class="form-group row ml-2 mt-4">
                            <label for="acara" class="form-label col-sm-2 col-form-label">Nama Acara</label>
                            <input value="{{$eventsid->title}}" id="acara" type="text" class="form-control col-sm-8" placeholder="Acaranya apa?" name="title">
                        </div>
                        <div class="form-group row ml-2 mt-4">
                            <label for="warna" class="form-label col-sm-2 col-form-label">Warna</label>
                            <input value="{{$eventsid->color}}" id="warna" type="color" class="form-control col-sm-8" name="color">
                        </div>
                        <div class="form-group row ml-2 mt-4">
                            <label for="start-date" class="form-label col-sm-2 col-form-label">Dari tanggal</label>
                            <input value="{{$eventsid->start_date}}" id="start-date" type="date" class="form-control col-sm-8" name="start_date">
                        </div>
                        <div class="form-group row ml-2 mt-4">
                            <label for="end-date" class="form-label col-sm-2 col-form-label">Sampai tanggal</label>
                            <input value="{{$eventsid->end_date}}" id="end-date" type="date" class="form-control col-sm-8" name="end_date">
                        </div>
                        <div class="form-group row ml-3 mt-4">
                            {{ method_field('PUT') }}
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('events.cooporatecalender')}}" class="btn btn-warning mt-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
