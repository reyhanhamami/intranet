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
                    <form action="{{ route('events.storecooporatecalender') }}" method="post">
                    {!! csrf_field() !!}
                        <div class="form-group row ml-2 mt-4">
                            <label for="acara" class="form-label col-sm-2 col-form-label">Nama Acara</label>
                            <input id="acara" type="text" class="form-control col-sm-8" placeholder="Acaranya apa?" name="title">
                        </div>
                        <div class="form-group row ml-2 mt-4">
                            <label for="warna" class="form-label col-sm-2 col-form-label">Warna</label>
                            <input id="warna" type="color" class="form-control col-sm-8" name="color">
                        </div>
                        <div class="form-group row ml-2 mt-4">
                            <label for="start-date" class="form-label col-sm-2 col-form-label">Dari tanggal</label>
                            <input id="start-date" type="date" class="form-control col-sm-8" name="start_date">
                        </div>
                        <div class="form-group row ml-2 mt-4">
                            <label for="end-date" class="form-label col-sm-2 col-form-label">Sampai tanggal</label>
                            <input id="end-date" type="date" class="form-control col-sm-8" name="end_date">
                        </div>
                        <div class="form-group row ml-3 mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="/cooporatecalender" class="btn btn-warning mt-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
